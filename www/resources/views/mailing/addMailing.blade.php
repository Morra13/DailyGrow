@extends('layouts.app', ['title' => __('Рассылка')])

@section('content')
    <div class="mailing">
        <div class="mailing__wrapper flex">
            <a href="{{ route(\App\Http\Controllers\MailingController::ROUTE_MAILING) }}" class="mailing__title">Рассылки</a>
            <a href="{{ route(\App\Http\Controllers\MailingController::ROUTE_ADD_MAILING) }}" class="mailing__title">Создать рассылку</a>
        </div>
        <form class="mailing__form flex" method="post" action="{{ route(\App\Http\Controllers\Api\MailingController::ROUTE_ADD_MAILING) }}">
            @method('post')
            @csrf
            <label class="mailing__name" for="name">Название рассылки</label>
            <input class="mailing__input_name input-reset" type="text" name="name" id="name" placeholder="С днем рождения 20%">
            <label class="mailing__text" for="text">Текст рассылки</label>
            <textarea class="mailing__input_text input-reset" name="text" id="text" placeholder="День рождения в СПК со скидкой 20% https://clck.ru/38aqr9"></textarea>
            <h3 class="mailing__subtitle">Выберите получателей</h3>
            <p class="mailing__info">Выберите тех кому хотите отправить рассылку. Можете выбрать всех или определенные сегменты. Управлять сегментами вы можете
                <a href="#" class="mailing__link">в списке клиентов.</a>
            </p>
            <span class="recipients">Рассылку получат</span>
            <span class="recipients__number-of">250 из 250</span>
            <label for="client_id" class="checkbox__label recipients__label">
                <input type="checkbox" name="client_id" id="client_id" class="checkbox input-reset" value="all">
                <span class="checkbox__text">
                    Все клиенты
                </span>
            </label>
            <span class="mailing__start">Запустите рассылку</span>
            <div class="mailing__send flex">
                <div class="mailing__left flex">
                    <label for="sendNow" class="checkbox__label send__label">
                        <input type="radio" name="start_mailing" id="sendNow" class="checkbox input-reset" value="now">
                        <span class="checkbox__text">
                            Отправить сейчас
                        </span>
                    </label>
                    <label for="sendAuto" class="checkbox__label send__label">
                        <input type="radio" name="start_mailing" id="sendAuto" class="checkbox input-reset" value="automatic">
                        <span class="checkbox__text">
                            Автоматически
                        </span>
                    </label>
                    <label for="sendRegularly" class="checkbox__label send__label">
                        <input type="radio" name="start_mailing" id="sendRegularly" class="checkbox input-reset" value="regularly">
                        <span class="checkbox__text">
                            Регулярно
                        </span>
                    </label>
                </div>
                <div class="mailing__right flex">
                    <div class="wrapper">
                        <select name="when" class="select input-reset">
                            <option value="now">Сейчас</option>
                        </select>
                        <span class="select__separator">после</span>
                        <select name="segment" class="select input-reset">
                            <option value="segment">попадания в сегмент</option>
                        </select>
                        <button type="button" class="select__button btn-reset">+</button>
                    </div>
                    <div class="wrapper">
                        <select name="how_often" class="select input-reset">
                            <option value="daily">ежедневно</option>
                        </select>
                        <span class="select__separator">в</span>
                        <input type="time" name="time" id="time" value="10:30" class="select input-reset">
                        <select name="type" class="select input-reset">
                            <option value="birthday">за 7 дней до дня рождения</option>
                        </select>
                        <button type="button" class="select__button btn-reset">+</button>
                    </div>
                </div>
            </div>
            <div class="save flex">
                <button class="save__button_save btn-reset">Сохранить</button>
                <a class="save__button_back btn-reset flex" href="{{ route(\App\Http\Controllers\MailingController::ROUTE_MAILING) }}">Назад</a>
            </div>
        </form>
    </div>
@endsection
