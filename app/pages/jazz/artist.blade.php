<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Artist</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/script/jazzScript.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="font-montserrat">
<div class="relative w-full">
    @if ($artist->getHeaderImg())
        <img src="{{ $artist->getHeaderImg() }}" alt="{{ $artist->getArtistName() }}" class="w-full"/>
    @else
        <p class="text-gray-500">Header Image</p>
    @endif

    <div class="absolute inset-0 flex flex-col justify-center items-center p-8 text-center text-white">
        <h1 class="text-7xl font-medium mb-2 font-noto-serif uppercase">
            {{ $artist->getArtistName() }}
        </h1>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-2">
    <div class="flex flex-col bg-[#FCC040] p-8 m-10">
        <div class="text-left mx-auto">
            @php
                $bioPart1 = 'Some bio';
                $bioPart2 = 'Some bio';
                if($artist->getBio()){
                    $words = explode(' ', $artist->getBio());
                    $wordsPerPart = ceil(count($words) / 2);
                    $bioPart1 = implode(' ', array_slice($words, 0, $wordsPerPart));
                    $bioPart2 = implode(' ', array_slice($words, $wordsPerPart));
                }
            @endphp
                <p class="mt-4 leading-relaxed">
                    {{ $bioPart1 }}
                </p>
        </div>
    </div>
    <div class="p-6 m-4 overflow-hidden text-center">
        @if($artist->getArtistImg1())
            <img src="{{ $artist->getArtistImg1() }}" alt="{{ $artist->getArtistName() }}"
                 class="object-contain max-h-80 mx-auto"/>
        @else
            <p class="text-gray-500">Image</p>
        @endif
    </div>
    <div class="p-6 m-4 overflow-hidden text-center">
        @if($artist->getArtistImg2())
            <img src="{{ $artist->getArtistImg2() }}" alt="{{ $artist->getArtistName() }}"
                 class="object-contain max-h-80 mx-auto"/>
        @else
            <p class="text-gray-500">Image</p>
        @endif
    </div>

    <div class="flex flex-col p-8 m-10 bg-[#FCC040]">
        <div class="text-left mx-auto overflow-hidden">
            <p class="mt-4 leading-relaxed">
                {{ $bioPart2 }}
            </p>
        </div>
    </div>
</div>

<div class="text-center py-6">
    <h2 class="text-4xl font-noto-serif">
        Discover albums of {{ $artist->getArtistName() }}!
    </h2>
</div>
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($albums as $album)
            <div class="p-4">
                <div class="p-4 text-center bg-pink-200 rounded-lg overflow-hidden cursor-pointer block">
                    <iframe style="border-radius: 12px"
                            src="https://open.spotify.com/embed/album/{{ $album->getSpotifyID() }}?utm_source=generator"
                            width="100%" height="352" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy">
                    </iframe>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="text-center py-6">
    <h2 class="text-4xl font-noto-serif">
        Discover most popular songs of {{ $artist->getArtistName() }}!
    </h2>
</div>
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($songs as $song)
            <div class="p-4">
                <div class="text-center mb-4 md:mb-0">
                    <div class="p-4 text-center overflow-hidden cursor-pointer block">
                        <iframe style="border-radius: 12px"
                                src="https://open.spotify.com/embed/track/{{ $song->getSpotifyID() }}?utm_source=generator"
                                width="100%" height="352" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@foreach ($events as $event)
    <div class="text-center">
        <div class="flex flex-col bg-pink-200 items-center p-8 m-6">
            <p>
                Come to {{ $event['venue']->getVenueName() }}
                on {{ date('j F', strtotime($event['performance']->getStartDateTime())) }}
                to enjoy {{ $artist->getArtistName() }}'s music!<br/>
                {{ date('H:i', strtotime($event['performance']->getStartDateTime())) }}
                - {{ date('H:i', strtotime($event['performance']->getEndDateTime())) }}
                @if (trim($event['performance']->getDetails()) !== '')
                    | {{ $event['performance']->getDetails() }}
                @endif
                @if ($event['performance']->getPrice() != '0.00')
                    - € {{ number_format($event['performance']->getPrice(), 2) }}
                @else
                    - For free!
                @endif
            </p>
            @if ($event['performance']->getPrice() != '0.00')
                <div class="mt-4 flex justify-center w-full">
                    <button
                            class="px-3 py-1.5 rounded-md font-semibold uppercase cursor-pointer text-xs w-48 bg-yellow-400 text-black"
                            onclick="addTicketToProgram(this)"
                            data-default-text="Add a ticket to personal program"
                            data-active-text="Ticket added to personal program"
                            data-default-class="bg-yellow-400"
                            data-active-class="bg-green-500"
                            {{ $event['performance']->getAvailableTickets() < $event['performance']->getTotalTickets() * 0.1 ? 'disabled' : '' }}>
                        Add a ticket to personal program
                    </button>
                </div>
            @endif
        </div>
    </div>
@endforeach



</body>
</html>
