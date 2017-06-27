<?php

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     //return view('welcome');
//     //return 'hello world';
// });

// Route::get('/mytest',function(){
//    return '你好';

// });
// Route::get('/form',function(){
// 	return view('form');
// });

// //如果进行post提交必须要有token字段
// Route::post('/test',function(){
//    return "aa";
// });

// Route::put('/put',function(){
//    return "aac";
// });
// Route::delete('/mydelete',function(){
//    return "这是delete";
// });

// Route::get('/php',function(){

// 	return "这是get";
// });
// Route::post('/php',function(){

// 	return "这是post";
// });

// Route::match(['get','post'],'/php',function(){

// 	return '这是get和post请求';
// });

// Route::any('/php',function(){

// return "这是所有请求";
// });

// //路由参数

// // Route::get('/news/{id}/{name}',function($id,$name){
// // 	echo $id."<br>".$name;

// // });

// //可传可不传
// // Route::get('/news/{id}/{name?}',function($id,$name="aaa"){
// // 	echo $id."<br>".$name;

// // });



// //路由约束
// Route::get('/news/{id}/{name?}',function($id,$name="aaa"){
// 	return $id."<br>".$name;

// })->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

// //控制器

//  Route::get('/mycontro','TestController@index');

// // Route::get('/home/mycontro','Home\TestController@index');

// // Route::get('/user/add','UserController@add');
// // Route::get('/user/insert','UserController@insert');

// //资源控制器
// Route::get('/form',function(){
// 	return view('form');
// });

// Route::resource('/stu','StuController',['only'=>['index','show']]);

// Route::get('/stu/myfunc/a/b','StuController@myfunc');

//请求

//展示表单的路由

Route::get('/request/add',"Admin\RequestController@add");

Route::post('/request/insert',"Admin\RequestController@insert");
Route::get('/response',"Admin\RequestController@response");
//中间件

Route::post('/login','Admin\RequestController@login')->middleware('login');
Route::get('/view',function(){

	return view('view');
});

Route::get('/home',function(){

	$value = session('name');

	// var_dump($value);

	// dd($value);

	$value = session('key','default');

	dd($value);
	//dd后面有个die
	//存储一条数据至session中
	//session(['name'=>'123']);
});

//模板引擎 blade

Route::get('/blade',function(){

	return view('blade');
});

Route::get('/subblade',function(){

	return view('subblade',['status'=>2]);
});


