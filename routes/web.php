<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;




Route::get('/', [NewsController::class, 'index']);
Route::get('/news/{id}',function($id){
            return view('news', ['title' => 'hey', 'description' => 'hello']);
});

