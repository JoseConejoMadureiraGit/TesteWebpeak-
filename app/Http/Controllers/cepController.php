<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Routing\Controller;
class cepController extends Controller
{
    public function consultaCEP()
    {
        return view('cep.consultaCEP');
    }
    
    public function InformaEndereco( )
    {
       $cep =   request('cep', 0);
       $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json/');
       $endereco =  $response->json();
       return view('cep.InformaEndereco')->with('endereco', $endereco );
    }
}
