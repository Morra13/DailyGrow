<tr>
    <td class="clients__table">{{ $mailing->name }}</td>
    <td class="clients__table">{{ $mailing->segment_name }}</td>
    <td class="clients__table">
        {{ ($mailing->status == 'works') ? 'работает' : 'остановлен' }}
    </td>
    <td class="clients__table">
        @if($mailing->status == 'stopped')
            <a href="{{ route(\App\Http\Controllers\Api\MailingController::ROUTE_CHANGE_MAILING_STATUS, $mailing->id) }}" class="mailing__link mailing__link_start">
                Запустить
            </a>
        @elseif($mailing->status == 'works')
            <a href="{{ route(\App\Http\Controllers\Api\MailingController::ROUTE_CHANGE_MAILING_STATUS, $mailing->id) }}" class="mailing__link mailing__link_stop">
                Остановить
            </a>
        @endif
    </td>
</tr>
