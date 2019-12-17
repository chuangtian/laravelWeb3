<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
 * 发布ERC20
 */
Route::get('erc20Contract', 'TestController@erc20Contract');
/*
 * 发布ERC721
 */
Route::get('erc721Contract', 'TestController@erc721Contract');
/*
 * 查询合同所有者
 */
Route::get('owner', 'TestController@owner');
/*
 * 创建一个erc721 ID
 */
Route::get('mint', 'TestController@mint');