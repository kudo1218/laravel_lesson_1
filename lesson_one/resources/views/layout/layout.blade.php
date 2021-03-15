<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>laravel課題1</title>
</head>
<body>
  <a href="/login">ログイン</a>
  <form action="/shops" method="post">
    <a>新規登録</a><br>
  </form>
  <form>
    <h2>@yield('title')</h2>
    <fildset>
      @yield('menu')
    </fildset>
    @yield('submit')
  </form>
</body>
</html>
