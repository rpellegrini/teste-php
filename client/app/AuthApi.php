<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;

class AuthApi extends Model
{
    private $token;

    public function __construct()
    {
        $client = new Guzzle;
        try{
            $response = $client->request('POST', env('URL_API')."auth",[
              'form_params' => [
                'email'    => 'admin@admin.com.br',
                'password' => 'admin123',
              ]
            ]);
            $this->token = json_decode($response->getBody())->token;
       } catch (RequestException $e){
         dd($e->getMessage());
       }

    }

    public function getToken()
    {
      return $this->token;
    }
}
