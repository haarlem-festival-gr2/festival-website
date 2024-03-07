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
<!-- <script>
    function speakText() {
        const text = document.getElementById('festivalText').innerText;
        const utterance = new SpeechSynthesisUtterance(text);
        speechSynthesis.speak(utterance);
    }-- !>

    <
    body class = "bg-gray-100 font-sans leading-normal tracking-normal" >

    <
    div class = "relative w-full h-screen bg-no-repeat bg-cover"
    style = "background-image: url('/img/history/walky.png');" >
        <
        !--overlay-- >
        <
        div class = "absolute w-full h-full bg-gradient-to-b from-transparent to-gray-900 opacity-75" > < /div>

        <
        !--centered content-- >
        <
        div class =
        "absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center items-center text-center z-10" >
        <
        h1 class = "text-6xl text-white font-bold mb-4" > A stroll through history < /h1> <
    p class = "text-xl text-white mb-8" > Let 's explore Haarlem</p> <
    a href = "#"
    onclick = "scrollToNextSection()"
    class = "bg-yellow-400 text-gray-800 py-2 px-4 border border-gray-800 rounded text-lg font-bold no-underline" >
    Discover Haarlem < /a> < /
    div >

        <
        /div>

        <
        script >
        function scrollToNextSection() {
            var nextSection = document.getElementById('next-section');
            nextSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
</script>

<section id="next-section">
<div class="p-8 relative" style="background-color: #fcc040; text-align: center;">
<h2 class="text-4xl font-bold mb-4">Discover Haarlem through the eyes of a local!</h2>
    <p class="mb-4" id="festivalText">Come and explore Haarlem like a local on our next tour! Discover this charming town known as 'Little Amsterdam.' Walk around the city center without cars, learn about the famous Dutch flower's history, explore the art influence of painter Frans Hals, and find hidden spots loved by locals. Join us for our next tour and experience the historic vibes of 17th-century Haarlem.</p>
    <button onclick="speakText()" type="button" aria-label="Play audio description" style="position: absolute; bottom: 10px; right: 10px; background: none; border: none; font-size: 24px;">
        🔊</button>
</div>
</section>

  <!-- Circles -->
<section class="my-12 mx-4 md:mx-0">
    <div class="flex flex-wrap justify-around">
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <p>Meeting point: <strong>Church of St. Bavo</strong></p>
        </div>
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <p>July: <strong>26th, 27th, 28th, 29th</strong></p>
        </div>
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-clock"></i>
            </div>
            <p>Time: <strong>10:00, 13:00, 16:00</strong></p>
        </div>
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-euro-sign"></i>
            </div>
            <p>Individual price: <strong>17.50 euro</strong>, family price: <strong>60 euro</strong></p>
        </div>
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-users"></i>
            </div>
            <p>Group: <strong>12 people & 1 guide</strong></p>
        </div>
    </div>
</section>


<!-- Video -->
<section class="my-12 flex justify-center items-center">
    <div class="p-5 rounded-lg bg-yellow-400">
        <video class="rounded-lg" width="560" height="315" controls>
            <source src="/video/history/videoHaarlem.mp4" type="video/mp4">
            <source src="video/history/videoHaarlem.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>

    </div>
</section>

<!-- Tour Schedule -->
<section class="my-12 text-center">
    <h2 class="text-3xl text-gray-800 mb-8"><strong>Tour Schedule</strong></h2>
    <div class="flex flex-wrap justify-between gap-4 m-0">
        <div class="p-5 bg-pink-200 rounded-lg shadow-md mx-2 my-4 w-full md:w-1/5">
            <h3 class="text-xl text-gray-800 mb-4"><strong>25th of July</strong> - Thursday</h3>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>10:00 - Session 1</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-2">English tours: 2</p>
                <p class="mt-0">Dutch tours: 2</p>
            </div>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>13:00 - Session 2</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-2">English tours: 2</p>
                <p class="mt-0">Dutch tours: 2</p>
            </div>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>16:00 - Session 3</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-2">English tours: 2</p>
                <p class="mt-0">Dutch tours: 2</p>
            </div>
        </div>


        <div class="p-5 bg-pink-200 rounded-lg shadow-md mx-2 my-4 w-full md:w-1/5">
            <h3 class="text-xl text-gray-800 mb-4"><strong>26th of July</strong> - Friday</h3>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>10:00 - Session 1</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-2">English tours: 1</p>
                <p class="mt-0">Dutch tours: 1</p>
            </div>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>13:00 - Session 2</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-1">English tours: 1</p>
                <p class="mt-0 mb-1">Dutch tours: 1</p>
                <p class="mt-0 mb-1">Chinese tours: 1</p>
            </div>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>16:00 - Session 3</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-2">English tours: 1</p>
                <p class="mt-0">Dutch tours: 1</p>
            </div>
        </div>

        <div class="p-5 bg-pink-200 rounded-lg shadow-md mx-2 my-4 w-full md:w-1/5">
            <h3 class="text-xl text-gray-800 mb-4"><strong>27th of July</strong> - Saturday</h3>
            <div style="background-color: #B92090;" class="p-2 rouFnded-t mb-0">
                <p class="mb-0 text-white"><strong>10:00 - Session 1</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-2">English tours: 2</p>
                <p class="mt-0">Dutch tours: 2</p>
            </div>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>13:00 - Session 2</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-1">English tours: 2</p>
                <p class="mt-0 mb-1">Dutch tours: 2</p>
                <p class="mt-0 mb-1">Chinese tours: 1</p>
            </div>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>16:00 - Session 3</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-1">English tours: 1</p>
                <p class="mt-0 mb-1">Dutch tours: 1</p>
                <p class="mt-0 mb-1">Chinese tours: 1</p>
            </div>
        </div>

        <div class="p-5 bg-pink-200 rounded-lg shadow-md mx-2 my-4 w-full md:w-1/5">
            <h3 class="text-xl text-gray-800 mb-4"><strong>28th of July</strong> - Sunday</h3>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>10:00 - Session 1</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-1">English tours: 2</p>
                <p class="mt-0 mb-1">Dutch tours: 2</p>
                <p class="mt-0 mb-1">Chinese tours: 1</p>
            </div>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>13:00 - Session 2</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-1">English tours: 2</p>
                <p class="mt-0 mb-1">Dutch tours: 2</p>
                <p class="mt-0 mb-1">Chinese tours: 1</p>
            </div>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>16:00 - Session 3</strong></p>
            </div>
            <div class="bg-yellow-400 p-2 rounded-b mb-4">
                <p class="mt-0 mb-1">English tours: 2</p>
                <p class="mt-0 mb-1">Dutch tours: 2</p>
                <p class="mt-0 mb-1">Chinese tours: 1</p>
            </div>
        </div>
</section>


<!-- City Walk -->

<section class="my-12 text-center">
    <div class="flex flex-col md:flex-row md:items-center bg-white shadow-lg rounded-lg overflow-hidden"
        style="background-color: #FCC040;">
        <!-- Image container -->
        <div class="md:flex-shrink-0">
            <img class="h-96 w-full object-cover md:h-auto md:w-96" src="/img/history/walk2.png" alt="City Walk">
        </div>
        <!-- Content container -->
        <div class="p-4 flex-1">
            <!-- Larger title with pink background -->
            <h2 class="text-2xl bg-pink-200 text-black font-semibold py-4 px-10 inline-block rounded mb-4">City Walk
            </h2>
            <p class="text-lg font-medium text-black mb-4">Embark on a captivating journey through Haarlem's with our
                guided tours available in English, Dutch and Chinese at 10:00, 13:00, and 16:00. These tours will take
                you on a fascinating exploration of various sites across Haarlem, offering insights into its rich
                history and culture.</p>
            <p class="text-gray-800 mb-6">With limited spots (12 per tour), ensure your place by reserving your tickets
                in advance. The duration of this walking tour will be approximately 2.5 hours, including a 15-minute
                break with refreshments.</p>
            <!-- Larger button below the text -->
            <div class="text-center md:text-left">
                <button
                    class="text-lg bg-pink-700 hover:bg-pink-800 text-white font-bold py-3 px-6 rounded-full transition-colors duration-200">
                    Buy ticket
                </button>
            </div>
        </div>
    </div>
</section>


<!-- Tickets -->
<section class="my-12 text-center">
    <div class="flex justify-center items-center space-x-8">
        <!-- Individual ticket -->
        <div
            class="bg-yellow-400 w-96 md:w-108 h-44 rounded-tl-3xl rounded-tr-lg rounded-bl-lg rounded-br-3xl relative overflow-hidden shadow-lg">
            <div class="absolute inset-0 px-4 py-4 flex flex-col justify-between">
                <h2 class="text-2xl font-bold font-serif text-center">Individual ticket</h2>
                <div>
                    <span class="text-lg font-light">Price: </span>
                    <span class="text-lg font-bold">€17.50</span>
                </div>
                <div>
                    <span class="text-lg">One drink included</span>
                </div>
            </div>
        </div>

        <!-- Family ticket -->
        <div
            class="bg-yellow-400 w-96 md:w-108 h-44 rounded-tl-lg rounded-tr-3xl rounded-bl-3xl rounded-br-lg relative overflow-hidden shadow-lg">
            <div class="absolute inset-0 px-4 py-4 flex flex-col justify-between">
                <h2 class="text-2xl font-bold font-serif text-center">Family ticket</h2>
                <div>
                    <span class="text-lg font-light">Price: </span>
                    <span class="text-lg font-bold">€60</span>
                    <div class="text-sm font-light">(up to 4 people)</div>
                </div>
                <div>
                    <span class="text-lg">One drink included</span>
                    <div class="text-sm">(per person)</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- meet our guides -->
<div class="bg-grey p-6">
    <!-- Section title -->
    <h2 class="text-3xl font-bold mb-4 text-center">Meet our guides</h2>

    <!-- Description and guides' names -->
    <p class="text-lg mb-4 text-center">
        Get set for a unique city tour in Haarlem with our guides!
        <span class="font-bold">Lisa, Annet,</span> and <span class="font-bold">Jan-Willem</span>
        will be your <span class="font-bold">Dutch-speaking</span> guides, while
        <span class="font-bold">Deirdre, Frederic,</span> and <span class="font-bold">William</span>
        will share stories in <span class="font-bold">English</span>, and
        <span class="font-bold">Kim</span> and <span class="font-bold">Susan</span> will
        bring their Chinese perspective. Explore historic places and lively streets,
        hearing tales in three different languages. It's a multicultural adventure
        right in the heart of the city!
    </p>

    <!-- Important note section -->
    <div
        class="bg-pink-200 p-4 rounded-tl-lg rounded-tr-3xl rounded-bl-3xl rounded-br-lg relative overflow-hidden shadow-lg">
        <h3 class="text-2xl font-bold mb-2 text-center">Important note!</h3>
        <p class="text-lg text-center">
            Due to the nature of this walk participants must be a minimum of
            <span class="font-bold">12 years old</span> and <span class="font-bold">no strollers</span> are allowed.
        </p>
    </div>
</div>

<section>
    <div class="flex items-center justify-center">
        <div class="border-t border-black w-1/4"></div>
        <h2 class="px-4 text-xl font-semibold">During these 2 and a half hours, we cover</h2>
        <div class="border-t border-black w-1/4"></div>
    </div>

    <div class="flex justify-center">
        <section class="my-12 flex justify-center items-start space-x-4">
            <!-- Image container with rounded border similar to the video -->
            <div class="p-5 rounded-lg bg-yellow-400">
                <img src="/img/history/mapWithout.png" alt="Tour Map" class="rounded-lg"
                    style="border: 4px solid #FCC040;">
            </div>

            <!-- List of locations  -->
            <div class="flex-1">
                <ul class="list-none space-y-2">
                    <li class="text-xl"><span class="text-red-500 mr-2">•</span> Church of St. Bavo</li>
                    <li class="text-xl"><span class="text-orange-500 mr-2">•</span> Grote Markt</li>
                    <li class="text-xl"><span class="text-yellow-500 mr-2">•</span> De Hallen</li>
                    <li class="text-xl"><span class="text-green-500 mr-2">•</span> Proveniershof</li>
                    <li class="text-xl"><span class="text-blue-500 mr-2">•</span> Jopenkerk (Break location)</li>
                    <li class="text-xl"><span class="text-indigo-500 mr-2">•</span> Waalse Kerk</li>
                    <li class="text-xl"><span class="text-purple-500 mr-2">•</span> Molen de Adriaan</li>
                    <li class="text-xl"><span class="text-pink-500 mr-2">•</span> Amsterdamse Poort</li>
                    <li class="text-xl"><span class="text-gray-500 mr-2">•</span> Hofje van Bakenes</li>
                </ul>
            </div>
        </section>
    </div>
</section>

<!-- Wheelchair Accessible -->
<section>
    <div
        class="bg-pink-200 p-4 rounded-tl-lg rounded-tr-3xl rounded-bl-3xl rounded-br-lg relative overflow-hidden shadow-lg">
        <h3 class="text-2xl font-bold mb-2 text-center">Are you using a wheelchair?</h3>
        <p class="text-lg text-center">
            We've got you covered! Several of our featured venues are wheelchair accessible, ensuring
            everyone can explore Haarlem comfortably.
        </p>

        <p class="font-semibold text-center">
            Visit
            <span class="text-blue-600">Church of St. Bavo</span>,
            <span class="text-blue-600">De Hallen</span>,
            <span class="text-blue-600">Proveniershof</span>,
            <span class="text-blue-600">Jopenkerk</span>,
            <span class="text-blue-600">Waalse Kerk Haarlem</span>,
            <span class="text-blue-600">Molen de Adriaan</span>, and
            <span class="text-blue-600">Amsterdamse Poort</span> hassle-free.
        </p>
    </div>
    </div>


    <div class="text-blue-600">
        <!-- SVG or image icon of a wheelchair -->
        <!-- <svg>...</svg> or <img src="path_to_wheelchair_icon.png" alt="Wheelchair Accessible"> -->
    </div>
    </div>
</section>


<section>

    <div class="flex justify-center">
        <section class="my-12 flex justify-center items-start space-x-4">
            <!-- Image container with rounded border -->
            <div class="p-5 rounded-lg bg-yellow-400">
                <img src="/img/history/starting-point.png" alt="Starting Point" class="rounded-lg"
                    style="border: 4px solid #FCC040;">
            </div>
        </section>
    </div>

    <!-- Location name and note -->
    <div class="flex justify-center mt-2">
        <div class="text-center">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-purple-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <!-- Pin icon SVG path goes here -->
                </svg>
                <h3 class="ml-2 text-lg font-bold">Church of St. Bavo</h3>
            </div>
            <p class="text-sm mt-1">Note: A giant flag will mark the exact starting location.</p>
        </div>
    </div>

</section>


<!-- Audio Guide -->
<section style="background-color: #FCC040;" class="p-6 text-center">
    <h2 class="text-2xl font-bold mb-6">Have you attended one of our tours and wish to access the audio guide?</h2>

    <div class="flex flex-col md:flex-row justify-center items-stretch md:space-x-4">
        <!-- Form Section -->
        <div style="background-color: #FDC9EF;"
            class="flex-grow p-4 rounded-lg md:basis-1/2 max-w-2xl mx-auto mb-4 md:mb-0">
            <form action="#" method="POST" class="flex flex-col justify-between h-full">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Enter your name*</label>
                    <input type="text" id="name" name="name" placeholder="Tom Johnson"
                        class="mt-1 p-2 w-full rounded-md border-gray-300 shadow-sm mb-4">
                </div>
                <div>
                    <label for="ticket-number" class="block text-sm font-medium text-gray-700">Enter your ticket
                        number*</label>
                    <input type="text" id="ticket-number" name="ticket-number" placeholder="692480"
                        class="mt-1 p-2 w-full rounded-md border-gray-300 shadow-sm mb-4">
                </div>
                <button type="submit" style="background-color: #B92090;"
                    class="w-full rounded-md p-2 text-white font-semibold hover:bg-purple-800 mt-4">Send</button>
            </form>
        </div>


        <!-- Image Section -->
        <div style="background-color: #B92090;" class="flex-grow p-2 rounded-lg md:basis-1/2 max-w-md mx-auto">
            <img src="/img/history/audio-guide.png" alt="Descriptive Alt Text"
                class="h-full w-full object-cover rounded-lg">
        </div>
    </div>
</section>

@extends('main.footer')

</html>
