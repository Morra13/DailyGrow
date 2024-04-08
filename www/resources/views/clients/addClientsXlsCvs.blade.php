@extends('layouts.app', ['title' => __('Добавить клиентов xls/cvs')])

@section('content')
    <div class="clients">
        <h2 class="clients__title">
            Добавить Клиентов
        </h2>
        <form class="mailing__form flex" method="POST" autocomplete="off" enctype="multipart/form-data" action="{{ route(\App\Http\Controllers\Api\ClientController::ROUTE_ADD_CLIENT_XLS_CVS) }}">
            @method('post')
            @csrf
            <label for="file" class="register__label">Выберите файл</label>
            <input class="register__input input__client input-reset" type="file" name="file" id="file">
            <div class="register__buttons flex">
                <button class="register__button btn-reset">
                    Добавить
                </button>
                <a class="register__auth btn-reset flex" href="{{ route(\App\Http\Controllers\ClientController::ROUTE_ADD_CLIENTS) }}">
                    В ручную
                </a>
            </div>
        </form>
    </div>
@endsection
