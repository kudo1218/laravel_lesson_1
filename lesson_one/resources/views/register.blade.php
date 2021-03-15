@extends('layout.layout')

@section('title','新規登録ページ')

@section('menu')
  <input type="text" placeholder="Name"><br>
  <input type="text" placeholder="E-Mail Address"><br>
  <input type="password" placeholder="Password"><br>
  <input type="password" placeholder="Confirm Password"><br>
@endsection

@section('submit')
  <input type="submit" value="登録">
@endsection
