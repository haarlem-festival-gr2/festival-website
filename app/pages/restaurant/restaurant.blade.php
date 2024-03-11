<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Restaurant</title>
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
    <section>
        <!-- Header -->
        @include('restaurant.restaurantHeader', [
            'image' => 'img/yummy/RatatouileHeader.png',
            'alt' => 'The Grote Markt which has people walking and restaurant stalls.',
            'title' => 'Ratatouille!',
            'subtitle' => 'Food & Wine',
        
            'category1' => 'French',
            'category2' => 'Fish & Seafood',
            'category3' => 'European',
        ])
    </section>
    <section>
        <!-- Information-->
        <div class="grid grid-cols-10 mt-8 text-center text-3xl relative">
            @include('restaurant.restaurantInformation', [
                'location' => 'Spaarne 96, 2011 CL Haarlem',
            
                'filledStars' => 4,
            
                'image1' => 'img/yummy/RatatouileFood1.png',
                'alt1' => 'A fancy dish being displayed on a fancy plate.',
                'image2' => 'img/yummy/RatatouileFood2.png',
                'alt2' => 'Food on a grill looking tasty.',
                'image3' => 'img/yummy/RatatouileFood3.png',
                'alt3' => 'Fancy looking dish.',
            
                'sessions' => '3 a day',
                'sessionTime' => '2 hours',
                'startTime' => 'session starts',
                'startHour' => '17:00',
                'seats' => 52,
            
                'category1' => 'French',
                'category2' => 'Fish & Seafood',
                'category3' => 'European',
                'priceAdult' => '45.00',
                'priceChild' => '22.50',
            ])
        </div>

        <!-- Cook along -->
        @include('restaurant.restaurantCookAlong', [
            'image' => 'img/yummy/RatatouileRecipe.png',
            'alt' => 'The dish called Ratatouile being displayed.',
            'title' => 'Cook along!',
            'steps' => [
                'Preheat oven to 190˚C.',
                'Slice eggplant, tomatoes, squash, and zucchini into approximately 1-mm rounds.',
                'Make sauce: Sauté onion, garlic, and bell peppers in olive oil until soft. Add crushed tomatoes, season, and stir in basil.',
                'Arrange veggies in alternating slices on sauce. Season.',
                'Make herb seasoning: Mix basil, garlic, parsley, thyme, salt, pepper, and olive oil. Spoon over veggies.',
                'Cover with foil and bake for 40 minutes.',
                'Uncover and bake for an additional 20 minutes until veggies are softened.',
                'Serve hot as a main or side.',
                'Reheat covered with foil at 180˚ C for 15 minutes or microwave.',
                'Enjoy!',
            ],
        ])

        <!-- Schedule -->
        <div class="grid grid-cols-6 p-2 mt-8">
            <div class="col-span-4"></div> <!-- Empty -->
            <div class="col-span-2 bg-pink-400">
                <h1 class="text-4xl p-2 font-bold text-center">Schedule</h1>
            </div>
            <div class="grid grid-cols-4 col-span-6 mt-4 p-2 bg-amber-400 shadow-lg rounded-3xl">
                <!-- Day 1 -->
                @include('restaurant.restaurantScheduleBox', [
                    'date' => '25th of July',
                    'day' => 'Thursday',
                    'sessions' => [
                        ['time' => '17:00', 'name' => 'Session 1'],
                        ['time' => '19:00', 'name' => 'Session 2'],
                        ['time' => '21:00', 'name' => 'Session 3'],
                    ],
                ])
                <!-- Day 2 -->
                @include('restaurant.restaurantScheduleBox', [
                    'date' => '26th of July',
                    'day' => 'Friday',
                    'sessions' => [
                        ['time' => '17:00', 'name' => 'Session 1'],
                        ['time' => '19:00', 'name' => 'Session 2'],
                        ['time' => '21:00', 'name' => 'Session 3'],
                    ],
                ])
                <!-- Day 3 -->
                @include('restaurant.restaurantScheduleBox', [
                    'date' => '27th of July',
                    'day' => 'Saturday',
                    'sessions' => [
                        ['time' => '17:00', 'name' => 'Session 1'],
                        ['time' => '19:00', 'name' => 'Session 2'],
                        ['time' => '21:00', 'name' => 'Session 3'],
                    ],
                ])
                <!-- Day 4 -->
                @include('restaurant.restaurantScheduleBox', [
                    'date' => '28th of July',
                    'day' => 'Sunday',
                    'sessions' => [
                        ['time' => '17:00', 'name' => 'Session 1'],
                        ['time' => '19:00', 'name' => 'Session 2'],
                        ['time' => '21:00', 'name' => 'Session 3'],
                    ],
                ])
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
                    'address' => 'Spaarne 96, 2011 CL Haarlem',
                    'telephone' => '023 542 7270',
                    'email' => 'info@ratatouillefoodandwine.nl',
                    'chamber' => '58174923',
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
</body>

</html>