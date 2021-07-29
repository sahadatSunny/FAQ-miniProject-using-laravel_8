<?php

use App\Http\Controllers\cat_questionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;
use App\Models\Category;
use PhpParser\Node\Expr\FuncCall;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function(){
    return view('index');
});

Route::get('/', [CategoryController::class, 'index']);

Route::get('/add_cat', [CategoryController::class, 'add']);
Route::get('/add_qus/{id}', [QuestionController::class, 'add']);


Route::get('/signup', function (){
    return view('signup');
});

Route::get('/admin', [CategoryController::class, 'admin_index']);
Route::post('/create', [CategoryController::class, 'create_cat']);
Route::post('/add_question/{id}', [QuestionController::class, 'add']);
Route::get('/create_qus/{id}', [QuestionController::class, 'create_qus']);

Route::get('delete/{id}', [CategoryController::class, 'delete']);
Route::get('delete_qus/{id}', [QuestionController::class, 'delete']);
Route::get('edit/{id}', [CategoryController::class, 'edit']);
Route::put('/edit_category/{id}', [CategoryController::class, 'update']);
Route::put('/edit_question/{id}', [QuestionController::class, 'update']);

Route::get('/test', [CategoryController::class, 'test']);



