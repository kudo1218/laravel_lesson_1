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
    $name = $request->name;
    return view('store',compact('name'));
  }
}
