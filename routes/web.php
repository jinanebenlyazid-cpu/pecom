<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;

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
    return view('Home');
});

Route::get('/produits/{cat}', function ($cat) { 
    $produits = [];  
    if ($cat == 'hicking') { 
        $produits = [ 
            ["nom" => "Sac à dos", "prix" => 200, "image" => "malita.jpg"], 
            ["nom" => "Tente", "prix" => 300, "image" => "khayma.jpg"], 
            ["nom" => "Montre GPS", "prix" => 150, "image" => "magana.jpg"], 
        ]; 
    } elseif ($cat == 'electromenager') { 
        $produits = [ 
            ["nom" => "Machine à laver", "prix" => 3000, "image" => "labadora.jpg"], 
            ["nom" => "Four", "prix" => 1500, "image" => "faran.jpg"], 
            ["nom" => "Micro-onde", "prix" => 1000, "image" => "mycrowev.jpg"], 
        ]; 
    } 
    else{
        return view('404cat');
    }
 
    return view('Produits', [ 
        'products' => $produits, 
        'categorie' => $cat 
    ]); 
}); 

Route::fallback(function () { 
    return view('404'); 
}); 