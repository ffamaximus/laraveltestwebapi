<?php

namespace App\Http\Controllers;
use App\MiModelo;
class MiController extends Controller
{
    function index(){
        $modelo = new MiModelo();
        $resultado = $modelo->saludo("Andres");
        return view("Prueba.index", ["saludo"=>$resultado]);
    }
    
}
