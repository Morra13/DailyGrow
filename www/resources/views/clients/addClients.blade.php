@extends('layouts.app', ['title' => __('Добавить клиентов')])

@section('content')
    <div class="clients">
        <h2 class="clients__title">
            Добавить Клиентов
        </h2>
        <form class="mailing__form flex" method="POST" autocomplete="off" enctype="multipart/form-data" action="{{ route(\App\Http\Controllers\Api\ClientController::ROUTE_ADD_CLIENT) }}">
            @method('post')
            @csrf
            <label for="name" class="register__label">Имя</label>
            <input class="register__input input__client input-reset" type="text" name="name" id="name">
            <label for="email" class="register__label">Имейл</label>
            <input class="register__input input__client input-reset" type="email" name="email" id="email">
            <label for="phone" class="register__label">Телефон</label>
            <input class="register__input input__client input-reset" type="text" name="phone" id="phone">
            <label for="birthday" class="register__label">День рождения</label>
            <input class="register__input input__client input-reset" type="date" name="birthday" id="birthday">
            <div class="register__buttons flex">
                <button class="register__button btn-reset">
                    Добавить
                </button>
                <a class="register__auth btn-reset flex" href="{{ route(\App\Http\Controllers\ClientController::ROUTE_ADD_CLIENTS_XLS_CVS) }}">
                    Добавить xls/cvs
                </a>
            </div>
        </form>
    </div>
@endsection
