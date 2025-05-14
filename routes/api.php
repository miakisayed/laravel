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
    Route::get('test',function (){
        $now = microtime(true); // Always returns float, no need for named argument
        $boot_time = round(($now - LARAVEL_START) * 1000, 2);
        return response()->json([
            'status' => true,
            'data' => $boot_time,
            'message' => 'bootstrap time'
        ], 200);
    });

    Route::get('testdb',function(){
        $data = ApiUser::all();
        return response()->json([
            'status' => true,
            'data' => $data,
            'message' => 'Data fetched successfully'
        ], 200);
    });

    Route::get('/opstatus', function() {
        return response()->json(opcache_get_status());
    });
});
