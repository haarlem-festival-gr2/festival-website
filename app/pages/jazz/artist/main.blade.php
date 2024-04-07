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

@include('jazz.artist.header')

<div class="text-center pt-6">
    <h2 class="text-xl sm:text-2xl md:text-4xl font-noto-serif">
        Biography of {{ $artist->Name }}
    </h2>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-2 p-2">

    <div class="flex flex-col items-center justify-center bg-[#FCC040] p-4 md:p-8 m-8 rounded-lg">
        <div class="text-left mx-auto overflow-hidden">
            <p class="leading-relaxed">
                {{ $bioPart1 }}
            </p>
        </div>
    </div>

    <div class="p-4 mx-2 my-4 overflow-hidden text-center">
        <div class="bg-pink-500 p-4 inline-block max-h-[60vh] overflow-hidden rounded-lg">
            <img src="{{ $artist->ArtistImg2 }}" alt="{{ $artist->Name }}" class="max-h-[50vh] w-auto rounded-lg shadow-lg"/>
        </div>
    </div>

    <div class="p-4 mx-2 my-4 overflow-hidden text-center">
        <div class="bg-pink-500 p-4 inline-block max-h-[60vh] overflow-hidden rounded-lg">
            <img src="{{ $artist->ArtistImg1 }}" alt="{{ $artist->Name }}" class="max-h-[50vh] w-auto rounded-lg shadow-lg "/>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center bg-[#FCC040] p-4 md:p-8 m-8 rounded-lg">
        <div class="text-left mx-auto overflow-hidden">
            <p class="leading-relaxed">
                {{ $bioPart2 }}
            </p>
        </div>
    </div>

</div>
    <!-- albums-->
    <div class="text-center py-6">
        <h2 class="text-3xl md:text-4xl font-noto-serif">
            Discover albums of {{ $artist->Name }}
        </h2>
    </div>
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($artist->Albums as $album)
                @include('jazz.artist.albums')
            @endforeach
        </div>
    </div>

    <!-- songs-->
    <div class="text-center py-6">
        <h2 class="text-3xl font-noto-serif">
            Discover most popular songs of {{ $artist->Name }}!
        </h2>
    </div>
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($artist->Songs as $song)
                @include('jazz.artist.songs')
            @endforeach
        </div>
    </div>

        @include('jazz.artist.performances')

    @include('main.footer')

</body>
</html>
