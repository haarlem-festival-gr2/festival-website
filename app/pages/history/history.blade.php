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


@include('main.navbar')

<div class="relative w-full h-screen bg-no-repeat bg-cover"
    style="background-image: url('{{ $homeInfo->HeaderImage }}');">
</div>
<!-- Overlay -->
{{-- <div class="absolute w-full h-full bg-gradient-to-b from-transparent to-gray-900 opacity-75"></div> --}}
<div class="absolute w-full h-full"></div>

<!-- Centered content -->
<div class="absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center items-center text-center z-10">
    <h1 class="text-6xl text-white font-bold mb-4">{{ $homeInfo->Title }}</h1>
    <p class="text-xl text-white mb-8">{{ $homeInfo->SubTitle }}</p>
    <a href="#next-section" onclick="scrollToNextSection()"
        class="bg-yellow-400 text-gray-800 py-2 px-4 border border-gray-800 rounded text-lg font-bold no-underline">Discover
        Haarlem</a>
</div>
</div>

<script>
    function scrollToNextSection() {
        var nextSection = document.getElementById('next-section');
        nextSection.scrollIntoView({
            behavior: 'smooth'
        });
    }
</script>

<section id="next-section">
    <div class="p-8 relative" style="background-color: #fcc040; text-align: center;">
        <h2 class="text-4xl font-bold mb-4">{{ $homeInfo->DiscoverTitle }}</h2>
        <p class="mb-4" id="festivalText">{{ $homeInfo->DiscoverText }}</p>

        <button onclick="speakText()" type="button" aria-label="Play audio description"
            style="position: absolute; bottom: 10px; right: 10px; background: none; border: none; font-size: 24px;">🔊</button>
    </div>

    <script>
        function speakText() {
            let synth = window.speechSynthesis;
            let textToRead = document.getElementById("festivalText").textContent;
            let utterThis = new SpeechSynthesisUtterance(textToRead);

            utterThis.lang = "en-US";
            synth.speak(utterThis);
        }
    </script>
</section>


<!-- Circles -->
<section class="my-12 mx-4 md:mx-0">
    <div class="flex flex-wrap justify-around">
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <p><strong>{{ $homeInfo->Location }}</strong></p>
        </div>
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <p> <strong>{{ $homeInfo->Dates }}</strong></p>
        </div>
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-clock"></i>
            </div>
            <p><strong>{{ $homeInfo->Times }}</strong></p>
        </div>
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-euro-sign"></i>
            </div>
            <p>Individual price: <strong>{{ $homeInfo->IndividualPrice }} euro</strong>, family price:
                <strong>{{ $homeInfo->FamilyPrice }} euro</strong>
            </p>
        </div>
        <div class="text-center p-4">
            <div class="w-24 h-24 flex items-center justify-center rounded-full text-white text-4xl mb-4 bg-yellow-400">
                <i class="fas fa-users"></i>
            </div>
            <p>Group: <strong>{{ $homeInfo->GroupInfo }}</strong></p>
        </div>
    </div>
</section>


<!-- Video -->
<section class="my-12 flex justify-center items-center">
    <div class="p-5 rounded-lg bg-yellow-400">
        <video class="rounded-lg" width="560" height="315" controls>
            <source src={{ $homeInfo->VideoMp4 }} type="video/mp4">
            <source src={{ $homeInfo->VideoWebm }} type="video/webm">
            Your browser does not support the video tag.
        </video>

    </div>
</section>

