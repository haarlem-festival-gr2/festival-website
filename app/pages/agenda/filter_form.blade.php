<form id="filters" class="bg-white flex flex-col gap-4 p-4 w-80 rounded-lg h-min" hx-post hx-target="#out">
    <label class="text-2xl font-semibold">Filter</label>
    <label for="date">
        <p class="text-lg font-bold">Date</p>
        <div id="date" class="flex flex-col">
            <label for="day1" class="flex flex-row justify-between gap-4">
                25th July, Thursday
                <input id="day1" type="checkbox" name="day[]" value="25" checked>
            </label>
            <label for="day2" class="flex flex-row justify-between gap-4">
                26th July, Friday
                <input id="day2" type="checkbox" name="day[]" value="26" checked>
            </label>
            <label for="day3" class="flex flex-row justify-between gap-4">
                27th July, Saturday
                <input id="day3" type="checkbox" name="day[]" value="27" checked>
            </label>
            <label for="day4" class="flex flex-row justify-between gap-4">
                28th July, Sunday
                <input id="day4" type="checkbox" name="day[]" value="28" checked>
            </label>
        </div>
    </label>
    <label for="events">
        <p class="text-lg font-bold">Events</p>
        <div id="events" class="flex flex-col">
            <label for="hist-event" class="flex flex-row justify-between gap-4">
                <div class="flex flex-row items-center gap-2">
                    <div class="w-4 h-4 bg-[#95D4EB] rounded-full"></div>
                    <p>History</p>
                </div>
                <input id="hist-event" type="checkbox" name="event[]" value="History" checked>
            </label>
            <label for="jazz-event" class="flex flex-row justify-between gap-4">
                <div class="flex flex-row items-center gap-2">
                    <div class="w-4 h-4 bg-[#B92090] rounded-full"></div>
                    <p>Jazz</p>
                </div>
                <input id="jazz-event" type="checkbox" name="event[]" value="Jazz" checked>
            </label>
            <label for="yum-event" class="flex flex-row justify-between gap-4">
                <div class="flex flex-row items-center gap-2">
                    <div class="w-4 h-4 bg-[#e49287] rounded-full"></div>
                    <p>Yummy</p>
                </div>
                <input id="yum-event" type="checkbox" name="event[]" value="Yummy" checked>
            </label>
        </div>
    </label>
    <label for="name">
        <p class="text-lg font-bold">Name</p>
        <input id="name" name="name" type="text" class="border-gray-500 border rounded p-1">
    </label>
    <input type="submit" name="action" value="Filter" class="cursor-pointer border-black border rounded">
</form>
