<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <h1>Вход</h1>

<form class = "col-3 offset-4 border rounded" method="POST" action="{{ route('user.login') }}">
    @csrf
    <div class="form-group">
        <label for="email" class = "col-form-label-lg">Email</label>
        <input type="text" id="email" name="email" value="">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class = "col-form-label-lg">Пароль</label>
        <input type="text" id="password" name="password" type="password" value="">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class = "form-group">
        <button class = "btn btn-lg btn-primary" type="submit" name = "sendMe" value = "1">Войти</button>
    </div>
</form>

</body>
</html>