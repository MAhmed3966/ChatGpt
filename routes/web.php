<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;
use App\Http\Controllers\ArticleGeneratorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    $title = '';
    $content = '';
    return view('welcome',compact('title', 'content'));
});

Route::post('/write/generate', [ArticleGeneratorController::class, 'index']);

