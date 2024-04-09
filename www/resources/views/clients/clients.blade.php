@extends('layouts.app', ['title' => __('Клиенты')])

@section('content')
    <div class="clients">
        <h2 class="clients__title">
            Клиенты
        </h2>
        <div class="clients__wrapper flex">
            <div class="clients__nav flex">
                <a href="#" class="clients__link">Сегменты</a>
                <a href="#" class="clients__link">Список клиентов</a>
                <a href="#" class="clients__link">Покупки</a>
            </div>
            <a href="{{ route(\App\Http\Controllers\ClientController::ROUTE_ADD_CLIENTS) }}" class="clients__button flex">Добавить</a>
        </div>
        <div class="search">
            <label for="search"></label>
            <input type="text" id="search" class="input-reset search__input" placeholder="Поиск и фильтр">
            <img class="search__img" src="{{asset('storage')}}/img/search.png" alt="search">
        </div>
        <span class="clients__clients">Клиентов: {{ $clients->count() }}</span>
        <table class="table">
            <tr>
                <th class="clients__table clients__table_title">
                    <svg width="12.000000" height="12.000000" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>
                            Created with Pixso.
                        </desc>
                        <defs>
                            <clipPath id="clip2_460">
                                <rect id="User Interface / Checked" width="12.000000" height="12.000000" fill="white" fill-opacity="0"/>
                            </clipPath>
                        </defs>
                        <rect id="User Interface / Checked" width="12.000000" height="12.000000" fill="#FFFFFF" fill-opacity="0"/>
                        <g clip-path="url(#clip2_460)">
                            <path id="Vector" d="M11.39 0L0.6 0C0.44 0 0.28 0.06 0.17 0.17C0.06 0.28 0 0.44 0 0.59L0 11.4C0 11.55 0.06 11.71 0.17 11.82C0.28 11.93 0.44 12 0.6 12L11.39 12C11.55 12 11.71 11.93 11.82 11.82C11.93 11.71 12 11.55 12 11.4L12 0.59C12 0.44 11.93 0.28 11.82 0.17C11.71 0.06 11.55 0 11.39 0ZM10.8 10.8L1.19 10.8L1.19 1.2L10.8 1.2L10.8 10.8Z" fill="#DCE4EA" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </g>
                    </svg>
                </th>
                <th class="clients__table clients__table_title">Название</th>
                <th class="clients__table clients__table_title">Телефон</th>
                <th class="clients__table clients__table_title">Email</th>
                <th class="clients__table clients__table_title">День рождения</th>
                <th class="clients__table clients__table_title"></th>
            </tr>
            @foreach($clients as $client)
                @include('clients.clientsRow', [
                        'client' => $client,
                    ]
                )
            @endforeach
        </table>
    </div>
@endsection
