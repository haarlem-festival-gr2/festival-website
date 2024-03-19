<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yummy!</title>
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
        'headerImage' => 'img/yummy/yummyHeader.png',
        'headerImageAlt' => 'The Grote Markt which has people walking and restaurant stalls.',
        'title' => 'Yummy!',
        'subtitle' => 'Join us at the Haarlem Yummy Food Festival!',
        'mainBarTitle' => 'Embark on a Culinary journey in Haarlem!',
    ])

    @include('yummy.yummyFestival', [
        'section1Text' =>
            'Come and explore the different sessions at each restaurant! Think tasty appetisers, hearty mains and sweet treats for dessert. You can reserve a spot and treat your taste buds to a special menu at each place.',
        'section1Image' => 'img/yummy/yummyInfo1.png',
        'section1ImageAlt' => 'Food being grilled and looking tasty.',
        'section2Text' => "This is not just about food - It's about diving into Haarlem's unique food culture.",
        'section2Image' => 'img/yummy/yummyInfo4.png',
        'section2ImageAlt' => 'Big wooden plate with sushi and other tasty food.',
        'section3Image' => 'img/yummy/yummyInfo2.png',
        'section3ImageAlt' => 'Food on grey clay plate.',
        'section4Image' => 'img/yummy/yummyInfo3.png',
        'section4ImageAlt' => 'Food on grey clay plate.',
        'section3Text' =>
            "Meet the local chefs, find out what inspires them, and enjoy the unique flavours that make Haarlem's food scene so special.",
        'section4Text' =>
            "Whether you're a food lover, a local looking for something new, or a visitor wanting to experience Haarlem's taste, the Yummy Food Festival is where it's at. Bring your appetite and let's make some delicious memories together!",
        'section5Image' => 'img/yummy/yummyInfo5.png',
        'section5ImageAlt' => 'Chefs preparing food.',
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
