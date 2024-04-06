<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-Q85xgzayNwtT9vIkzYuhCe9zgbjXJtexzAUcSUcvz6SaNEcYGTl4PvaYT2RtN1dfqZUhz7tCOBbXJkWNHNlxuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto px-4 py-8">
        <div class="md:flex md:items-start space-y-8 md:space-y-0 md:space-x-6 lg:space-x-8">

            <!-- Image and description container -->
            <div class="md:w-3/4 lg:w-2/3">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <h1 class="text-xl font-bold text-gray-700 mb-3">Book Your Spot Today for an Adventure Through
                            Time!</h1>
                        <p class="text-sm text-gray-600">Join us in uncovering the incredible history of Haarlem! With
                            your ticket, you'll journey through our city's past guided by enthusiastic experts.</p>
                    </div>
                    <div class="mb-6">
                        <div class="relative">
                            <img src="/img/history/walk3.png" alt="A street view of Haarlem"
                                class="rounded-lg shadow-lg w-full" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- OrderItem purchase container -->
            <div class="md:w-1/4 lg:w-1/3">
                <div class="bg-yellow-400 rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col justify-between"
                    style="background-color: #FCC040;">
                    <div>
                        <span class="text-xl font-bold text-gray-700 mb-6"><strong>From €17.50</strong></span>
                        <hr class="mb-6"> <!-- Horizontal line -->

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="date">
                                Select a date
                            </label>
                            <select id="date"
                                class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                @authguest disabled @endauth>
                                <option>Thursday, 25 July</option>
                                <option>Friday, 26 July</option>
                                <option>Saturday, 27 July</option>
                                <option>Sunday, 28 July</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="time">
                                Select time
                            </label>
                            <select id="time"
                                class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                @authguest disabled @endauth>
                                <option>10:00</option>
                                <option>12:00</option>
                                <option>14:00</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="tickets">
                                Select ticket amount
                            </label>
                            <div class="flex items-center gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm" for="adults">
                                        Individual €17.50
                                    </label>
                                    <input id="adults" type="number" min=0
                                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        value="0" @authguest disabled @endauth />
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm" for="children">
                                        Family €60
                                    </label>
                                    <input id="children" type="number" min=0
                                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        value="0" @authguest disabled @endauth />
                                </div>
                            </div>
                        </div>

                        <!-- Some extra content to make container longer -->
                        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget
                            urna ac velit sodales vehicula.</p>
                        <p class="mb-6 text-gray-700">Vestibulum tempor nunc vitae nunc sollicitudin, vel tempus justo
                            vehicula. Sed at est nec ante fermentum sollicitudin. Integer eget nulla tincidunt, eleifend
                            felis vel.</p>

                    </div>
                    <div>
                        <div class="mb-6">
                            @auth
                                <button
                                    class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                                    style="background-color: #B92090;" type="button">
                                    Buy Ticket
                                </button>
                            </div>
                            <div class="mb-6">
                                <button
                                    class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                                    style="background-color: #B92090;" type="button">
                                    Add to Personal Program
                                </button>
                            @endauth

                            @authguest
                            <a href="/login"
                                class=" bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                                style="background-color: #B92090;">Login to Add to Personal Program</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('main.footer')

</body>

</html>
