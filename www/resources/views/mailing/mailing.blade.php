@extends('layouts.app', ['title' => __('Рассылка')])

@section('content')
    <div class="mailing">
        <h2 class="mailing__title">Создать рассылку</h2>
        <form action="#" class="mailing__form flex">
            <label class="mailing__name" for="mailingName">Название рассылки</label>
            <input class="mailing__input_name input-reset" type="text" name="mailingName" id="mailingName" placeholder="С днем рождения 20%">
            <label class="mailing__text" for="mailingText">Текст рассылки</label>
            <textarea class="mailing__input_text input-reset" name="mailingText" id="mailingText" placeholder="День рождения в СПК со скидкой 20% https://clck.ru/38aqr9"></textarea>
            <h3 class="mailing__subtitle">Выберите получателей</h3>
            <p class="mailing__info">Выберите тех кому хотите отправить рассылку. Можете выбрать всех или определенные сегменты. Управлять сегментами вы можете
                <a href="#" class="mailing__link">в списке клиентов.</a>
            </p>
            <span class="recipients">Рассылку получат</span>
            <span class="recipients__number-of">250 из 250</span>
            <label for="recipientsCheckbox" class="checkbox__label recipients__label">
                <input type="checkbox" name="recipientsCheckbox" id="recipientsCheckbox" class="checkbox input-reset">
                <span class="checkbox__text">
                    Все клиенты
                </span>
            </label>
            <span class="mailing__start">Запустите рассылку</span>
            <div class="mailing__send flex">
                <div class="mailing__left flex">
                    <label for="sendNow" class="checkbox__label send__label">
                        <input type="radio" name="send" id="sendNow" class="checkbox input-reset">
                        <span class="checkbox__text">
                            Отправить сейчас
                        </span>
                    </label>
                    <label for="sendAuto" class="checkbox__label send__label">
                        <input type="radio" name="send" id="sendAuto" class="checkbox input-reset">
                        <span class="checkbox__text">
                            Автоматически
                        </span>
                    </label>
                    <label for="sendRegularly" class="checkbox__label send__label">
                        <input type="radio" name="send" id="sendRegularly" class="checkbox input-reset">
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
                        <select name="when" class="select input-reset">
                            <option value="now">попадания в сегмент</option>
                        </select>
                        <button class="select__button btn-reset">+</button>
                    </div>
                    <div class="wrapper">
                        <select name="when" class="select input-reset">
                            <option value="now">ежедневно</option>
                        </select>
                        <span class="select__separator">в</span>
                        <select name="when" class="select input-reset">
                            <option value="now">10:30</option>
                        </select>
                        <input type="text" name="when" class="select input-reset" value="за 7 дней до дня рождения">
                        <button class="select__button btn-reset">+</button>
                    </div>
                </div>
            </div>
            <div class="save flex">
                <button class="save__button_save btn-reset">Сохранить</button>
                <button class="save__button_back btn-reset">Назад</button>
            </div>
        </form>
    </div>
@endsection
