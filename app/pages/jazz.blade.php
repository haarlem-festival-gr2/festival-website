<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haarlem Jazz Festival Schedule</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .font-open-sans { font-family: 'Open Sans', sans-serif; }
        .button { background-color: #facc15; color: #000; padding: 8px 16px; border-radius: 8px; font-weight: 600; text-transform: uppercase; cursor: pointer; }
        .artist-card {
            position: relative;
            overflow: hidden;
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
            pointer-events: none; /* Ensure the text does not interfere with the hover effect */
        }
    </style>
</head>
<body class="font-open-sans bg-black text-white">
<div class="relative">
    <img src="/jazzHeader.png" alt="Crowd enjoying the Haarlem Jazz Festival with fireworks in the background" class="w-full">
    <div class="absolute inset-0 flex flex-col justify-center items-center p-8 text-center">
        <h1 class="text-6xl font-bold mb-2">Haarlem Jazz</h1>
        <p class="text-2xl mb-2">28 July - 31 July</p>
    </div>
</div>
<div class="bg-pink-500 p-8">
    <p class="mb-4">Haarlem Jazz, a cornerstone of our city's festival calendar, comes alive as we revive past echoes at Patronaat. Join us in this musical journey, where renowned bands recreate the festival's essence.</p>
    <p>Feel the vibrant rhythms and melodies on Sunday at Grote Markt, where bands perform for all, free of charge!</p>
</div>
<div class="text-center py-8">
    <h2 class="text-4xl font-bold mb-4">Festival in Haarlem 2023 schedule</h2>
    <div class="bg-purple-600 mx-auto p-4">
        <h3 class="text-2xl text-white">DAY 1 - Thursday, July 26th, Patronaat</h3>
    </div>
</div>
<div class="relative">
    <img src="jazzHeader.png" alt="Concert image with stage and musician playing drums" class="w-full">
    <div class="absolute top-0 left-0 p-8 space-y-4">
        <div class="flex justify-between items-center">
            <p>Jumbo Kings<br>18:00 - 19:00 | Main Hall - € 15,00</p>
            <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center">
            <p>Jumbo Kings<br>18:00 - 19:00 | Main Hall - € 15,00</p>
            <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center">
            <p>Jumbo Kings<br>18:00 - 19:00 | Main Hall - € 15,00</p>
            <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center">
            <p>Jumbo Kings<br>18:00 - 19:00 | Main Hall - € 15,00</p>
            <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center">
            <p>Jumbo Kings<br>18:00 - 19:00 | Main Hall - € 15,00</p>
            <div class="button">Add a ticket to personal program</div>
        </div>
        <div class="flex justify-between items-center">
            <p>Jumbo Kings<br>18:00 - 19:00 | Main Hall - € 15,00</p>
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
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-3 gap-4">
        <!-- Artist Card 1 -->
        <a href="/artist" class="artist-card bg-purple-600 p-4 text-center cursor-pointer block">
            <h3 class="text-white text-xl font-bold mb-2">Gumbo Kings</h3>
            <img src="jazzHeader.png" alt="Gumbo Kings" class="artist-image w-full h-auto">
            <div class="overlay">FIND OUT MORE</div>
        </a>

        <!-- Repeat this block for each artist, alternating the background color for each one -->
        <!-- ... other artist cards ... -->
    </div>
</div>
</body>
</html>
