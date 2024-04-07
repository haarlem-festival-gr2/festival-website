<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $artist->Name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/script/jazzScript.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="font-montserrat">

@include('main.navbar')
<!-- header-->
<div class="relative w-full">
    @if ($artist->HeaderImg)
        <img src="{{ $artist->HeaderImg }}" alt="{{ $artist->Name }}" class="w-full"/>
    @else
        <!-- remove?-->
        <p class="text-gray-500">Header Image</p>
    @endif

    <div class="absolute inset-0 flex flex-col justify-center items-center p-8 text-center text-white">
        <h1 class="text-7xl font-medium mb-2 font-noto-serif uppercase">
            {{ $artist->Name }}
        </h1>
    </div>
</div>

<!-- bio with img-->
<div class="grid grid-cols-1 md:grid-cols-2 gap-2">
    <div class="flex flex-col bg-[#FCC040] p-8 m-10">
        <div class="text-left mx-auto">
            @php
                $bioPart1 = 'Some bio';
                $bioPart2 = 'Some bio';
                if($artist->Bio){
                    $words = explode(' ', $artist->Bio);
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
        @if($artist->ArtistImg1)
            <img src="{{ $artist->ArtistImg1 }}" alt="{{ $artist->Name }}"
                 class="object-contain max-h-80 mx-auto"/>
        @else
            <p class="text-gray-500">Image</p>
        @endif
    </div>
    <div class="p-6 m-4 overflow-hidden text-center">
        @if($artist->ArtistImg2)
            <img src="{{ $artist->ArtistImg2 }}" alt="{{ $artist->Name }}"
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

<!-- albums-->
<div class="text-center py-6">
    <h2 class="text-4xl font-noto-serif">
        Discover albums of {{ $artist->Name }}!
    </h2>
</div>
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($artist->Albums as $album)
            <div class="p-4">
                <div class="p-4 text-center bg-pink-200 rounded-lg overflow-hidden cursor-pointer block">
                    <iframe style="border-radius: 12px"
                            src="https://open.spotify.com/embed/album/{{ $album }}?utm_source=generator"
                            width="100%" height="352" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy">
                    </iframe>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- songs-->
<div class="text-center py-6">
    <h2 class="text-4xl font-noto-serif">
        Discover most popular songs of {{ $artist->Name }}!
    </h2>
</div>
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($artist->Songs as $song)
            <div class="p-4">
                <div class="text-center mb-4 md:mb-0">
                    <div class="p-4 text-center overflow-hidden cursor-pointer block">
                        <iframe style="border-radius: 12px"
                                src="https://open.spotify.com/embed/track/{{ $song }}?utm_source=generator"
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

<!-- performances and btn-->
@foreach ($performances as $performance)
    <div class="text-center">
        <div class="flex flex-col bg-pink-200 items-center p-8 m-6">
            <p>
                Come to {{ $performance->Day->Venue->Name }}
                on {{ date('j F', strtotime($performance->StartDateTime)) }}
                to enjoy {{ $artist->Name }}'s music!<br/>
                {{ date('H:i', strtotime($performance->StartDateTime)) }}
                - {{ date('H:i', strtotime($performance->EndDateTime)) }}
                @if (trim($performance->Details) !== '')
                    | {{ $performance->Details }}
                @endif
                @if ($performance->Price != '0.00')
                    - € {{ number_format($performance->Price, 2) }}
                @endif
            </p>
            @if ($performance->Price != '0.00')
                <div class="mt-4 flex justify-center w-full">
                    @if ($performance->AvailableTickets > 0)
                        <a href="/agenda/purchase?name={{$artist->Name}}" class="p-3 rounded-md font-semibold uppercase cursor-pointer text-xs w-48 bg-yellow-400 text-black">
                            Buy Tickets!</a>
                    @else
                        <button class="p-3 rounded-md font-semibold uppercase cursor-pointer text-xs w-48 bg-red-500 text-white" disabled>
                            Sold Out
                        </button>
                    @endif
                </div>
            @else
                <div class="mt-4 flex justify-center">
                    <span class="inline-block p-3 rounded-md font-semibold uppercase cursor-pointer text-xs text-black">
                        For free!
                    </span>
                </div>
            @endif
        </div>
    </div>
@endforeach

@include('main.footer')

</body>
</html>
