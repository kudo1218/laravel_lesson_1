@extends('layout.layout')

@section('form')
  <h2>新規登録ページ</h2>
  <input type="text" placeholder="Name"><br>
  <input type="text" placeholder="E-Mail Address"><br>
  <input type="password" placeholder="Password"><br>
  <input type="password" placeholder="Confirm Password"><br>
  <input type="submit" value="登録">
@endsection
