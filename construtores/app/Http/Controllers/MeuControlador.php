<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome(){
        return "Jose";
    }
    public function getIdade(){
        return "20 anos";
    }
    public function multiplicar($n1, $n2){
        return $n1*$n2;

    }
    public function getnomeByID($id){
        $v = ["Mario", "Edson", "Roberto", "Jean"];
        if ($id>=0 && $id < count($v)) 
            return $v[$id];
            return "Nao encontrado";
        
    }
}
