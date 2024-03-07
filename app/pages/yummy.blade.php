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

<body class="font-open-sans bg-amber-100 text-black">
    <div class="relative">
        <img src="img/yummy/yummyHeader.png" alt="The Grote Markt which has people walking and restaurant stalls."
            class="w-full" />
    </div>
    <div class="bg-fuchsia-600 p-10 text-white font-bold text-center">
        <h1 class="text-8xl mb-6">Yummy!</h1>
        <p class="text-4xl mb-2">Join us at the Haarlem Yummy Food Festival!</p>
    </div>
    <div class="relative mt-8">
        <!-- Shadow Bar-->
        <div class="bg-pink-300 h-16 w-4/6 absolute left-1 top-0"></div>
        <!-- Main Bar -->
        <div class="bg-pink-400 h-16 w-4/6 absolute left-0 top-1">
            <h1 class="text-4xl p-2 font-bold text-center">
                Embark on a Culinary journey in Haarlem!
            </h1>
        </div>
    </div>

    <!-- Grid -->
    <section>
        <div class="grid grid-cols-10 mt-36 mx-4 text-center text-3xl relative">
            <div class="col-span-3 p-2 row-span-2 bg-yellow-300 rounded-2xl shadow-lg relative">
                <p>
                    Come and explore the different <b>sessions</b> at each restaurant!
                    Think tasty appetisers, hearty mains and sweet treats for dessert.
                    <br /><br />You can <b>reserve</b> a spot and treat your taste buds
                    to a special menu at each place.
                </p>
            </div>
            <div class="col-span-3 p-4 row-span-2">
                <img src="img/yummy/yummyInfo1.png" alt="Food being grilled and looking tasty."
                    class="w-full shadow-lg rounded-3xl" />
            </div>
            <div class="col-span-1 p-4 row-span-6"></div>
            <div class="bg-yellow-300 col-span-3 p-4 rounded-2xl shadow-lg relative">
                <p>
                    This is not just about food - It's about diving into Haarlem's
                    <b>unique</b> food culture.
                </p>
            </div>
            <div class="col-span-3 p-4 row-span-2">
                <img src="img/yummy/yummyInfo4.png" alt="Big wooden plate with sushi and other tasty food."
                    class="w-full shadow-lg rounded-3xl" />
            </div>
            <div class="col-span-3 p-4 row-span-2">
                <img src="img/yummy/yummyInfo2.png" alt="Food on grey clay plate."
                    class="w-full shadow-lg rounded-3xl" />
            </div>
            <div class="col-span-3 p-4 row-span-2">
                <img src="img/yummy/yummyInfo3.png" alt="Food on black clay plate, looking good!"
                    class="w-full shadow-lg rounded-3xl" />
            </div>
            <div class="bg-yellow-300 col-span-3 p-4 rounded-2xl shadow-lg relative">
                <p>
                    <b>Meet the local chefs</b>, find out what inspires them, and enjoy
                    the <b>unique flavours</b> that make Haarlem's food scene so
                    special.
                </p>
            </div>
            <div class="bg-yellow-300 col-span-6 p-4 rounded-2xl shadow-lg relative">
                <p>
                    Whether you're a food lover, a local looking for something new, or a
                    visitor wanting to experience Haarlem's taste, the
                    <b>Yummy Food Festival is where it's at</b>. Bring your appetite and
                    let's make some <b>delicious</b> memories together!
                </p>
            </div>
            <div class="col-span-3 p-4">
                <img src="img/yummy/yummyInfo5.png" alt="Chefs preparing food." class="w-full shadow-lg rounded-3xl" />
            </div>
        </div>
    </section>

    <div class="relative mt-16">
        <div class="bg-pink-400 h-24">
            <h1 class="text-4xl p-6 font-bold text-center">
                Participating Restaurants!
            </h1>
        </div>
    </div>

    <!-- Restaurants -->
    <section>
        <div>
            <!-- Restaurant W/Image Left-->
            <div class="bg-fuchsia-600 mt-16">
                <div class="grid grid-cols-10 mt-24 text-center text-3xl relative">
                    <!-- Restaurant Name -->
                    <div class="col-span-5 p-2 row-span-1">
                        <div class="bg-amber-400">
                            <h1 class="text-7xl p-2 font-bold text-center">Ratatouile</h1>
                        </div>
                    </div>
                    <!-- Star Rating -->
                    <div class="col-span-5 p-12 row-span-1 flex justify-end">
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
                        <!--Yellow Star Icon-->
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
                        <!--Yellow Star Icon-->
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
                        <!--Yellow Star Icon-->
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
                        <!--Yellow Star Icon-->
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffffff"></i>
                        <!--White Star Icon-->
                    </div>
                    <!-- Restaurant Image -->
                    <div class="col-span-6 p-2 row-span-4">
                        <img src="img/yummy/yummyHomeRatatouile.png"
                            alt="A view of the inside of the Ratatouile restaurant, showing multiple seats, fancy lightning and some paintings."
                            class="w-full shadow-lg rounded-3xl" />
                    </div>
                    <!-- Restaurant Information -->
                    <div class="col-span-4 p-2 row-span-4">
                        <div class="grid grid-cols-4 bg-slate-50 h-full p-6 rounded-2xl shadow-lg">
                            <div class="col-span-2 row-spawn-2 mt-8">
                                <i class="fa-sharp fa-regular fa-3 fa-2xl" style="color: #c026d3"></i>
                                <!--3 Icon-->
                                <h1 class="mt-6">Sessions</h1>
                                <h1>
                                    <b><b>3 a day</b></b>
                                </h1>
                            </div>
                            <div class="col-span-2 row-spawn-2 mt-8">
                                <i class="fa-sharp fa-regular fa-clock fa-2xl" style="color: #c026d3"></i>
                                <!--Clock Icon-->
                                <h1 class="mt-6">Start Time</h1>
                                <h1>session starts</h1>
                                <h1><b>17:00</b></h1>
                            </div>
                            <div class="col-span-2 row-spawn-2 mt-8">
                                <i class="fa-sharp fa-regular fa-hourglass-half fa-2xl" style="color: #c026d3"></i>
                                <!--Hourglass Icon-->
                                <h1 class="mt-6">Session Time</h1>
                                <h1><b>2 hours</b></h1>
                            </div>
                            <div class="col-span-2 row-spawn-2 mt-8">
                                <i class="fa-solid fa-regular fa-utensils fa-2xl" style="color: #c026d3"></i>
                                <!--Cutlery Icon-->
                                <h1 class="mt-6"><b>French</b></h1>
                                <h1><b>Fish & Seafood</b></h1>
                                <h1><b>European</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Restaurant Location -->
            <div class="bg-amber-400 flex justify-center items-center h-24">
                <i class="fa-solid fa-location-dot fa-2xl p-8" style="color: #c026d3"></i>
                <h1 class="text-5xl p-2 font-bold">Spaarne 96, 2011 CL Haarlem</h1>
            </div>
            <!-- Buttons -->
            <div class="bg-pink-400 h-32">
                <div class="flex justify-center items-center">
                    <a href="/restaurant" class="button rounded-full text-5xl mr-16 mt-8">Make Reservation!</a>
                    <!-- Replace with Reservation -->
                    <a href="/restaurant" class="button rounded-full text-5xl ml-16 mt-8">More Information</a>
                </div>
            </div>

            <!-- Restaurant W/Image Left End -->
            <!-- Restaurant W/Image Right Start-->
            <div class="bg-fuchsia-600 mt-16">
                <div class="grid grid-cols-10 mt-24 text-center text-3xl relative">
                    <!-- Restaurant Name -->
                    <div class="col-span-5 p-2 row-span-1">
                        <div class="bg-amber-400">
                            <h1 class="text-7xl p-2 font-bold text-center">
                                Café de Roemer
                            </h1>
                        </div>
                    </div>
                    <!-- Star Rating -->
                    <div class="col-span-5 p-12 row-span-1 flex justify-end">
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
                        <!--Yellow Star Icon-->
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
                        <!--Yellow Star Icon-->
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
                        <!--Yellow Star Icon-->
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
                        <!--Yellow Star Icon-->
                        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffffff"></i>
                        <!--White Star Icon-->
                    </div>
                    <!-- Restaurant Information -->
                    <div class="col-span-4 p-2 row-span-4">
                        <div class="grid grid-cols-4 bg-slate-50 h-full p-6 rounded-2xl shadow-lg">
                            <div class="col-span-2 row-spawn-2 mt-8">
                                <i class="fa-sharp fa-regular fa-3 fa-2xl" style="color: #c026d3"></i>
                                <!--3 Icon-->
                                <h1 class="mt-6">Sessions</h1>
                                <h1>
                                    <b><b>3 a day</b></b>
                                </h1>
                            </div>
                            <div class="col-span-2 row-spawn-2 mt-8">
                                <i class="fa-sharp fa-regular fa-clock fa-2xl" style="color: #c026d3"></i>
                                <!--Clock Icon-->
                                <h1 class="mt-6">Start Time</h1>
                                <h1>session starts</h1>
                                <h1><b>18:00</b></h1>
                            </div>
                            <div class="col-span-2 row-spawn-2 mt-8">
                                <i class="fa-sharp fa-regular fa-hourglass-half fa-2xl" style="color: #c026d3"></i>
                                <!--Hourglass Icon-->
                                <h1 class="mt-6">Session Time</h1>
                                <h1><b>1 and a half hours</b></h1>
                            </div>
                            <div class="col-span-2 row-spawn-2 mt-8">
                                <i class="fa-solid fa-regular fa-utensils fa-2xl" style="color: #c026d3"></i>
                                <!--Cutlery Icon-->
                                <h1 class="mt-6"><b>Dutch</b></h1>
                                <h1><b>Fish & Seafood</b></h1>
                                <h1><b>European</b></h1>
                            </div>
                        </div>
                    </div>
                    <!-- Restaurant Image -->
                    <div class="col-span-6 p-2 row-span-4">
                        <img src="img/yummy/yummyHomeCaféDeRoemer.png"
                            alt="A view of the inside of the Ratatouile restaurant, showing multiple seats, fancy lightning and some paintings."
                            class="w-full shadow-lg rounded-3xl" />
                    </div>
                </div>
            </div>
            <!-- Restaurant Location -->
            <div class="bg-amber-400 flex justify-center items-center h-24">
                <i class="fa-solid fa-location-dot fa-2xl p-8" style="color: #c026d3"></i>
                <h1 class="text-5xl p-2 font-bold">Botermarkt 17, 2011 XL Haarlem</h1>
            </div>
            <!-- Buttons -->
            <div class="bg-pink-400 h-32">
                <div class="flex justify-center items-center">
                    <a href="/restaurant" class="button rounded-full text-5xl mr-16 mt-8">Make Reservation!</a>
                    <!-- Replace with Reservation -->
                    <a href="/restaurant" class="button rounded-full text-5xl ml-16 mt-8">More Information</a>
                </div>
            </div>

            <!-- Restaurant W/Image Left End -->
        </div>
    </section>
</body>

</html>
