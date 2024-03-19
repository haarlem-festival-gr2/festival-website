<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Molen De Adriaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-Q85xgzayNwtT9vIkzYuhCe9zgbjXJtexzAUcSUcvz6SaNEcYGTl4PvaYT2RtN1dfqZUhz7tCOBbXJkWNHNlxuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<div class="mb-6 relative w-full h-screen bg-no-repeat bg-cover"
    style="background-image: url('/img/history/molen-cop.png');">
    <!-- Overlay -->
    <div class="absolute w-full h-full bg-gradient-to-b from-transparent to-gray-900 opacity-75"></div>

    <!-- Centered content -->
    <div class="absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center items-center text-center z-10">
        <h1 class="text-6xl text-white font-bold mb-4">Molen De Adriaan</h1>
    </div>
</div>

<body>
    <section>
        <div class="flex items-center justify-center">
            <h1 class="px-6 text-3xl font-semibold">Where are we?</h1>
        </div>

        <div class="flex justify-center">
            <section class="my-12 flex justify-center items-start space-x-4">
                <!-- Image container with rounded border -->
                <div class="p-5 rounded-lg bg-yellow-400">
                    <img src="/img/history/mapWithout.png" alt="Molen De Adriaan Map" class="rounded-lg"
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
                        <li class="text-xl"><span class="text-purple-500 mr-2">•</span>
                            <span class="inline-block bg-yellow-400 px-2 py-1 rounded-md">
                                Molen De Adriaan
                            </span>
                        </li>
                        <li class="text-xl"><span class="text-pink-500 mr-2">•</span> Amsterdamse Poort</li>
                        <li class="text-xl"><span class="text-gray-500 mr-2">•</span> Hofje van Bakenes</li>
                    </ul>
                </div>
            </section>
        </div>
    </section>

    <section id="Windmill Story" class="bg-pink-200 w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Haarlem's Tower-Topping Windmill Story</h2>
            <div class="flex flex-col md:flex-row">
                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        In <strong>1778, Adriaan de Boois</strong> bought an ancient tower in Haarlem. The city gave him
                        the go-ahead to
                        build a windmill on top, and he made it happen! This windmill rose high on <strong>the old
                            tower</strong>,
                        catching
                        plenty of wind by the Spaarne River.

                        The <strong>De Adriaan windmill</strong> began its job on <strong>May 19, 1779</strong>. Adriaan
                        used it to crush something called
                        tuff into trass. Trass was pretty neat – it helped keep walls waterproof when mixed into
                        building
                        mortar.
                    </p>
                </div>

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src="/img/history/windmill-story.png" alt="Old Windmill" class="w-4/5 h-auto rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="Tobacco Story" class="bg-white w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Tobacco Story</h2>
            <div class="flex flex-col md:flex-row">

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src="/img/history/snuff.png" alt="Mill Interior" class="w-4/5 h-auto rounded">
                    </div>
                </div>

                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        At first, the mill ground tuff, shells, and oak bark. Then, in <strong>1802</strong>, a
                        <strong>tobacco
                            merchant</strong> bought
                        it and turned it into a tobacco production spot. By <strong>1865</strong>, new owners switched
                        things up again.
                        They transformed the mill into one that used both wind and steam power to grind grain.

                        But by <strong>1925</strong>, there was a problem. The mill faced too much competition from
                        modern industry and
                        <strong>wasn't making enough money</strong>. They wanted to <strong>demolish</strong> it because
                        it wasn't
                        profitable anymore.

                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="Fire" class="bg-pink-200 w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Fire!</h2>
            <div class="flex flex-col md:flex-row">
                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        On a Saturday afternoon in <strong>April 1932</strong>, there was chaos in Haarlem — <strong>the
                            Adriaan</strong>
                        was on fire!
                        Despite the brigade's swift efforts, there wasn't much left of the Adriaan afterward, just a
                        heap of <strong>burnt stones</strong> and beams.

                        The next day, the people of Haarlem started collecting money to <strong>build a new
                            Adriaan</strong>. But it was
                        clear they needed a lot more than what they had gathered.
                    </p>
                </div>

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src="/img/history/windmill-story.png" alt="Old Windmill" class="w-4/5 h-auto rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ImagesAboutTheFire">
        <div class="flex justify-around items-start bg-gray-100 p-4">
            <!-- Before Fire Section -->
            <div class="flex flex-col items-center">
                <h2 class="text-xl font-bold mb-4">Before fire</h2>
                <div style="background-color: #B92090;" class="p-6 rounded-xl w-120">
                    <img class="w-full h-72 object-cover rounded-lg" src="/img/history/before-fire.jpg"
                        alt="Before fire">
                </div>
            </div>

            <!-- After Fire Section -->
            <div class="flex flex-col items-center">
                <h2 class="text-xl font-bold mb-4">After fire</h2>
                <div style="background-color: #B92090;" class="p-6 rounded-xl w-120">
                    <img class="w-full h-72 object-cover rounded-lg" src="/img/history/after-fire.png"
                        alt="After fire">
                </div>
            </div>
        </div>
    </section>


    <section id="Reconstruction" class="bg-yellow-400 w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Reconstruction</h2>
            <div class="flex flex-col md:flex-row">

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src="/img/history/reconstruction.png" alt="Mill Interior" class="w-4/5 h-auto rounded">
                    </div>
                </div>

                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        In <strong>1963</strong>, Haarlem took over the land where the mill used to be and promised to
                        <strong>rebuild</strong> it. But as
                        years went by, that promise was forgotten. Then, in <strong>1991</strong>, a group called
                        <strong>the
                            Molen De Adriaan
                            Foundation</strong> was formed to bring the mill back.

                        At first, Haarlem wasn't really into helping out. But in <strong>1996</strong>, they found the
                        old promise in
                        their archives. That changed everything—they fully backed the project and worked together to
                        <strong>make it happen</strong>, giving it the push it needed to <strong>succeed</strong>.

                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="Museum Mill" class="bg-white w-screen">
        <div class="max-w-6xl mx-auto p-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Museum Mill</h2>
            <div class="flex flex-col md:flex-row">
                <!-- Left Section (Text) -->
                <div class="md:w-2/3 p-6 rounded-lg mb-4">
                    <p class="text-xl text-gray-700">
                        On <strong>April 23, 2002</strong>, after seventy long years since the fire, Haarlem welcomed
                        back its beloved
                        Adriaan. Now restored, it serves as a venue for <strong>meetings</strong> and
                        <strong>weddings</strong>, and most importantly, as
                        a <strong>museum</strong> showcasing its rich history.

                        Inside, visitors find a reception area with a <strong>souvenir shop</strong>, two floors
                        displaying <strong>stunning mill
                            models</strong>, and atop it all, a functioning <strong>mill</strong>.

                        Constructed in <strong>2002</strong>, it's no imitation. The Adriaan operates authentically,
                        just like Dutch
                        windmills have for centuries, keeping the <strong>tradition alive</strong> and
                        <strong>spinning</strong>.
                    </p>
                </div>

                <!-- Right Section (Image) -->
                <div class="md:w-1/2 flex justify-end">
                    <div class="mt-3">
                        <img src="/img/history/museum-mill.png" alt="Museum Mill" class="w-4/5 h-auto rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="LocationAndContact" class="bg-yellow-300 w-screen">
        <div class="bg-yellow-300 p-4">
            <div class="flex justify-center flex-col"> <!-- Changed flex direction to column -->
                <div class="text-center"> <!-- Centering the "Location and contact" heading -->
                    <h2 class="font-bold text-lg mb-2">Location and contact</h2>
                </div>
                <div class="flex justify-center">
                    <!-- Location Section -->
                    <div class="flex flex-col mr-4">
                        <div>
                            <h3 class="font-semibold">Address</h3>
                            <ul class="list-disc ml-4">
                                <li>Papentorenvest 1a</li>
                                <li>2011 AV Haarlem</li>
                                <li>The Netherlands</li>
                            </ul>
                            <button class="text-indigo-600 hover:text-indigo-800">SHOW ON MAP</button>
                        </div>
                    </div>

                    <!-- Contact Section -->
                    <div class="flex flex-col items-start">
                        <div>
                            <h3 class="font-semibold">Contact</h3>
                            <ul class="list-disc ml-4">
                                <li>023 545 0259</li>
                                <li><a href="mailto:info@molenadriaan.nl" target="_blank">info@molenadriaan.nl</a>
                                </li>
                                <li><a href="http://www.molenadriaan.nl/"
                                        target="_blank">http://www.molenadriaan.nl/</a></li>
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
