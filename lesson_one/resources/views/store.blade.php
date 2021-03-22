@extends('layout.layout')

@section('form')
  <a href="logout">ログアウト</a>
  <h2>ホーム</h2>
  {{ 'ようこそ' . $name . 'さん' }}
@endsection
