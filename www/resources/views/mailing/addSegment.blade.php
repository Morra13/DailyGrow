@extends('layouts.app', ['title' => __('Рассылка')])

@section('content')
    <div class="mailing">
        <div class="mailing__wrapper flex">
            <a href="{{ route(\App\Http\Controllers\MailingController::ROUTE_MAILING) }}" class="mailing__title">Рассылки</a>
            <a href="{{ route(\App\Http\Controllers\MailingController::ROUTE_ADD_MAILING) }}" class="mailing__title">Создать рассылку</a>
            <a href="{{ route(\App\Http\Controllers\MailingController::ROUTE_ADD_SEGMENT) }}" class="mailing__title">Создать сегмент</a>
        </div>
        <form class="mailing__form flex" method="post" action="{{ route(\App\Http\Controllers\Api\MailingController::ROUTE_ADD_SEGMENT) }}">
            @method('post')
            @csrf
            <label class="mailing__name" for="name">Название сегмента</label>
            <input class="mailing__input_name input-reset" type="text" name="name" id="name" value="За 7 дней до дня рождения">
            <label class="mailing__name" for="days">Колличество дней</label>
            <input class="mailing__input_name input-reset" type="number" name="days" id="days" value="7">
            <div class="save flex">
                <button class="save__button_save btn-reset">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
