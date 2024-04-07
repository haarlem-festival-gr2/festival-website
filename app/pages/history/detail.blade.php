<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Hallen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-Q85xgzayNwtT9vIkzYuhCe9zgbjXJtexzAUcSUcvz6SaNEcYGTl4PvaYT2RtN1dfqZUhz7tCOBbXJkWNHNlxuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<div class="mb-6 relative w-full h-screen bg-no-repeat bg-cover"
    style="background-image: url('{{ $detailPage->HeaderImage }}');">
    <!-- Overlay -->
    <div class="absolute w-full h-full bg-gradient-to-b from-transparent to-gray-900 opacity-75"></div>

    <!-- Centered content -->
    <div class="absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center items-center text-center z-10">
        <h1 class="text-6xl text-white font-bold mb-4">{{ $name }}</h1>
    </div>
</div>

<body>
    <section>
        <div class="flex items-center justify-center">
            <h1 class="px-6 text-3xl font-semibold">{{ $detailPage->WhereAreWeTitle }}</h1>
        </div>

        <div class="flex justify-center">
            <section class="my-12 flex justify-center items-start space-x-4">
                <!-- Image container with rounded border -->
                {{-- <div class="p-5 rounded-lg bg-yellow-400">
                    <img src="/img/history/mapWithout.png" alt="Molen De Adriaan Map" class="rounded-lg"
                        style="border: 4px solid #FCC040;">
                </div> --}}

                <!-- List of locations  -->
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
        </div>
    </section>


    <section id="Windmill Story" class="bg-pink-200 w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">{{ $stories[0]->Title }}</h2>
            <div class="flex flex-col md:flex-row">
                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        {{ $stories[0]->Description }}
                    </p>
                </div>

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src={{ $stories[0]->ImagePath }} alt={{ $stories[0]->ImageAlt }}
                            class="w-4/5 h-auto rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="Tobacco Story" class="bg-white w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">{{ $stories[1]->Title }}</h2>
            <div class="flex flex-col md:flex-row">

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src={{ $stories[1]->ImagePath }} alt={{ $stories[1]->ImageAlt }}
                            class="w-4/5 h-auto rounded">
                    </div>
                </div>

                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        {{ $stories[1]->Description }}
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="Fire" class="bg-pink-200 w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">{{ $stories[2]->Title }}!</h2>
            <div class="flex flex-col md:flex-row">
                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        {{ $stories[2]->Description }}
                    </p>
                </div>

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src={{ $stories[2]->ImagePath }} alt={{ $stories[2]->ImageAlt }}
                            class="w-4/5 h-auto rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ImagesAboutTheFire">
        <div class="flex justify-around items-start bg-gray-100 p-4">
            <!-- Before Fire Section -->
            <div class="flex flex-col items-center">
                <h2 class="text-xl font-bold mb-4">{{ $detailPage->ImageBeforeTitle }}</h2>
                <div style="background-color: #B92090;" class="p-6 rounded-xl w-120">
                    <img class="w-full h-72 object-cover rounded-lg" src={{ $detailPage->ImageBefore }}
                        alt={{ $detailPage->ImageBeforeAlt }}>
                </div>
            </div>

            <!-- After Fire Section -->
            <div class="flex flex-col items-center">
                <h2 class="text-xl font-bold mb-4">{{ $detailPage->ImageAfterTitle }}</h2>
                <div style="background-color: #B92090;" class="p-6 rounded-xl w-120">
                    <img class="w-full h-72 object-cover rounded-lg" src={{ $detailPage->ImageAfter }}
                        alt={{ $detailPage->ImageAfterAlt }}>
                </div>
            </div>
        </div>
    </section>


    <section id="Reconstruction" class="bg-yellow-400 w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">{{ $stories[3]->Title }}</h2>
            <div class="flex flex-col md:flex-row">

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src={{ $stories[3]->ImagePath }} alt={{ $stories[3]->ImageAlt }}
                            class="w-4/5 h-auto rounded">
                    </div>
                </div>

                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        {{ $stories[3]->Description }}
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="Museum Mill" class="bg-white w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">{{ $stories[4]->Title }}</h2>
            <div class="flex flex-col md:flex-row">
                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        {{ $stories[4]->Description }}
                    </p>
                </div>

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src={{ $stories[4]->ImagePath }} alt={{ $stories[4]->ImageAlt }}
                            class="w-4/5 h-auto rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="LocationAndContact" class="bg-yellow-300 w-screen">
        <div class="bg-yellow-300 p-4">
            <div class="flex justify-center flex-col">
                <div class="text-center">
                    <h2 class="font-bold text-lg mb-2">Location and contact</h2>
                </div>
                <div class="flex justify-center">
                    <!-- Location Section -->
                    <div class="flex flex-col mr-4">
                        <div>
                            <h3 class="font-semibold">Address</h3>
                            <ul class="list-disc ml-4">
                                <li>{{ $detailPage->Address }}</li>

                            </ul>
                            <button class="text-indigo-600 hover:text-indigo-800">SHOW ON MAP</button>
                        </div>
                    </div>

                    <!-- Contact Section -->
                    <div class="flex flex-col items-start">
                        <div>
                            <h3 class="font-semibold">Contact</h3>
                            <ul class="list-disc ml-4">
                                <li>{{ $detailPage->PhoneNumber }}</li>
                                <li><a href="mailto:info@molenadriaan.nl"
                                        target="_blank">{{ $detailPage->Email }}</a>
                                </li>
                                <li><a href="http://www.molenadriaan.nl/"
                                        target="_blank">{{ $detailPage->WebsiteAddress }}</a></li>
                            </ul>
                        </div>
                        <button class="text-indigo-600 hover:text-indigo-800">EMAIL THIS LOCATION</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @extends('main.footer')

    </section>


    </div>
    </section>

</body>

</html>