<!-- Tour Schedule -->
<section class="my-12 text-center">
    <h2 class="text-3xl text-gray-800 mb-8"><strong>Tour Schedule</strong></h2>
    <div class="flex flex-wrap justify-between gap-4 m-0">
        <div class="p-5 bg-pink-200 rounded-lg shadow-md mx-2 my-4 w-full md:w-1/5">

            {{-- Day 1 --}}
            <h3 class="text-xl text-gray-800 mb-4"><strong>{{ $firstTicket[0]->StartDateTime }}</strong> - Thursday
            </h3>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $firstTicket[0]->StartDateTime }} -
                        {{ $firstTicket[0]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $firstTicket])

            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $firstTicket[4]->StartDateTime }} -
                        {{ $firstTicket[4]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $firstTicket])



            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $firstTicket[8]->StartDateTime }} -
                        {{ $firstTicket[8]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $firstTicket])
        </div>

        {{-- Day 2 --}}

        <div class="p-5 bg-pink-200 rounded-lg shadow-md mx-2 my-4 w-full md:w-1/5">
            <h3 class="text-xl text-gray-800 mb-4"><strong>{{ $secondTicketDay2[0]->StartDateTime }}</strong> - Friday
            </h3>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $secondTicketDay2[0]->StartDateTime }} -
                        {{ $secondTicketDay2[0]->Name }}</strong></p>
            </div>

            @include('history.session_info_tours', ['tickets' => $secondTicketDay2])


            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $secondTicketDay2[4]->StartDateTime }} -
                        {{ $secondTicketDay2[4]->Name }}</strong></p>
            </div>

            @include('history.session_info_tours', ['tickets' => $secondTicketDay2])


            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $secondTicketDay2[6]->StartDateTime }} -
                        {{ $secondTicketDay2[6]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $secondTicketDay2])


        </div>

        {{-- Day 3 --}}

        <div class="p-5 bg-pink-200 rounded-lg shadow-md mx-2 my-4 w-full md:w-1/5">
            <h3 class="text-xl text-gray-800 mb-4"><strong>{{ $thirdTicketDay3[0]->StartDateTime }}</strong> - Saturday
            </h3>
            <div style="background-color: #B92090;" class="p-2 rouFnded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $thirdTicketDay3[0]->StartDateTime }} -
                        {{ $thirdTicketDay3[0]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $thirdTicketDay3])

            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $thirdTicketDay3[4]->StartDateTime }} -
                        {{ $thirdTicketDay3[4]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $thirdTicketDay3])

            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $thirdTicketDay3[10]->StartDateTime }} -
                        {{ $thirdTicketDay3[10]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $thirdTicketDay3])


        </div>

        {{-- Day 4 --}}
        <div class="p-5 bg-pink-200 rounded-lg shadow-md mx-2 my-4 w-full md:w-1/5">
            <h3 class="text-xl text-gray-800 mb-4"><strong>{{ $fourthTicketDay4[0]->StartDateTime }}</strong> - Sunday
            </h3>
            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $fourthTicketDay4[0]->StartDateTime }} -
                        {{ $fourthTicketDay4[0]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $fourthTicketDay4])

            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $fourthTicketDay4[6]->StartDateTime }} -
                        {{ $fourthTicketDay4[6]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $fourthTicketDay4])

            <div style="background-color: #B92090;" class="p-2 rounded-t mb-0">
                <p class="mb-0 text-white"><strong>{{ $fourthTicketDay4[12]->StartDateTime }} -
                        {{ $fourthTicketDay4[12]->Name }}</strong></p>
            </div>
            @include('history.session_info_tours', ['tickets' => $fourthTicketDay4])

        </div>
</section>


<!-- City Walk -->

