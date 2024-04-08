
<!-- performances and btn-->
@foreach ($performances as $performance)
    <div class="text-center">
        <div class="flex flex-col bg-[#FCC040] items-center p-4 md:p-8 m-6">
            <p class=" text-base sm:text-lg">
                Come to {{ $performance->Day->Venue->Name }}
                on {{ date('j F', strtotime($performance->StartDateTime)) }}
                to enjoy {{ $artist->Name }}'s music!<br/>
                {{ date('H:i', strtotime($performance->StartDateTime)) }}
                - {{ date('H:i', strtotime($performance->EndDateTime)) }}
                @if (trim($performance->Details) !== '')
                    | {{ $performance->Details }}
                @endif
                @if ($performance->Price != '0.00')
                    - € {{ number_format($performance->Price, 2) }}
                @endif
            </p>
            @if ($performance->Price != '0.00')
                <div class="mt-4 flex justify-center w-full">
                    @if ($performance->AvailableTickets > 0)
                        <a href="/agenda/purchase?name={{$artist->Name}}" class="p-2 sm:p-3 rounded-md font-semibold uppercase cursor-pointer text-sm sm:text-base w-48 bg-pink-500 text-white">
                            Buy Tickets!</a>
                    @else
                        <button class="p-2 sm:p-3 rounded-md font-semibold uppercase cursor-pointer text-sm sm:text-base w-48 bg-red-500 text-white" disabled>
                            Sold Out
                        </button>
                    @endif
                </div>
            @else
                <div class="mt-4 flex justify-center">
                    <span class="inline-block p-2 sm:p-3 rounded-md font-semibold uppercase cursor-pointer text-sm sm:text-base text-black">
                        For free!
                    </span>
                </div>
            @endif
        </div>
    </div>
@endforeach