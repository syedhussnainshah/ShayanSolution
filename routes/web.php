<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return inertia('Home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('blog/{id}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('project/{id}', [HomeController::class, 'projectDetail'])->name('project.detail');
Route::get('test/mail', function () {
    return view('mail.headermailform.mail-to-client');
});
