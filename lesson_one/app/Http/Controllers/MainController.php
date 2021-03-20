<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\mainRequest;
use Illuminate/Validation/Validator;

class MainController extends Controller
{
  public function index() {
    return view('login');
  }
  public function create() {
    return view('register');
  }
  public function store(mainRequest $request) {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'mail' => 'required',
      'password' => 'required|confirmed|min:7',
      'password_confirmation' => 'required'
    ]);

    if($validator->fails()) {
      return redirect('/user/create')->withErrors($validator)->withInput();
    }

    $data = ['name'=>$request->name];
    return view('store',$data);
  }
}
