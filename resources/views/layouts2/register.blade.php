<?php
    if ()
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Восстановление пароля</title>
    <title>Document</title>
</head>
<body>
<h2>Вход</h2>
<form class="col-3 offset-4 border rounded" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <label for="email" class="col-for-label-log">Ваш email</label>
        <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
        @error('email')
        <div class="alert alert-danger">{{ $message }} </div>
        @enderror
    </div>
    <div for="form-group">
        <label for="password" class="col-for-label-log">Пароль</label>
        <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Войти</button>
    </div>

</form>

</body>
</html>
