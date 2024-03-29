<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $yummies->Title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .font-open-sans {
            font-family: "Open Sans", sans-serif;
        }

        .button {
            background-color: #c026d3;
            color: #fff;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>

<body class="font-open-sans bg-amber-100 text-black overflow-x-hidden">

    @include('yummy.yummyHeader', [
        'headerImage' => $yummies->HeaderImg,
        'headerImageAlt' => $yummies->HeaderAlt,
        'title' => $yummies->Title,
        'subtitle' => $yummies->SubTitle,
        'mainBarTitle' => $yummies->SubHeader,
    ])

    @include('yummy.yummyFestival', [
        'section1Text' => $yummies->Section1,
        'section1Image' => $yummies->FoodImg1,
        'section1ImageAlt' => $yummies->FoodAlt1,
        'section2Text' => $yummies->Section2,
        'section2Image' => $yummies->FoodImg2,
        'section2ImageAlt' => $yummies->FoodAlt2,
        'section3Image' => $yummies->FoodImg3,
        'section3ImageAlt' => $yummies->FoodAlt3,
        'section4Image' => $yummies->FoodImg4,
        'section4ImageAlt' => $yummies->FoodAlt4,
        'section3Text' => $yummies->Section3,
        'section4Text' => $yummies->Section4,
        'section5Image' => $yummies->FoodImg5,
        'section5ImageAlt' => $yummies->FoodAlt5,
    ])

    <div class="relative mt-16">
        <div class="bg-pink-400 h-24 md:h-auto flex items-center justify-center">
            <h1 class="text-4xl p-6 font-bold text-center">
                Participating Restaurants!
            </h1>
        </div>
    </div>

    <!-- Restaurants -->
    <section>
        @foreach ($restaurants as $key => $restaurant)
            @if ($loop->even)
                @include('yummy.yummyRightRestaurant', [
                    'name' => $restaurant->Title,
                    'starRating' => $restaurant->Stars,
                    'image' => $restaurant->HeaderImg,
                    'imageAlt' => $restaurant->HeaderAlt,
                    'sessions' => $restaurant->SessionsADay,
                    'startTime' => $restaurant->SessionsStartTime,
                    'sessionTime' => $restaurant->SessionsDuration,
                    'category1' => $restaurant->Category1,
                    'category2' => $restaurant->Category2,
                    'category3' => $restaurant->Category3,
                    'location' => $restaurant->Location,
                    'restaurantID' => $restaurant->RestaurantID,
                ])
            @else
                @include('yummy.yummyLeftRestaurant', [
                    'name' => $restaurant->Title,
                    'starRating' => $restaurant->Stars,
                    'image' => $restaurant->HeaderImg,
                    'imageAlt' => $restaurant->HeaderAlt,
                    'sessions' => $restaurant->SessionsADay,
                    'startTime' => $restaurant->SessionsStartTime,
                    'sessionTime' => $restaurant->SessionsDuration,
                    'category1' => $restaurant->Category1,
                    'category2' => $restaurant->Category2,
                    'category3' => $restaurant->Category3,
                    'location' => $restaurant->Location,
                    'restaurantID' => $restaurant->RestaurantID,
                ])
            @endif
        @endforeach
    </section>
    <section>
        @extends('main.footer')
    </section>
</body>

</html>
