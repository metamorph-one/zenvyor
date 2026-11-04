<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre-nos', [PageController::class, 'about'])->name('sobre-nos');
Route::get('/servicos', [PageController::class, 'services'])->name('servicos');
Route::get('/contacto', [PageController::class, 'contact'])->name('contacto');
Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store')->middleware('throttle:5,1');

Route::get('/{service}', [PageController::class, 'service'])
    ->whereIn('service', ['construcao-civil', 'energia-solar', 'energia-eolica', 'avac', 'electricidade-geral', 'metalomecanica'])
    ->name('servico');

Route::get('/politica-privacidade', [PageController::class, 'privacy'])->name('politica-privacidade');
Route::get('/termos-condicoes', [PageController::class, 'terms'])->name('termos-condicoes');
Route::get('/politica-de-cookies-ue', [PageController::class, 'cookies'])->name('politica-cookies');

// Redirects de URLs legadas do WordPress
Route::redirect('/pagina-inicial', '/', 301);
Route::redirect('/Construcao-civil', '/construcao-civil', 301);
Route::redirect('/AVAC', '/avac', 301);
Route::redirect('/Electricidade-geral', '/electricidade-geral', 301);

// Redirects 301: URLs de media antigas do WordPress → novas (preserva SEO de imagens e links antigos)
Route::get('/wp-content/uploads/media/{path}', function (string $path) {
    return redirect('/media/' . $path, 301);
})->where('path', '.*');
