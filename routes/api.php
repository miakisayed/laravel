<?php

use App\Models\ApiUser;
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
Route::prefix('v1')->group(function () {


    // Public routes
    Route::get('auth/test',function (Request $request){
        return  new \Illuminate\Http\JsonResponse("success");
    }

    );
    Route::get('auth/testdb',function(){
        $data = ApiUser::all();
        return response()->json([
            'status' => true,
            'data' => $data,
            'message' => 'Data fetched successfully'
        ], 200);
    })->name('auth.testdb');


});
