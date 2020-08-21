<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\validador\validaCNPJ;

class cnpjController extends Controller
{
    public function consultaCNPJ()
    {
        return view('cnpj.consultaCNPJ');
    }
    
    public function validaCNPJ( )
    {
        $cpnj =   request('cnpj', 0);
        $validaCNPJ = new validaCNPJ();
        $uuuuuu = $validaCNPJ->validar_cnpj($cpnj);
        
        return view('cnpj.validaCNPJ')->with('cpnj',$uuuuuu);
        
    }
}
