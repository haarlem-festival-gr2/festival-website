<button
        {{$isSoldOut = $performance->AvailableTickets == 0}}
        class="px-3 py-1.5 rounded-md font-semibold uppercase cursor-pointer text-xs ml-44 mr-[2rem] w-48 {{ $isSoldOut ? 'bg-red-500 text-white' : 'bg-pink-500 text-white' }}"
        onclick="addTicketToProgram(this)"
        data-default-text="Add a pass to personal program"
        data-active-text="Pass added to personal program"
        data-default-class="bg-pink-500"
        data-active-class="bg-green-500"
        {{ $isSoldOut ? 'disabled' : '' }}>
    {{ $isSoldOut ? 'Sold Out' : 'Add a pass to personal program' }}
</button>
