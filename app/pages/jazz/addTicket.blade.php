<button
        class="px-3 py-1.5 rounded-md font-semibold uppercase cursor-pointer text-xs w-48 bg-yellow-400 text-black {{ $buttonClass ?? '' }}"
        onclick="addTicketToProgram(this)"
        data-default-text="Add a ticket to personal program"
        data-active-text="Ticket added to personal program"
        data-default-class="bg-yellow-400"
        data-active-class="bg-green-500"
        {{ $performance->AvailableTickets < $performance->TotalTickets ? 'disabled' : '' }}>
    Add a ticket to personal program
</button>

<script src="/script/jazzScript.js" defer></script>

<script>
    function addTicketToProgram(buttonElement) {
        if (buttonElement.disabled) {
            return; // Exit if the button is disabled
        }

        const activeText = buttonElement.getAttribute('data-active-text');
        const activeClass = buttonElement.getAttribute('data-active-class');
        const defaultClass = buttonElement.getAttribute('data-default-class');

        buttonElement.textContent = activeText;
        buttonElement.classList.remove(defaultClass);
        buttonElement.classList.add(activeClass);

        // Add logic here to actually add a ticket or pass to the user's program

        setTimeout(() => {
            buttonElement.textContent = buttonElement.getAttribute('data-default-text');
            buttonElement.classList.remove(activeClass);
            buttonElement.classList.add(defaultClass);
        }, 1000);
    }
</script>