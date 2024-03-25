<div class="{{$bg}} h-[10rem] rounded-xl flex flex-row p-2 gap-2">
    <img src="{{ $img }}" alt="" class="object-cover h-full aspect-video rounded-xl">
    <div class="bg-white whitespace-nowrap aspect-[24/9] rounded-xl h-full p-2">
        <h1 class="text-2xl font-serif font-semibold">{{ $title }}</h1>
        <span class="flex flex-row gap-2">
            <span class="material-symbols-outlined">calendar_month</span>
            <p>{{ $date }}</p>
        </span>
        <span class="flex flex-row gap-2">
            <span class="material-symbols-outlined">location_on</span>
            <p>{{ $venue }}</p>
        </span>
        <span class="flex flex-row gap-2">
            <span class="material-symbols-outlined">schedule</span>
            <p>{{ $time }}</p>
        </span>
        <span class="flex flex-row gap-2">
            <span class="material-symbols-outlined">euro</span>
            <p>{{ $cost }}</p>
        </span>
    </div>
    <form hx-post hx-target="#cart" class="flex flex-col gap-4" hx-vals='{"id": "{{$id}}"}'>
        <input type="submit" name="action" value="Add to Cart" class="cursor-pointer border-black border rounded bg-white px-4">
        <!-- <input type="submit" name="action" value="More Info" class="cursor-pointer border-black border rounded bg-white px-4"> -->
    </form>
</div>
