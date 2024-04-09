@extends('layouts.app', ['title' => __('Рассылка')])

@section('content')
    <div class="mailing">
        <div class="mailing__wrapper flex">
            <a href="{{ route(\App\Http\Controllers\MailingController::ROUTE_MAILING) }}" class="mailing__title">Рассылки</a>
            <a href="{{ route(\App\Http\Controllers\MailingController::ROUTE_ADD_MAILING) }}" class="mailing__title">Создать рассылку</a>
        </div>
        <table class="table">
            <tr>
                <th class="clients__table clients__table_title">Название</th>
                <th class="clients__table clients__table_title">Сегмент</th>
                <th class="clients__table clients__table_title">Статус</th>
                <th class="clients__table clients__table_title"></th>
            </tr>
            @foreach($mailings as $mailing)
                @include('mailing.mailingRow', [
                        'mailing' => $mailing,
                    ]
                )
            @endforeach
        </table>
    </div>
@endsection
