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
      .bold-dates {
        font-weight: bold;
      }
      .button {
        background-color: #facc15;
        color: #000;
        padding: 6px 12px; /* Adjusted padding */
        border-radius: 6px; /* Adjusted border radius */
        font-weight: 600; /* Adjusted font weight */
        text-transform: uppercase;
        cursor: pointer;
        font-size: 12px; /* Adjusted font size */
      }
      .artist-card {
        position: relative;
        overflow: hidden;
        height: auto; /* Reset height */
        background-color: rgba(143, 115, 116, 1);
      }
      .artist-image {
        display: block;
        max-width: 100%;
        height: auto;
        object-fit: contain;
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
    <!-- header -->
    <div class="relative">
      <img
        src="/jazzHeader.png"
        alt="Crowd enjoying the Haarlem Jazz Festival with fireworks in the background"
        class="w-full"
      />
      <div
        class="absolute inset-0 flex flex-col justify-center items-center p-8 text-center text-white"
      >
        <h1 class="text-7xl font-bold mb-2 font-noto-serif">Haarlem Jazz</h1>
        <p class="text-2xl mb-2">
          <span class="bold-dates">27 July - 31 July</span>
        </p>
      </div>
    </div>

    <!-- description -->
    <div
      class="p-8 relative"
      style="background-color: #fdbef5; text-align: center"
    >
      <p class="mb-4" id="festivalText">
        Haarlem Jazz, a cornerstone of our city's festival calendar, comes alive
        as we revive past echoes at Patronaat. Join us in this musical journey,
        where renowned bands recreate the festival's essence. Feel the vibrant
        rhythms and melodies on Sunday at Grote Markt, where bands perform for
        all, free of charge!
      </p>
      <button
        onclick="speakText()"
        style="
          position: absolute;
          bottom: 10px;
          right: 10px;
          background: none;
          border: none;
          font-size: 24px;
        "
      >
        🔊
      </button>
    </div>

    <!-- schedule -->
    <div class="text-center py-4">
      <h2 class="text-4xl font-noto-serif">
        Festival in Haarlem 2023 schedule
      </h2>
    </div>

    <!-- day 1 heading -->
    <div class="p-4" style="background-color: #b92090; text-align: center">
      <h3 class="text-2xl text-white font-bold">
        DAY 1 - Thursday, July 26th 📍
        <span class="tooltip"
          ><u>Patronaat</u>
          <span class="tooltiptext">
            Patronaat<br />
            Zijlsingel 2, 2013 DN<br />
            Email: info@patronaat.nl<br />
            Phone: 023 - 517 58 50 (office)<br />
            023 - 517 58 58 (cash desk/information number)
          </span>
        </span>
      </h3>
    </div>

    <!-- day 1 schedule -->
    <!-- make the img darker? -->
    <div class="relative">
      <img
        src="jazzDay1.png"
        alt="Concert image with stage and musician playing drums"
        class="w-full"
      />
      <div class="absolute top-0 left-0 p-8 space-y-4 text-white">
        <div class="flex justify-between items-center mb-4">
          <p class="text-white">
            Jumbo Kings<br />18:00 - 19:00 | Main Hall - € 15,00
          </p>
          <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <p class="text-white">
            Wicked Jazz Sounds<br />18:00 - 19:00 | Second Hall - € 10,00
          </p>
          <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <p class="text-white">
            Evolve<br />19:30 - 20:30 | Main Hall - € 15,00
          </p>
          <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <p class="text-white">
            Evolve<br />19:30 - 20:30 | Main Hall - € 15,00
          </p>
          <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <p class="text-white">
            Evolve<br />19:30 - 20:30 | Main Hall - € 15,00
          </p>
          <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <p class="text-white">
            Evolve<br />19:30 - 20:30 | Main Hall - € 15,00
          </p>
          <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center">
          <p>All-Access pass for this day - €35,00</p>
          <div class="button">Add all-day ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center">
          <p>All-Access pass for Thu, Fri, Sat - €80,00.</p>
          <div class="button">Add 3-day ticket to personal program</div>
        </div>
      </div>
    </div>

    <!-- artists day 1-->

    <div class="container mx-auto px-4 py-8">
      <div class="grid grid-cols-3 gap-4">
        <a
          href="/artist"
          class="artist-card bg-purple-600 p-4 text-center cursor-pointer block"
        >
          <h3 class="text-white text-xl font-bold mb-2">Gumbo Kings</h3>
          <img
            src="gumboKings.png"
            alt="Gumbo Kings"
            class="artist-image w-full h-auto"
          />
          <div class="overlay">FIND OUT MORE</div>
        </a>
        <a
          href="/artist"
          class="artist-card bg-purple-600 p-4 text-center cursor-pointer block"
        >
          <h3 class="text-white text-xl font-bold mb-2">Gumbo Kings</h3>
          <img
            src="evolve.png"
            alt="Gumbo Kings"
            class="artist-image w-full h-auto"
          />
          <div class="overlay">FIND OUT MORE</div>
        </a>
        <a
          href="/artist"
          class="artist-card bg-purple-600 p-4 text-center cursor-pointer block"
        >
          <h3 class="text-white text-xl font-bold mb-2">Gumbo Kings</h3>
          <img
            src="jonnaFrazer.png"
            alt="Gumbo Kings"
            class="artist-image w-full h-auto"
          />
          <div class="overlay">FIND OUT MORE</div>
        </a>
        <a
          href="/artist"
          class="artist-card bg-purple-600 p-4 text-center cursor-pointer block"
        >
          <h3 class="text-white text-xl font-bold mb-2">Gumbo Kings</h3>
          <img
            src="ntjamRosie.png"
            alt="Gumbo Kings"
            class="artist-image w-full h-auto"
          />
          <div class="overlay">FIND OUT MORE</div>
        </a>
        <a
          href="/artist"
          class="artist-card bg-purple-600 p-4 text-center cursor-pointer block"
        >
          <h3 class="text-white text-xl font-bold mb-2">Gumbo Kings</h3>
          <img
            src="soulSix.png"
            alt="Gumbo Kings"
            class="artist-image w-full h-auto"
          />
          <div class="overlay">FIND OUT MORE</div>
        </a>
        <a
          href="/artist"
          class="artist-card bg-purple-600 p-4 text-center cursor-pointer block"
        >
          <h3 class="text-white text-xl font-bold mb-2">Gumbo Kings</h3>
          <img
            src="wickedJazzSounds.png"
            alt="Gumbo Kings"
            class="artist-image w-full h-auto"
          />
          <div class="overlay">FIND OUT MORE</div>
        </a>
      </div>
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
  </body>
</html>
