<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Haarlem Jazz Festival Schedule</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      .font-montserrat {
        font-family: "Montserrat", sans-serif;
      }
      .font-noto-serif {
        font-family: "Noto Serif", serif;
      }

      .button {
        background-color: #facc15;
        color: #000;
        padding: 6px 12px;
        border-radius: 6px;
        font-weight: 600;
        text-transform: uppercase;
        cursor: pointer;
        font-size: 12px;
        margin-left: 660px;
        width: 200px;
      }
      .artist-card {
        overflow: hidden;
        background-color: #b92090;
        position: relative; /* This ensures the overlay is positioned relative to the artist-card */
      }
      .artist-image {
        display: block;
        max-width: 100%;
        height: auto;
        width: auto;
        max-height: 200px;
        object-fit: cover;
      }
      .artist-card:hover .artist-image {
        filter: brightness(50%);
      }
      .artist-card:hover .overlay {
        opacity: 1;
      }
      .overlay {
        transition: opacity 0.5s ease-in-out;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        pointer-events: none;
      }
      .tooltip {
        position: relative;
        display: inline;
        cursor: pointer;
      }
      .tooltip .tooltiptext {
        visibility: hidden;
        width: 220px;
        background-color: #b92090;
        color: #fff;
        text-align: left;
        border-radius: 6px;
        padding: 10px;
        position: absolute;
        z-index: 1;
        top: 130%;
        left: 50%;
        margin-left: -110px;
        font-size: 0.6em;
        opacity: 0;
        transition: opacity 0.3s;
      }
      .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
      }
    </style>
  </head>
  <body class="font-montserrat">
    <!-- header img??? -->
    <div class="relative w-full">
      <img
        src="{{ $festivalEvent->getImgPath() }}"
        alt="{{ $festivalEvent->getFestivalEventName() }}"
        class="w-full"
      />
      <div
        class="absolute inset-0 flex flex-col justify-center items-center p-8 text-center text-white"
      >
        <h1 class="text-7xl font-bold mb-2 font-serif">
          {{ $festivalEvent->getFestivalEventName() }}
        </h1>
        <p class="text-2xl mb-2 font-bold">
          {{ date('j F', strtotime($festivalEvent->getStartDate())) }} - {{
          date('j F', strtotime($festivalEvent->getEndDate())) }}

        </p>
      </div>
    </div>

    <div class="p-8 relative bg-[#fdbef5] text-center">
      <p class="mb-4" id="festivalText">
        {{ $festivalEvent->getDescription() }}
      </p>
      <button
        onclick="speakText()"
        class="absolute bottom-10 right-10 bg-transparent border-none text-4xl"
      >
        🔊
      </button>
    </div>

    <div class="text-center py-4">
      <h2 class="text-4xl font-noto-serif">
        Festival in Haarlem 2023 schedule
      </h2>
    </div>

    @foreach ($jazzDaysWithPerformances as $dayWithPerformances)
    <div class="p-4 bg-[#B92090] text-center">
      <h3 class="text-2xl text-white font-bold">
        DAY {{ $dayWithPerformances['day']->getDayNumber() }} - {{ date('l, F
        jS', strtotime($dayWithPerformances['day']->getDate())) }} 📍
        <span class="tooltip"
          ><u>{{ $dayWithPerformances['venue']->getVenueName() }}</u>
          <span class="tooltiptext">
            {{ $dayWithPerformances['venue']->getVenueName() }}<br />
            {{ $dayWithPerformances['venue']->getAddress() }}<br />
            {{ $dayWithPerformances['venue']->getEmail() }}<br />
            {{ $dayWithPerformances['venue']->getContactDetails() }}
          </span>
        </span>
      </h3>
    </div>
    <div class="relative">
      <img
        src="{{ $dayWithPerformances['day']->getImgPath() }}"
        alt="Jazz Day Image"
        class="w-full filter brightness-70"
      />
      @foreach ($dayWithPerformances['performances'] as $index => $performance)
      <div
        style="position: absolute; top: {{ 40 + ($index * 100) }}px; left: 0; width: 100%; padding: 8px; box-sizing: border-box;"
      >
        <div
          class="flex justify-between items-center mb-4"
          style="background: rgba(0, 0, 0, 0.5); padding: 10px"
        >
          <p class="text-white">
            {{ $performance->getArtist()->getArtistName() }}<br />{{ date('H:i',
            strtotime($performance->getStartDateTime())) }} - {{ date('H:i',
            strtotime($performance->getEndDateTime())) }}
            @if(trim($performance->getHall()) !== '') | {{
            $performance->getHall() }} @endif @if($performance->getPrice() !=
            '0.00') - € {{ number_format($performance->getPrice(), 2) }} @else -
            Free! @endif
          </p>
          <div class="button">Add a ticket to personal program</div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="container mx-auto px-4 py-8">
      <div class="grid grid-cols-3 gap-4">
        @foreach ($dayWithPerformances['performances'] as $performance) @if
        ($artist = $performance->getArtist())
        <a
          href="/artist?id={{ $artist->getArtistID() }}"
          class="artist-card p-4 text-center cursor-pointer block"
        >
          <h3 class="text-white text-xl font-bold mb-2">
            {{ $artist->getArtistName() }}
          </h3>
          <img
            src="{{ $artist->getPerformanceImg() }}"
            alt="{{ $artist->getArtistName() }}"
            class="artist-image w-full h-auto"
          />
          <div class="overlay">FIND OUT MORE</div>
        </a>
        @endif @endforeach
      </div>
    </div>
    @endforeach

    <script>
      function speakText() {
        let synth = window.speechSynthesis;
        let textToRead = document.getElementById("festivalText").textContent;
        let utterThis = new SpeechSynthesisUtterance(textToRead);

        utterThis.lang = "en-US";
        synth.speak(utterThis);
      }
    </script>
  </body>
</html>
