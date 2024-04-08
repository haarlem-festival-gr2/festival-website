<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $restaurant->Title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .font-open-sans {
            font-family: "Open Sans", sans-serif;
        }
    </style>
</head>

<body class="font-open-sans bg-amber-100 text-black">
    @include('main.navbar')

    <section>
        <!-- Header -->
        @include('restaurant.restaurantHeader', [
            'image' => $restaurant->HeaderImg,
            'alt' => $restaurant->HeaderAlt,
            'title' => $restaurant->Title,
            'subtitle' => $restaurant->SubTitle,
        
            'category1' => $restaurant->Category1,
            'category2' => $restaurant->Category2,
            'category3' => $restaurant->Category3,
        ])
    </section>
    <section>
        <!-- Information-->
        <div class="grid grid-cols-10 mt-8 text-center text-3xl relative">
            @include('restaurant.restaurantInformation', [
                'location' => $restaurant->Location,
            
                'filledStars' => $restaurant->Stars,
            
                'image1' => $restaurant->FoodImg1,
                'alt1' => $restaurant->FoodAlt1,
                'image2' => $restaurant->FoodImg2,
                'alt2' => $restaurant->FoodAlt2,
                'image3' => $restaurant->FoodImg3,
                'alt3' => $restaurant->FoodAlt3,
            
                'sessions' => $restaurant->SessionsADay,
                'sessionTime' => $restaurant->SessionsDuration,
                'startHour' => $restaurant->SessionsStartTime,
                'seats' => $restaurant->SessionsTotalSeats,
            
                'category1' => $restaurant->Category1,
                'category2' => $restaurant->Category2,
                'category3' => $restaurant->Category3,
                'priceAdult' => number_format($restaurant->PriceAdult, 2),
                'priceChild' => number_format($restaurant->PriceChild, 2),
            ])
        </div>

        <!-- Cook along -->
        @include('restaurant.restaurantCookAlong', [
            'image' => $restaurant->RecipeImg,
            'alt' => $restaurant->RecipeAlt,
            'title' => 'Cook along!',
            'steps' => $restaurant->Recipe,
        ])

        <!-- Schedule -->
        <div class="grid grid-cols-6 p-2 mt-8">
            <div class="col-span-4"></div> <!-- Empty -->
            <div class="col-span-2 bg-pink-400">
                <h1 class="text-4xl p-2 font-bold text-center">Schedule</h1>
            </div>
            <div class="grid grid-cols-4 col-span-6 mt-4 p-2 bg-amber-400 shadow-lg rounded-3xl">
                @foreach ($restaurantSessions as $sessionInfo)
                    @include('restaurant.restaurantScheduleBox', [
                        'date' => $sessionInfo['date'],
                        'day' => $sessionInfo['day'],
                        'sessions' => $sessionInfo['sessions'],
                    ])
                @endforeach
            </div>
        </div>

        <!-- Get in contact -->
        <div class="grid grid-cols-6 p-2 mt-8">
            <div class="col-span-4 bg-pink-400">
                <h1 class="text-4xl p-2 font-bold text-center">Get in contact!</h1>
            </div>
            <div class="col-span-2"></div> <!-- Empty -->
            <div class="grid grid-cols-2 col-span-6 p-8 bg-amber-400 shadow-lg rounded-3xl">
                <!-- Left side: Form -->
                <form id="contactForm" class="col-span-1 p-4">
                    <div class="grid grid-cols-2 p-4 rounded-3xl bg-pink-400">
                        <div class="col-span-1 mb-4">
                            <label for="name" class="block text-white font-bold mb-2">Enter name*</label>
                            <input type="text" id="name" name="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Enter name" required>
                        </div>
                        <div class="col-span-1 mb-4">
                            <label for="email" class="block text-white font-bold mb-2">Enter your email*</label>
                            <input type="email" id="email" name="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Enter your email" required>
                        </div>
                        <div class="col-span-2 mb-4">
                            <label for="subject" class="block text-white font-bold mb-2">Subject*</label>
                            <input type="text" id="subject" name="subject"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Subject" required>
                        </div>
                        <div class="col-span-2 mb-4">
                            <label for="message" class="block text-white font-bold mb-2">Message*</label>
                            <textarea id="message" name="message" rows="5"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Message" required></textarea>
                        </div>
                    </div>
                </form>

                <!-- Right side: Restaurant Contact Details -->
                @include('restaurant.restaurantContactDetails', [
                    'address' => $restaurant->Location,
                    'telephone' => $restaurant->Telephone,
                    'email' => $restaurant->Email,
                    'chamber' => $restaurant->ChamberOfCommerce,
                ])
                <div class="grid grid-cols-2 col-span-2">
                    <div class="col-span-1 flex justify-center">
                        <button type="submit" form="contactForm"
                            class="bg-pink-500 hover:bg-pink-600 text-white text-3xl font-bold py-4 px-16 rounded-3xl focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <button type="button"
                            class="bg-pink-500 hover:bg-pink-600 text-white text-3xl font-bold py-4 px-16 rounded-3xl focus:outline-none focus:shadow-outline">
                            Reserve Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        @extends('main.footer')
    </section>
</body>

</html>
