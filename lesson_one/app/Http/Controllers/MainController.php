<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index() {
    return view('login');
  }
  public function create() {
    return view('register');
  }
  public function store(Request $request) {
    $data = ['name'=>$request->name];

    $validate_rule = [
      'name' => 'required',
      'mail' => 'required',
      'password' => 'required|confirmed|min:7',
      'password_confirmation' => 'required',
    ];

    $this->validate($request, $validate_rule);
    return view('store',$data);
  }
}
