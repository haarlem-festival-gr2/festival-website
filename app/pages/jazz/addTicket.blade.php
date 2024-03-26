<button
        {{$isSoldOut = $performance->AvailableTickets == 0}}
        class="px-3 py-1.5 rounded-md font-semibold uppercase cursor-pointer text-xs w-48 {{ $isSoldOut ? 'bg-red-500 text-white' : 'bg-yellow-400 text-black' }} {{ $buttonClass ?? '' }}"
        onclick="addTicketToProgram(this)"
        data-default-text="Add a ticket to personal program"
        data-active-text="Ticket added to personal program"
        data-default-class="bg-yellow-400"
        data-active-class="bg-green-500"
        {{ $isSoldOut ? 'disabled' : '' }}>
    {{ $isSoldOut ? 'Sold Out' : 'Add a ticket to personal program' }}
</button>

