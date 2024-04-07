<div class="sm:p-3 p-4 bg-[#B92090] text-center">
    <h3 class="text-xl sm:text-2xl text-white font-bold">
        DAY {{ $dayNumber + 1 }} -
        {{ date('l, F jS', strtotime($eventDay['day']->Date)) }} 📍
        <span class="tooltip relative inline cursor-pointer">
            <u class="underline">{{ $eventDay['day']->Venue->Name }}</u>
            <span class="tooltiptext absolute z-10 bg-[#B92090] text-white text-xs sm:text-sm md:text-base rounded-md p-2 w-56 -translate-x-1/2 left-1/2 transform transition-opacity duration-300">
                {{ $eventDay['day']->Venue->Name }}<br/>
                {{ $eventDay['day']->Venue->Address }}<br/>
                {{ $eventDay['day']->Venue->ContactDetails }}
                @if (!empty($eventDay['day']->Note))
                    {{ $eventDay['day']->Note }}
                @endif
            </span>
        </span>
    </h3>
</div>