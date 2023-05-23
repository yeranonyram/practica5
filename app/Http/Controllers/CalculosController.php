<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CalculosController extends Controller
{
    function calcularFibonacci (Request $request)
    {
        $request->validate(['n'=>'required']);
        $n = intval($request->n);
        $a = 0;
        $b = 1;
        $suma = 0;
        $serie =' '.$a.' '.$b.' ';
          for($i=1; $i<=$n-2; $i++){ 
            $suma = $a + $b;
            $serie = $serie.$suma.' ';
            $a=$b;
            $b=$suma;
        }

        return view('vistaFibonacci', compact('n','serie'));

    }

    function calcularPalabras(Request $request)
    {
        $request->validate(['cadena'=>'required']);
        $cadena = $request->cadena;
        $numeroPalabras = str_word_count($cadena);

        return view('vistaPalabras', compact('cadena','numeroPalabras'));
    }

    function calcularVocales(Request $request)
    {
        $request->validate(['cadena'=>'required']);
        $cadena = $request->cadena;
        $vocales =  substr_count(strtolower($cadena), 'a')+
                    substr_count(strtolower($cadena), 'e')+
                    substr_count(strtolower($cadena), 'i')+
                    substr_count(strtolower($cadena), 'o')+
                    substr_count(strtolower($cadena), 'u');
        return view('vistaVocales', compact('cadena','vocales'));
    }

    function calcularNumeroPerfecto(Request $request)
    {
        $request-> validate(['n'=>'required']);
        $n = $request->n;
        $suma = 0;
        for($i = 1 ; $i < $n; $i++){
            if($n%$i == 0){
                $suma +=$i;
            }
        }
        if($n==$suma){

            $perfecto = "es un numero perfecto";
        }
        else
            $perfecto = "no es un numero perfecto";
        return view('vistaPerfecto', compact('n','perfecto'));
    }
}
