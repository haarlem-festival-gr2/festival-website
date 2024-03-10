<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $festivalEvent->getFestivalEventName() }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/script/jazzScript.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>
<body class="font-montserrat">
    <p>add nav bar</p>
    @if($user)
        <p>user is logged in</p>
    @else
        <p>user is not logged in</p>
    @endif
    <div class="relative w-full">
        <img src="{{ $festivalEvent->getImgPath() }}" alt="{{ $festivalEvent->getFestivalEventName() }}" class="w-full" />
        <div class="absolute inset-0 flex flex-col justify-center items-center p-8 text-center text-white">
            <h1 class="text-7xl font-bold mb-2 font-serif">
                {{ $festivalEvent->getFestivalEventName() }}
            </h1>
            <p class="text-2xl mb-2 font-bold">
                {{ date('j F', strtotime($festivalEvent->getStartDate())) }} -
                {{ date('j F', strtotime($festivalEvent->getEndDate())) }}
            </p>
        </div>
    </div>
    <div class="p-8 relative bg-[#fdbef5] text-center">
        <p class="mb-4" id="festivalText">
            {{ $festivalEvent->getDescription() }}
        </p>
        <button onclick="speakText()" class="absolute bottom-5 right-10 bg-transparent border-none text-4xl">
            🔊
        </button>
    </div>
    <div class="text-center py-4">
        <h2 class="text-4xl font-noto-serif">
            {{ $festivalEvent->getTitle() }}
        </h2>
    </div>
    @foreach ($jazzDaysWithPerformances as $dayWithPerformances)
        <div class="p-4 bg-[#B92090] text-center">
            <h3 class="text-2xl text-white font-bold">
                DAY {{ $dayWithPerformances['day']->getDayNumber() }} -
                {{ date('l, F jS', strtotime($dayWithPerformances['day']->getDate()),) }} 📍
                <span class="tooltip relative inline cursor-pointer">
                     <u class="underline">{{ $dayWithPerformances['venue']->getVenueName() }}</u>
                     <span class="tooltiptext absolute z-10 bg-[#B92090] text-white text-base rounded-md p-2 w-56 -translate-x-1/2 left-1/2 transform transition-opacity duration-300">
                        {{ $dayWithPerformances['venue']->getVenueName() }}<br />
                        {{ $dayWithPerformances['venue']->getAddress() }}<br />
                        {{ $dayWithPerformances['venue']->getContactDetails() }}
                         @if (trim($dayWithPerformances['day']->getNote()) !== '')
                             {{ $dayWithPerformances['day']->getNote() }}
                         @endif
                    </span>
                </span>
            </h3>
        </div>
        <div class="relative">
            <img src="{{ $dayWithPerformances['day']->getImgPath() }}" alt="Jazz Day Image" class="w-full filter brightness-40" />
            @foreach ($dayWithPerformances['performances'] as $index => $performance)
                <div class="absolute top-[calc(40px+{{ $index * 80 }}px)] left-0 w-full p-2 box-border">
                    <div class="flex justify-between items-center mb-4 bg-black bg-opacity-40 p-2.5">
                        <p class="text-white">
                            {{ $performance->getArtist()->getArtistName() }}<br />{{ date('H:i', strtotime($performance->getStartDateTime())) }}
                            - {{ date('H:i', strtotime($performance->getEndDateTime())) }}
                            @if (trim($performance->getDetails()) !== '')
                                | {{ $performance->getDetails() }}
                            @endif @if ($performance->getPrice() != '0.00')
                                - € {{ number_format($performance->getPrice(), 2) }}
                            @else
                                - Free!
                            @endif
                        </p>
                        <button
                                class="px-3 py-1.5 rounded-md font-semibold uppercase cursor-pointer text-xs ml-44 mr-[2rem] w-48 bg-yellow-400 text-black"
                                onclick="addTicketToProgram(this)"
                                data-default-text="Add a ticket to personal program"
                                data-active-text="Ticket added to personal program"
                                data-default-class="bg-yellow-400"
                                data-active-class="bg-green-500"
                                {{ $performance->getAvailableTickets() < $performance->getTotalTickets() * 0.1 ? 'disabled' : '' }}>
                            Add a ticket to personal program
                        </button>
                    </div>
                </div>
            @endforeach
            @php $passesStartOffset = count($dayWithPerformances['performances']) * 80 + 40; @endphp
            @foreach ($dayWithPerformances['passes'] as $index => $pass)
                <div class="absolute top-[calc({{ $passesStartOffset }}px+{{ $index * 80 }}px)] left-0 w-full p-2 box-border">
                    <div class="flex justify-between items-center bg-black bg-opacity-40 p-2.5">
                        <p class="text-white">
                            {{ $pass->getNote() }}<br>
                            Price: €{{ number_format($pass->getPrice(), 2) }}<br>
                        </p>
                        <button
                                class="px-3 py-1.5 rounded-md font-semibold uppercase cursor-pointer text-xs ml-44 mr-[2rem] w-48 bg-pink-500 text-white"
                                onclick="addTicketToProgram(this)"
                                data-default-text="Add a pass to personal program"
                                data-active-text="Pass added to personal program"
                                data-default-class="bg-pink-500"
                                data-active-class="bg-green-500"
                                {{ $pass->getAvailableTickets() < $pass->getTotalTickets() ? 'disabled' : '' }}>
                            Add a pass to personal program
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-3 gap-4">
                @foreach ($dayWithPerformances['performances'] as $performance)
                    @if ($artist = $performance->getArtist())
                        <a href="/artist?id={{ $artist->getArtistID() }}"
                           class="artist-card p-4 text-center cursor-pointer block">
                            <h3 class="text-white text-xl font-bold mb-2">
                                {{ $artist->getArtistName() }}
                            </h3>
                            <img src="{{ $artist->getPerformanceImg() }}" alt="{{ $artist->getArtistName() }}"
                                 class="artist-image w-full h-auto" />
                            <div class="overlay">FIND OUT MORE</div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    <p>add footer</p>
</body>
</html>
