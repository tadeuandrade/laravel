<?php



Route::get('/', function () {
    return view('pagina');
});

Route::get('/primeiraview', function () {
    return view('minhaview');
});


Route::get('/ola', function () {
    return view('minhaview')->with('nome','João')->with('sobrenome','andrade');
});

Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    
    //return view('minhaview')->with('nome',$nome)->with('sobrenome',$sobrenome);

    //$parametros = ['nome'=>$nome, 'sobrenome'=>$sobrenome];
    //return view('minhaview', $parametros);

    return view('minhaview', compact('nome', 'sobrenome'));

});

Route::get('/email/{email}', function($email){
    if(view::exists('email'))
    return view('email', compact('email'));
    else
        return view('erro');
});

Route::get('/produtos','ProdutoControlador@listar');
Route::get('/secaoprodutos','Produtr');

