<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use  App\validador\validaCPF;

class cpfController extends Controller
{
    public function consultaCPF() 
    {
        return view('cpf.consultaCPF');
    }
                    
    public function validaCPF( )
    {
      $cpf =   request('cpf', 0);
      
      $iscpf = new validaCPF();
     
     
      $a =  $iscpf->cpfValido($cpf);
      return view('cpf.validaCPF')->with('cpf',$a);
    
    }
}

