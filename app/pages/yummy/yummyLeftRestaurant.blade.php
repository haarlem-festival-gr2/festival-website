<div class="relative mt-8">
    <div class="bg-fuchsia-600">
        <div class="grid grid-cols-1 md:grid-cols-10 mt-4 md:mt-24 text-center text-3xl relative">
            <!-- Restaurant Name -->
            <div class="col-span-1 md:col-span-5 p-2 md:p-4 md:row-span-1">
                <div class="bg-amber-400">
                    <h1 class="text-7xl p-2 font-bold text-center">{{ $name }}</h1>
                </div>
            </div>
            <!-- Star Rating -->
            <div
                class="col-span-1 md:col-span-5 p-4 md:p-12 row-span-1 flex justify-center md:justify-end items-center md:mt-0 mt-8 md:mb-0 mb-8">
                @include('yummy.yummyStarRating', ['filledStars' => $starRating])
            </div>
            <!-- Restaurant Image -->
            <div class="col-span-1 md:col-span-6 p-2 md:row-span-4">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" class="w-full shadow-lg rounded-3xl" />
            </div>
            <!-- Restaurant Information -->
            <div class="col-span-1 md:col-span-4 p-2 md:row-span-4">
                <div class="grid grid-cols-1 md:grid-cols-4 bg-slate-50 h-full p-6 rounded-2xl shadow-lg">
                    <div class="col-span-1 md:col-span-2 row-spawn-2 mt-8">
                        <i class="fa-sharp fa-solid fa-calendar-week fa-2xl" style="color: #c026d3"></i>
                        <!-- Icon-->
                        <h1 class="mt-6">Sessions</h1>
                        <h1><b>{{ $sessions }} a day</b></h1>
                    </div>
                    <div class="col-span-1 md:col-span-2 row-spawn-2 mt-8">
                        <i class="fa-sharp fa-regular fa-clock fa-2xl" style="color: #c026d3"></i>
                        <!--Clock Icon-->
                        <h1 class="mt-6">Start Time</h1>
                        <h1 class="mt-6">session starts</h1>
                        <h1><b>{{ $startTime }}</b></h1>
                    </div>
                    <div class="col-span-1 md:col-span-2 row-spawn-2 mt-8">
                        <i class="fa-sharp fa-regular fa-hourglass-half fa-2xl" style="color: #c026d3"></i>
                        <!--Hourglass Icon-->
                        <h1 class="mt-6">Session Time</h1>
                        <h1><b>{{ $sessionTime }}</b></h1>
                    </div>
                    <div class="col-span-1 md:col-span-2 row-spawn-2 mt-8">
                        <i class="fa-solid fa-regular fa-utensils fa-2xl" style="color: #c026d3"></i>
                        <!--Cutlery Icon-->
                        <h1 class="mt-6"><b>{{ $category1 }}</b></h1>
                        <h1><b>{{ $category2 }}</b></h1>
                        <h1><b>{{ $category3 }}</b></h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Restaurant Location -->
        <div class="bg-amber-400 flex justify-center items-center md:h-24 h-32">
            <i class="fa-solid fa-location-dot fa-2xl md:p-8 p-4" style="color: #c026d3"></i>
            <h1 class="text-3xl md:text-5xl font-bold">{{ $location }}</h1>
        </div>

        <!-- Buttons -->
        <div class="bg-pink-400 md:h-32 h-40">
            <div class="flex justify-center items-center md:h-full h-auto">
                <a href="/agenda/purchase?name={{ $name }}"
                    class="button rounded-full text-4xl md:text-5xl mx-4 md:mx-16 mt-4 text-center">Make
                    Reservation!</a>
                <a href="/restaurant?restaurant_id={{ $restaurantID }}"
                    class="button rounded-full text-4xl md:text-5xl mx-4 md:mx-16 mt-4 text-center">More Information</a>
            </div>
        </div>
    </div>
</div>
