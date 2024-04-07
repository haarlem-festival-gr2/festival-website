<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $festivalEvent->getFestivalEventName() }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/script/textToSpeech.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
    <link href="/css/navBarStyle.css" rel="stylesheet">
</head>
<body class="font-montserrat">

@include('main.navbar')

@include('jazz.overview.header')

<div class="p-4 sm:p-8 relative bg-[#fdbef5] text-center">
    <p class="mb-4 text-xs sm:text-base md:text-lg" id="text">
        {{ $festivalEvent->getDescription() }}
    </p>
    <button onclick="speakText()" class="p-2 sm:p-4 text-2xl sm:text-4xl absolute bottom-5 right-10 bg-transparent border-none">
        🔊
    </button>
</div>

<div class="text-center sm:p-3 p-4">
    <h2 class="text-xl sm:text-2xl md:text-4xl font-noto-serif">
        {{ $festivalEvent->getTitle() }}
    </h2>
</div>

@foreach ($eventDays as $dayNumber => $eventDay)

   @include('jazz.overview.venue')

    <div class=" relative bg-cover bg-center min-h-[100vh]" style="background-image: url('{{ $eventDay['day']->ImgPath }}');">
        @include('jazz.overview.schedule')
        @include('jazz.overview.passes')
    </div>

    @include('jazz.overview.artists')

@endforeach

@include('main.footer')
</body>
</html>
