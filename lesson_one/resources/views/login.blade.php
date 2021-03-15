@extends('layout.layout')

@section('title','ログインページ')

@section('menu')
  <input type="text" placeholder="E-Mail Address"><br>
  <input type="password" placeholder="Password"><br>
@endsection

@section('submit')
  <input type="submit" value="ログイン">
@endsection
