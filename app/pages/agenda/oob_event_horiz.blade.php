<div id="out" hx-swap-oob="afterbegin">
    @include('agenda.event_horiz', [
        'img' => $img,
        'title' => $title,
        'date' => $date,
        'venue' => $venue,
        'time' => $time,
        'cost' => $cost,
        'key' => $key,
        'bg' => $bg,
    ])
</div>
