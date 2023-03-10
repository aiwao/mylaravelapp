<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
  public function index()
  {
    return view('hello.index', ['msg' => 'フォームにご入力ください。',]);
  }
  public function post(HelloRequest $request)
  {
    return view('hello.index', ['msg'=>'正しく入力されました。']);
  }
}

