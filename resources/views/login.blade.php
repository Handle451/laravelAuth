@extends('master')

@section('title', 'Авторизация')

@section('content')
<div class="row justify-content-center">
    <h1 class = "text-center">Авторизация</h1>
    <form class = "col-3" method="POST" action="{{ route('user.login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class = "form-label">Email</label>
            <input class = "form-control" type="text" id="email" name="email" value="">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class = "form-label">Пароль</label>
            <input class = "form-control" type="text" id="password" name="password" type="password" value="">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class = "">
            <button class = "btn btn-lg btn-primary" type="submit" name = "sendMe" value = "1">Войти</button>
        </div>
    </form>
</div>

@endsection

