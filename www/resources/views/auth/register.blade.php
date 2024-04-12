@extends('layouts.app', ['title' => __('Регистрация')])

@section('content')
    <form class="register" method="post" autocomplete="off" enctype="multipart/form-data" action="{{ route(\App\Http\Controllers\Auth\AuthController::ROUTE_REGISTER) }}">
        @method('post')
        @csrf
        <h2 class="register__title">
            Регистрация
        </h2>
        <label class="register__label flex" for="name">
            <span class="register__label_text">Имя</span>
            <input class="register__input input-reset" type="text" name="name" id="name">
        </label>
        <label class="register__label flex" for="email">
            <span class="register__label_text">Имейл</span>
            <input class="register__input input-reset" type="email" name="email" id="email">
        </label>
        <label class="register__label flex" for="password">
            <span class="register__label_text">Пароль</span>
            <input class="register__input input-reset" type="password" name="password" id="password">
        </label>
        <div class="register__buttons flex">
            <button class="register__button btn-reset">
                Регистрация
            </button>
            <a class="register__auth btn-reset flex" href="{{ route(\App\Http\Controllers\PublicController::ROUTE_AUTH) }}">
                Авторизация
            </a>
        </div>
    </form>
@endsection
