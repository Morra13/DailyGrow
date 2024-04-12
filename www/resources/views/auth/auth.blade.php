@extends('layouts.app', ['title' => __('Авторизация')])

@section('content')
    <form class="register" method="POST" autocomplete="off" enctype="multipart/form-data" action="{{ route(\App\Http\Controllers\Auth\AuthController::ROUTE_AUTH) }}">
        @method('post')
        @csrf
        <h2 class="register__title">
            Авторизация
        </h2>
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
                Авторизация
            </button>
            <a class="register__auth btn-reset flex" href="{{ route(\App\Http\Controllers\PublicController::ROUTE_REGISTER) }}">
                Регистрация
            </a>
        </div>
    </form>
@endsection
