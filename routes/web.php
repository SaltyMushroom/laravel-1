<?php

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

Route::get('/', function () {
    return view('welcome');
});
/*

Route::get('HelloWorld',function(){
    return 'Hello world!';
});
Route::post('Hello',function(){
    return 'Hi!';
});
Route::get('KCL/{id}',function($id){
    return '大家好我是钾盐哇×'.$id;
});
Route::get('catagory/{catagoryid}/article/{articleid}',function($catagoryid,$articleid){
    return '分类ID：'.$catagoryid.'  '.'文章ID:'.$articleid;
});
Route::get('name/{name?}',function($name='KCL'){
    return 'My name is:'.$name;
});
Route::get('name/{name}/id/{id}',function($name,$id){
    return 'user-'.$name.'-'.'id-'.$id;
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);

*/
/*Route::get('user/{id}', 'UserController@show');*/

Route::any('student/index',['uses'=>'StudentController@index']);
Route::any('student/store',['uses'=>'StudentController@store']);
Route::any('query',['uses'=>'StudentController@query']);
Route::any('update',['uses'=>'StudentController@update']);
Route::any('delete',['uses'=>'StudentController@delete']);
Route::any('insert',['uses'=>'StudentController@insert']);
Route::any('orm1',['uses'=>'StudentController@orm1']);
Route::group(['middleware'=>['web']],function (){
    Route::any('putInformation',['uses'=>'StudentController@putInformation']);
    Route::any('getInformation',['uses'=>'StudentController@getInformation']);
});
