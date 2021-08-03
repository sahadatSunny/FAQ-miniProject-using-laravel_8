<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use PhpParser\Node\Expr\FuncCall;


Route::get('/', [CategoryController::class, 'index']);


Route::get('/signup', function (){
    return view('signup');
});

Route::get('/admin', [CategoryController::class, 'admin_index']);

Route::post('/create', [CategoryController::class, 'create_cat']);

Route::get('/create_qus/{id}', [QuestionController::class, 'create_qus']); //to route create qus page 
Route::post('/add_question/{id}', [QuestionController::class, 'add']); 

Route::put('/edit_category/{id}', [CategoryController::class, 'update']);
Route::put('/edit_question/{id}', [QuestionController::class, 'update']);

Route::get('delete/{id}', [CategoryController::class, 'delete']);
Route::get('delete_qus/{id}', [QuestionController::class, 'delete']);






