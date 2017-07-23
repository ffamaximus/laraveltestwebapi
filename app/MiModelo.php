<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class MiModelo extends Model{
    function saludo($nombre){
        return "hola $nombre";
    }
}


?>