@php
    $englishTours = 0;
    $dutchTours = 0;
    $chineseTours = 0;
    $englishTours2 = 0;
    $dutchTours2 = 0;
    $chineseTours2 = 0;
    $englishTours3 = 0;
    $dutchTours3 = 0;
    $chineseTours3 = 0;
@endphp

@foreach ($tickets as $ticket)
    @if ($ticket->LanguageID === 1)
        @php
            if ($ticket->Name === 'Session 1') {
                $englishTours++;
            } elseif ($ticket->Name === 'Session 2') {
                $englishTours2++;
            } elseif ($ticket->Name === 'Session 3') {
                $englishTours3++;
            }
        @endphp
    @elseif ($ticket->LanguageID === 2)
        @php
            if ($ticket->Name === 'Session 1') {
                $dutchTours++;
            } elseif ($ticket->Name === 'Session 2') {
                $dutchTours2++;
            } elseif ($ticket->Name === 'Session 3') {
                $dutchTours3++;
            }
        @endphp
    @elseif ($ticket->LanguageID === 3)
        @php
            if ($ticket->Name === 'Session 1') {
                $chineseTours++;
            } elseif ($ticket->Name === 'Session 2') {
                $chineseTours2++;
            } elseif ($ticket->Name === 'Session 3') {
                $chineseTours3++;
            }
        @endphp
    @endif
@endforeach

@if ($ticket->Name === 'Session 1')
    <div class="bg-yellow-400 p-2 rounded-b mb-4">
        <p class="mt-0 mb-2">English tours: {{ $englishTours }}</p>
        <p class="mt-0">Dutch tours: {{ $dutchTours }}</p>
        @if ($chineseTours > 0)
            <p class="mt-0">Chinese tours: {{ $chineseTours }}</p>
        @endif
    </div>
@elseif ($ticket->Name === 'Session 2')
    <div class="bg-yellow-400 p-2 rounded-b mb-4">
        <p class="mt-0 mb-2">English tours: {{ $englishTours2 }}</p>
        <p class="mt-0">Dutch tours: {{ $dutchTours2 }}</p>
        @if ($chineseTours2 > 0)
            <p class="mt-0">Chinese tours: {{ $chineseTours2 }}</p>
        @endif
    </div>
@elseif ($ticket->Name === 'Session 3')
    <div class="bg-yellow-400 p-2 rounded-b mb-4">
        <p class="mt-0 mb-2">English tours: {{ $englishTours3 }}</p>
        <p class="mt-0">Dutch tours: {{ $dutchTours3 }}</p>
        @if ($chineseTours3 > 0)
            <p class="mt-0">Chinese tours: {{ $chineseTours3 }}</p>
        @endif
    </div>
@endif
