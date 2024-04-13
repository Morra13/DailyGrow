<tr>
    <td class="table__list">
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
    <td class="table__list">{{ $mailing->id }}</td>
    <td class="table__list">{{ $mailing->name }}</td>
    <td class="table__list table__list_opacity">
        @if($mailing->status == 'works')
            <div class="table__list_green">
                <span class="list__status">{{ __('работает') }}</span>
            </div>
        @elseif($mailing->status == 'stopped')
            <div class="table__list_green table__list_red">
                <span class="list__status">{{ __('остановлен') }}</span>
            </div>
        @endif
    </td>
    <td class="table__list table__list_opacity">
        <div class="table__list_green">
            <span class="list__send_small">{{ round((($mailing->delivered) / ($mailing->sent == 0 ? 1 : $mailing->sent)) * 100) . '%' }}</span>
            <span class="list__send_big">{{ $mailing->sent ?? 0 }}</span>
        </div>
    </td>
    <td class="table__list table__list_opacity"><span class="list__delivered">{{ $mailing->delivered ?? 0 }}</span></td>
</tr>
