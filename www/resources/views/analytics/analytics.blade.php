@extends('layouts.app', ['title' => __('Аналитика')])

@section('content')
    <div class="analytics">
        <div class="analytics__date flex">
            <form action="{{ route(\App\Http\Controllers\AnalyticsController::ROUTE_ANALYTICS) }}" method="get" class="analytics__date flex">
                @method('get')
                @csrf
                <input type="date" class="btn-reset btn__date" name="dateFrom" id="dateFrom" required>
                <input type="date" class="btn-reset btn__date" name="dateTo" id="dateTo" value="{{date('Y-m-d')}}" required>
                <button class="btn-reset btn__period btn__check">Посмотреть</button>
            </form>
            <div class="analytics__period flex">
                <a href="{{ route(\App\Http\Controllers\AnalyticsController::ROUTE_ANALYTICS, 'period=-1 week') }}" class="btn__period flex">7 дней</a>
                <a href="{{ route(\App\Http\Controllers\AnalyticsController::ROUTE_ANALYTICS, 'period=-30 day') }}" class="btn__period flex">30 дней</a>
                <a href="{{ route(\App\Http\Controllers\AnalyticsController::ROUTE_ANALYTICS, 'period=-1 month') }}" class="btn__period flex">месяц</a>
                <a href="{{ route(\App\Http\Controllers\AnalyticsController::ROUTE_ANALYTICS, 'period=-3 month') }}" class="btn__period flex">квартал</a>
                <a href="{{ route(\App\Http\Controllers\AnalyticsController::ROUTE_ANALYTICS, 'period=-1 year') }}" class="btn__period flex">год</a>
            </div>
        </div>
        <table class="table">
            <tr>
                <th class="table__title">
                    <svg width="12.000000" height="12.000000" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>
                            Created with Pixso.
                        </desc>
                        <defs>
                            <pattern id="pattern_2_4750" patternContentUnits="objectBoundingBox" width="1.000000" height="1.000000">
                                <use xlink:href="#image2_475_0" transform="matrix(0.041667,0,0,0.041667,0,0)"/>
                            </pattern>
                            <image id="image2_475_0" width="24.000000" height="24.000000" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABHNCSVQICAgIfAhkiAAAAdZJREFUSImdlqtOZEEQhr8qEGSZAb+ShGRRIAhBgtlkH2ElCZ5nQWNW8gYIDDhGDAKBgCB5AHZm1k0Xovv0dJ9rs38yk3Op21+3PmJmRiEMkOyiCw5DEUBLjZMaH4RG2fUScTNDRKKX55d3bu+fABcNgsNEEYOfJ/vs7X4HKWQQjQfM54ss2hh1YDebzePbIgZ1VHEfH/7g6GAnBvDw+MJk+pbJFtcg7wWvJrZssDMBl5gtdlA31A4Ft0Qjxy920QrO/2zN3ybkRAQzi4z/00FQlWWwWj1xgGIikbFCnt+2uWtrfTNLEtEbRp7ftlzXn0gS4RCyNv1zfcfHbMEqc6tB2hptcPb7FAAzSd71I0vRx2yBSdM4wN/5v0TN57qkgOuQpsVP48X5ryQvjsurmxB1juIaNCB1EfXt1zA/zKG2KvpicolfDf/DHLR5q7EvuzZz1e9xJVgVgt+qMjRoFjRixGpJ8VMEBklKq9Ve1bV1mzZ63ElWlu7EONC1vmXXpeqyd+JWZ0B98sXy2jQYmPi2rK798aeZA1PvcDJ9ZTJ97eSTMzDYHm8iFna9CGLEU2pr9C2Kbo9HNKfdUY3KeDxKGH3hqyLF4IdFENLe3u9x3W/ceVWBT8YEqwfYCiG8AAAAAElFTkSuQmCC"/>
                        </defs>
                        <rect id="image 116" width="12.000000" height="12.000000" fill="url(#pattern_2_4750)" fill-opacity="1.000000"/>
                    </svg>
                </th>
                <th class="table__title">ID</th>
                <th class="table__title">Название</th>
                <th class="table__title">Статус</th>
                <th class="table__title">Отправлено</th>
                <th class="table__title">Доставлено</th>
            </tr>
            <tr>
                <td class="table__total">
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
                </td>
                <td class="table__total">Итого</td>
                <td class="table__total"></td>
                <td class="table__total"></td>
                <td class="table__total table__total_big">{{ $sent }}</td>
                <td class="table__total table__total_big">{{ $delivered }}</td>
            </tr>
            @foreach($mailings as $mailing)
                @include('analytics.analyticsRow', [
                        'mailing' => $mailing,
                    ]
                )
            @endforeach
        </table>
    </div>
@endsection
