<?php

use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\api\TechnologyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('projects', [ProjectController::class,'index']);
Route::get('projects/{id}', [ProjectController::class,'show']);
Route::get('technology/{id}',[TechnologyController::class,'show']);
Route::post('comment',[CommentController::class,'store']);
