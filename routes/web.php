<?php

use App\Http\Controllers\PostController;
use Illuminate\Routing\Controller;
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
route::get('/', [PostController::class, 'index'])-> name('welcome');
route::get('/posts/{id} ',[PostController::class, 'show'] ) -> whereNumber('id');
route::get('/contact', [PostController::class, 'contact'])->name('contact');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('article', function() {
//     return view('articles');
// });
// Route::get('posts', function () {
//     return response() -> json([

//         'title'=>'mon premier titre est',
//         'description'=>'ma super description'
        
//     ]);
// });