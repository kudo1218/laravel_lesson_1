@extends('layout.layout')

@section('form')
  <h2>新規登録ページ</h2>
  <form action="/user" method="get">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="mail" placeholder="Mail Address"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
    <input type="submit" value="登録">
  </form>
@endsection

@error('name')
  $message
@enderror
