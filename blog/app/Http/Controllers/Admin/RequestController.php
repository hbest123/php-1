<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{

	public function add()
	{
		return view('request.form');
	}
    public function insert(Request $request)
    {
    	//$name = $request ->input('name');
    	//$name = \request::input('name');

    	//$age = $request->input('age');

    	//$path = $request->path();
    	//return $path;

    	//dd($request);

    	//$res =$request->is('request/insert');
    	//$res =$request->is('request/*');

    	//dd($res);

    	//$res = $request->url();
    	//$res = $request->fullUrl();

    	//$res = $request->method();

    	//$res = $request->isMethod("POST");


    	//$res = $request->all();

    	//$res = $request->input('auth','lisi');
    	
    	//$res = $request->name;

    	//$res = $request->only('name','age');
    	//$res = $request->only(['name','age']);

    	//$res = $request->except(['name','age']);

    	//$res = $request->except(['_token']);


    	// if($request->has('name'))
    	// {
    	// 	return 111;
    	// }else
    	// {
    	// 	return 222;
    	// }


    	//旧的输入数九
    	//$request->flash();

    	//$request->flashOnly('name');

    	//$request->flashExcept('age');
    	//return redirect('/request/add');

    	//return redirect('/request/add')->withInput();
    	
    	//dd($res);

  //   	return response('Hello World')->cookie(
  //   	'name', 'zs', 10
		// );

    // 	$res = $request->cookie('name');
  		// dd($res);

  		//更简单的cookie生成方式

  		//\Cookie::queue('age',18,10);

  		 $file = $request->file('img');
    // 	dd($file);

    	$extension = $request->file('img')->extension();
    	// $extension = $request->file('img')->getClientOriginalExtension();
 $filename = time().'.'.$extension;

    	 $request->file('img')->move('./uploads',$filename);

    	//return redirect('/request/add');
    	//return back()->withInput();
    	 //存session值的
    	 return redirect('/request/add')->with('status','profile updated');
    }

    public function response(Request $request)
    {
    	//\Cookie::queue('name','lisi',8);
    	//return view('/request/add');
    	// return response()->json(['name'=>'aaa',
    	// 						'state'=>'ca'

    	// 						]);



    	$pathToFile = './uploads/1498473481.jpg';
   		return response()->download($pathToFile);
    }

    public function login()
    {
    	return '登录成功';
    }
}
