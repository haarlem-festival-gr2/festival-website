@foreach ($eventDay['performances'] as $index => $performance)
    <div class="w-full p-2 box-border">
        <div class="flex justify-between items-center bg-black bg-opacity-40 p-2.5 text-xs sm:text-base md:text-lg">
            <p class="text-white">
                {{ $performance->Artist->Name }}
                <br/>{{ date('H:i', strtotime($performance->StartDateTime)) }}
                - {{ date('H:i', strtotime($performance->EndDateTime)) }}
                @if (!empty($performance->Details))
                    | {{ $performance->Details }}
                @endif
                @if ($performance->Price != '0.00')
                    - € {{ number_format($performance->Price, 2) }}
                @else
                    - Free!
                @endif
            </p>
            @if ($performance->Price != '0.00')
                @if ($performance->AvailableTickets > 0)
                    <a href="/agenda/purchase?name={{$performance->Artist->Name}}" class="inline-flex items-center justify-center rounded-md font-semibold md:uppercase cursor-pointer text-xs sm:text-sm ml-4 sm:ml-44 mr-8 sm:mr-[2rem] mr-[2rem] w-32 sm:w-35 md:w-48 h-8 sm:h-8 md:h-10 bg-yellow-400 text-black text-center">
                        Buy Tickets!
                    </a>
                @else
                    <button class="inline-flex items-center justify-center rounded-md font-semibold md:uppercase cursor-pointer text-xs sm:text-sm ml-4 sm:ml-44 mr-8 sm:mr-[2rem] mr-[2rem] w-32 sm:w-35 md:w-48 h-8 sm:h-8 md:h-10 bg-red-500 text-white text-center" disabled>
                        Sold Out
                    </button>
                @endif
            @endif
        </div>
    </div>
@endforeach
