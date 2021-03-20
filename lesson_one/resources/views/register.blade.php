@extends('layout.layout')

@section('form')
  <h2>新規登録ページ</h2>
  <form action="/user" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="mail" placeholder="Mail Address"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
    <input type="submit" value="登録">
  </form>
@endsection

@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div>{{ $error }}</div>
  @endforeach
@endif
