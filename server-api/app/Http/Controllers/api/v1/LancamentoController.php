<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\LancamentoRepository;

class LancamentoController extends Controller
{
    private $lancamentoRepository;

    public function __construct(LancamentoRepository $lancamentoRepository)
    {
        $this->lancamentoRepository = $lancamentoRepository;
    }

    public function index()
    {
        $tipo = 2;
        //$lancamentos = $this->lancamentoRepository->findAll();
        $lancamentos = $this->lancamentoRepository->getLancamentos($tipo);
        return response()->json($lancamentos);
    }

    public function store(Request $request)
    {
        $dadosLancamentos = array(
        //  "tipo"      => $request->input('tipo'),
          "tipo"      => 2,
          "data"      => $request->input('data'),
          "descricao" => $request->input('descricao'),
          "valor"     => $request->input('valor')
        );

        try{
            if (!$insert = $this->lancamentoRepository->create($dadosLancamentos))
            {
              return response()->json(['message' => 'Erro ao tentar cadastrar', 'status' => false], 500);
            }else{
              return response()->json(['data' => $insert,'status' => true]);
            }
         }catch (Exception $e)
           {
              return response()->json(['message' => $e->getMessage()]);
           }
    }

    public function update(Request $request, $id)
    {
      try{
         if ( !$lancamento = $this->lancamentoRepository->findById($id) )
             return response()->json(['error' => 'lancamento_not_found'], 404);

             $dadosLancamentos = array(
               "tipo"      => $request->input('tipo'),
               "data"      => $request->input('data'),
               "descricao" => $request->input('descricao'),
               "valor"     => $request->input('valor')
             );

         if ( !$this->lancamentoRepository->update($dadosLancamento,$id) )
             return response()->json(['error' => 'lancamento_not_update'], 500);

         return response()->json($lancamento);

     }catch (Exception $e) {
         return response()->json(['message' => $e->getMessage()]);
     }
    }

    public function destroy($id) {
      try{
             if ( !$lancamento = $this->lancamentoRepository->findById($id) )
              return response()->json(['error' => 'lancamento_not_found'], 404);

             if ( !$this->lancamentoRepository->delete($id) )
              return response()->json(['error' => 'lancamento_not_delete'], 500);

             return response()->json($lancamento);

      }catch (Exception $e) {
          return response()->json(['message' => $e->getMessage()]);
      }
    }
}
