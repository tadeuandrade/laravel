<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function listar(){
        $produtos = [
            "Notebook Asus 17 16gb",
            "Mouse e Teclado Microsoft USB",
            "Monitor 21 Samsung",
            "IMpressora HP",
            "Disco SSD 512gb"
        ];
        $produtos=[];
        return view('produtos', compact('produtos'));
    }
}
