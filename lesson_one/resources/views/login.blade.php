@extends('layout.layout')

@section('form')
  <h2>ログインページ</h2>
  <form action="/user/register" method="get">
    @csrf
    <input type="text" placeholder="E-Mail Address"><br>
    <input type="password" placeholder="Password"><br>
    <input type="submit" value="ログイン">
  </form>
@endsection
