@extends('layouts.main')
@section('content')
    <p>Создание пользователя.</p>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <p>Логин :<input type="text" name="login"></p>
        <p>Пароль :<input type="text" name="password"></p>
        <p>Почта :<input type="text" name="email"></p>
        <p>Имя :<input type="text" name="name"></p>
        <p>Фамилия :<input type="text" name="surname"></p>
        <input type="submit" value="Создать">
    </form>
@endsection
