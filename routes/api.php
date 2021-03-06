<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
//});



// Route::get('/posts',[PostController::class,'index']);

// Route::get('/posts',[PostController::class,'index'])->middleware('auth:api');
// Route::get('/post/{id}',[PostController::class,'show']);

// Route::post('/addpost',[PostController::class,'store']);
// Route::post('/updatepost/{id}',[PostController::class,'update']);
// Route::post('/deletepost/{id}',[PostController::class,'destroy']);

Route::middleware(['jwt.verified'])->group(function(){
      Route::get('/posts',[PostController::class,'index']);
     Route::get('/post/{id}',[PostController::class,'show']);
    Route::post('/addpost',[PostController::class,'store']);
    Route::post('/updatepost/{id}',[PostController::class,'update']);
    Route::post('/deletepost/{id}',[PostController::class,'destroy']);
    }
);

Route::group([
    'middleware' => ['api'],
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});


