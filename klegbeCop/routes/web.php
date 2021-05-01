<?php

use App\Http\Livewire\Articles\AllArticles;
use App\Models\Article;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    return view('dashboard');
})->name('dashboard');

Route::post('articles', function(){

    return view('livewire.articles.create_article');

})->name('article-create');

Route::get('articles.all-articles',App\Http\Livewire\Articles\AllArticles::class )->name('add_article');
Route::get('forms.card-produit/{type}/{name}/{label}/{marque}',function($name ,$type, $label, $marque){
    $type =$type;
    $name = $name; $label =$label; $marque =$marque;
    return view('components.forms.card-produit',compact('type', 'name', 'label', 'marque'));
} )->name('produit');