<section class="my-12 text-center">
    <div class="flex flex-col md:flex-row md:items-center bg-white shadow-lg rounded-lg overflow-hidden"
        style="background-color: #FCC040;">
        <!-- Image container -->
        <div class="md:flex-shrink-0">
            <img class="h-96 w-full object-cover md:h-auto md:w-96" src={{ $homeInfo->CityWalkImage }}
                alt={{ $homeInfo->CityWalkImageAlt }}>
        </div>
        <!-- Content container -->
        <div class="p-4 flex-1">
            <!-- Larger title with pink background -->
            <h2 class="text-2xl bg-pink-200 text-black font-semibold py-4 px-10 inline-block rounded mb-4">
                {{ $homeInfo->CityWalkTitle }}
            </h2>
            <p class="text-lg font-medium text-black mb-4">{{ $homeInfo->CityWalkText }}
                {{-- <p class="text-gray-800 mb-6">With limited spots (12 per tour), ensure your place by reserving your tickets
                in advance. The duration of this walking tour will be approximately 2.5 hours, including a 15-minute
                break with refreshments.</p> --}}


            <div class="text-center md:text-left">
                <button id="buyTicketBtn" {{-- onclick="window.location.href = '/historyTicket' --}}
                    class="text-lg bg-pink-700
                    hover:bg-pink-800 text-white font-bold py-3 px-6 rounded-full transition-colors duration-200">
                    Buy ticket
                </button>
            </div>

            <script>
                document.getElementById("buyTicketBtn").addEventListener("click", function() {
                    window.location.href = 'historyTicket'; // Redirect to historyTicket page
                });
            </script>

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
                    <span class="text-lg font-bold">€{{ $homeInfo->IndividualPrice }}</span>
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
                    <span class="text-lg font-bold">€{{ $homeInfo->FamilyPrice }}</span>
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
    <h2 class="text-3xl font-bold mb-4 text-center">{{ $homeInfo->GuidesTitle }}</h2>

    <!-- Description and guides' names -->
    <p class="text-lg mb-4 text-center"> {{ $homeInfo->GuidesText }}

        {{-- Get set for a unique city tour in Haarlem with our guides!
        <span class="font-bold">Lisa, Annet,</span> and <span class="font-bold">Jan-Willem</span>
        will be your <span class="font-bold">Dutch-speaking</span> guides, while
        <span class="font-bold">Deirdre, Frederic,</span> and <span class="font-bold">William</span>
        will share stories in <span class="font-bold">English</span>, and
        <span class="font-bold">Kim</span> and <span class="font-bold">Susan</span> will
        bring their Chinese perspective. Explore historic places and lively streets,
        hearing tales in three different languages. It's a multicultural adventure
        right in the heart of the city! --}}
    </p>

    <!-- Important note section -->
    <div
        class="bg-pink-200 p-4 rounded-tl-lg rounded-tr-3xl rounded-bl-3xl rounded-br-lg relative overflow-hidden shadow-lg">
        <h3 class="text-2xl font-bold mb-2 text-center">{{ $homeInfo->NoteTitle }}</h3>
        <p class="text-lg text-center">
            {{ $homeInfo->NoteText }} {{-- <span class="font-bold">12 years old</span> and <span class="font-bold">no strollers</span> are allowed. --}}
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
                <img src={{ $homeInfo->MapImage }} alt={{ $homeInfo->MapAlt }} class="rounded-lg"
                    style="border: 4px solid #FCC040;">
            </div>

            <!-- List of locations  -->
            <div class="flex-1">
                <ul>
                    @foreach ($locations as $location)
                        <li>{{ $location->Name }}</li>
                    @endforeach
            </div>
        </section>
    </div>
</section>

<!-- Wheelchair Accessible -->
<section>
    <div
        class="bg-pink-200 p-4 rounded-tl-lg rounded-tr-3xl rounded-bl-3xl rounded-br-lg relative overflow-hidden shadow-lg">
        <h3 class="text-2xl font-bold mb-2 text-center">{{ $homeInfo->WheelchairTitle }}</h3>
        <p class="text-lg text-center">
            {{ $homeInfo->WheelchairText }}
        </p>

        {{-- <p class="font-semibold text-center">
            Visit
            <span class="text-blue-600">Church of St. Bavo</span>,
            <span class="text-blue-600">De Hallen</span>,
            <span class="text-blue-600">Proveniershof</span>,
            <span class="text-blue-600">Jopenkerk</span>,
            <span class="text-blue-600">Waalse Kerk Haarlem</span>,
            <span class="text-blue-600">Molen de Adriaan</span>, and
            <span class="text-blue-600">Amsterdamse Poort</span> hassle-free.
        </p> --}}
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
                <img src={{ $homeInfo->StartLocationImage }} alt={{ $homeInfo->StartLocationAlt }} class="rounded-lg"
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
                <h3 class="ml-2 text-lg font-bold">{{ $homeInfo->StartLocationText }}</h3>
                {{-- </div>
            <p class="text-sm mt-1">Note: A giant flag will mark the exact starting location.</p>
        </div> --}}
            </div>

</section>


<!-- Audio Guide -->
<section style="background-color: #FCC040;" class="p-6 text-center">
    <h2 class="text-2xl font-bold mb-6">{{ $homeInfo->ContactTitle }}</h2>

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
    </form>
    </div>
</section>

@extends('main.footer')

</html>
