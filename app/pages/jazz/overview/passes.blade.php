@php $passesStartOffset = count($eventDay['performances']) * 80 + 40; @endphp
@foreach ($eventDay['passes'] as $index => $pass)
    <div class="w-full p-2 box-border">
        <div class="flex justify-between items-center bg-black bg-opacity-40 p-2.5 text-xs sm:text-base md:text-lg">
            <p class="text-white">
                {{ $pass->Note }}<br>
                Price: €{{ number_format($pass->Price, 2) }}<br>
            </p>
            @if($pass->AvailableTickets > 0)
                <a href="/agenda/purchase?name=Jazz day" class="inline-flex items-center justify-center rounded-md font-semibold md:uppercase cursor-pointer text-xs sm:text-sm ml-4 sm:ml-44 mr-8 sm:mr-[2rem] mr-[2rem] w-32 sm:w-35 md:w-48 h-8 sm:h-8 md:h-10 bg-pink-500 text-white text-center">
                    Buy Jazz Pass!
                </a>
            @else
                <button class="p-3 rounded-md font-semibold uppercase cursor-pointer text-xs ml-44 mr-[2rem] w-48 bg-red-500 text-white text-center block" disabled>
                    Sold Out
                </button>
            @endif
        </div>
    </div>
@endforeach