<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\mainRequest;

class MainController extends Controller
{
  public function index() {
    return view('login');
  }
  public function create() {
    return view('register');
  }
  public function store(mainRequest $request) {
    $data = ['name'=>$request->name];
    $validated = $request->validated();
    return view('store',compact('data'))->with($validated);
  }
}
