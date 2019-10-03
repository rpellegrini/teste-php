<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthApi;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;

class LancamentoController extends Controller
{

    private $token;

    public function __construct()
    {
      $auth = new AuthApi;
      $this->token = $auth->getToken();
    }

    public function listDespesas()
    {
      $client = new Guzzle;
          $response = $client->request('GET', env('URL_API')."lancamentos",[
            'headers' => [
              'Authorization'  => "Bearer {$this->token}",
            ],
          ]);
        $lancamentos = json_decode($response->getBody());
        return view('lancamentos.index', compact('lancamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lancamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->except('_token');

        $client = new Guzzle;
            $response = $client->request('POST', env('URL_API')."lancamentos",[
              'headers' => [
                'Authorization'  => "Bearer {$this->token}",
              ],
              'form_params'  =>  $dataForm,
            ]);

        return redirect()
                ->route('despesa.index')
                ->with('success','Cadastrado com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
