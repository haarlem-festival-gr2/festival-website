<!-- Location -->

<div class="col-span-6 row-span-1 flex justify-center items-center h-24">
    <i class="fa-solid fa-location-dot fa-2xl p-8" style="color: #c026d3"></i>
    <h1 class="text-5xl p-2 font-bold">{{ $location }}</h1>
</div>


<!-- Star Ratings -->

<div class="col-span-4 p-12 row-span-1 flex justify-end">
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $filledStars)
            <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
        @else
            <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #98a6a9"></i>
        @endif
    @endfor
</div>

<!-- Food Images -->

<div class="col-span-3 p-2 row-span-2">
    <img src="{{ $image1 }}" alt="{{ $alt1 }}" class="mt-8 shadow-lg rounded-3xl" />
</div>
<div class="col-span-4 p-2 row-span-2">
    <img src="{{ $image2 }}" alt="{{ $alt2 }}" class="shadow-lg rounded-3xl" />
</div>
<div class="col-span-3 p-2 row-span-2">
    <img src="{{ $image3 }}" alt="{{ $alt3 }}" class="mt-8 shadow-lg rounded-3xl" />
</div>

<!-- Sessions Information & Seats Amount -->

<div class="col-span-5 p-2 row-span-4">
    <div class="grid grid-cols-4 bg-amber-400 h-full rounded-2xl shadow-lg">
        <div class="col-span-1 row-spawn-2 mt-12">
            <i class="fa-sharp fa-solid fa-calendar-week fa-2xl" style="color: #c026d3;"></i>
            <!--3 Icon-->
            <h1 class="mt-6">Sessions</h1>
            <h1><b>{{ $sessions }}</b></h1>
        </div>
        <div class="col-span-1 row-spawn-2 mt-12">
            <i class="fa-sharp fa-regular fa-hourglass-half fa-2xl" style="color: #c026d3;"></i>
            <!--Hourglass Icon-->
            <h1 class="mt-6">Session Time</h1>
            <h1><b>{{ $sessionTime }}</b></h1>
        </div>
        <div class="col-span-1 row-spawn-2 mt-12">
            <i class="fa-sharp fa-regular fa-clock fa-2xl" style="color: #c026d3;"></i>
            <!--Clock Icon-->
            <h1 class="mt-6">Start Time</h1>
            <h1>session starts</h1>
            <h1><b>{{ $startHour }}</b></h1>
        </div>
        <div class="col-span-1 row-spawn-2 mt-12">
            <i class="fa-solid fa-regular fa-user-group fa-2xl" style="color: #c026d3;"></i>
            <!--Cutlery Icon-->
            <h1 class="mt-6">Seats</h1>
            <h1><b>{{ $seats }}</b> per</h1>
            <h1>session</h1>
        </div>
    </div>
</div>

<!-- Prices & Categories -->

<div class="col-span-5 p-2 row-span-4">
    <div class="grid grid-cols-4 bg-amber-400 rounded-2xl shadow-lg p-2">
        <div class="col-span-2 row-spawn-2 flex justify-center items-center">
            <i class="fa-sharp fa-regular fa-user fa-2xl" style="color: #c026d3;"></i>
            <!--3 Person Icon-->
            <div class="bg-pink-500 p-2 shadow-lg rounded-3xl flex justify-center items-center ml-4">
                <i class="fa-solid fa-euro-sign fa-2xl" style="color: #ffffff;"></i>
                <!--Euro Icon-->
                <h1 class="p-6 text-white"><b>{{ $priceAdult }}</b></h1>
            </div>
        </div>
        <div class="col-span-2 row-spawn-4">
            <i class="fa-solid fa-regular fa-utensils fa-2xl mt-8" style="color: #c026d3;"></i>
            <!--Cutlery Icon-->
            <h1 class="mt-2"><b>{{ $category1 }}</b></h1>
            <h1><b>{{ $category2 }}</b></h1>
            <h1><b>{{ $category3 }}</b></h1>
        </div>
        <div class="col-span-2 row-spawn-2 flex justify-center items-center">
            <i class="fa-solid fa-regular fa-baby fa-2xl" style="color: #c026d3;"></i>
            <!--Baby Icon-->
            <div class="bg-pink-500 p-2 shadow-lg rounded-3xl flex justify-center items-center ml-4">
                <i class="fa-solid fa-euro-sign fa-2xl" style="color: #ffffff;"></i>
                <!--Euro Icon-->
                <h1 class="p-6 text-white"><b>{{ $priceChild }}</b></h1>
            </div>
        </div>
    </div>
</div>
