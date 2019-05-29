<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return "<h1>Seja bem vindo</h1>";
});
Route::get('/ola/sejabemvindo', function () {
    return view('welcome');
});
Route::get('/nome/{nome}/{sobrenome}', function($nome, $sn){
    return "<h1>Ola, $nome $sn</h1>";
});
Route::get('/repetir/{nome}/{n}', function($nome, $n){
    if (is_integer($n)) {
        for ($i=0; $i <$n ; $i++) { 
            echo "<h1>Ola, $nome</h1>";
        }
    } else {
        echo "Você não digitou um inteiro";
    }        
});
Route::get('/seunomecomregra/{nome}/{n}', function($nome, $n){
    for ($i=0; $i <$n ; $i++) { 
        echo "<h1>Ola, $nome</h1>";
    }
})->where('n','[0-9]+')->where('nome','[A-Za-z]+');

Route::get('/seunomesemregra/{nome?}', function($nome=null){   
    if(isset($nome)){
        echo "<h1>Ola, $nome</h1>";
    }else{
        echo "voce não passou nome";
    }
           
});

Route::prefix('app')->group(function(){
    Route::get('/',function(){
       return "Pagina principal do app"; 
    });
    Route::get('profile',function(){
        return "Pagina profile";        
    });
    Route::get('about',function(){
        return "Meu about";        
    });
});

Route::redirect('/aqui', '/ola', 301);

Route::view('/hello', 'hello');

Route::view('/viewnome', 'hellonome', 
    ['nome'=>'tadeu', 'sobrenome'=>'Silva']
);


Route::get('/hellonome/{nome}/{sobrenome}', function($nome, $sobrenome){
    return view('hellonome',
    ['nome'=>$nome, 'sobrenome'=>$sobrenome] );
});




