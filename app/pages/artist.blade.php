<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
        .font-noto-serif { font-family: 'Noto Serif', serif; }
        .button-buy {
            background-color: #B92090;
            color: white;
        }
        .artist-card {
            overflow: hidden;
            background-color: #FDC9EF;
        }
    </style>
</head>
<body class="font-montserrat">

<!-- header -->
<div class="relative">
    <img src="img/jazz/lilithMerlotHeader.png" alt="Crowd enjoying the Haarlem Jazz Festival with fireworks in the background" class="w-full">
    <div class="absolute inset-0 flex flex-col justify-center items-center p-8 text-center text-white">
        <h1 class="text-7xl font-medium mb-2 font-noto-serif uppercase">Lilith Merlot</h1>
    </div>
</div>

<!-- bio and imgs -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="flex items-center bg-[#FCC040] p-8 m-6">
        <div class="text-left mx-auto">
            <p class="mt-4">Known for her timeless voice, Dutch singer and songwriter Lilith Merlot has been enchanted by harmony and melody from a young age.</p>
            <p class="mt-4"> Her mother was a classical violinist and, as a young girl, Lilith often joined her mother on tour through Europe.</p>
            <p class="mt-4"> During her Jazz vocals studies at the Rotterdam Conservatory, Lilith performed in front of American singer Renée Neufville, who remarked: “Your voice is just like a Merlot; it’s so warm, deep, and round”. This inspired Lilith to use Merlot as her stage name.</p>
        </div>
    </div>

    <div class="p-6">
        <img src="img/jazz/lilithMerlot1.png" alt="Lilith Merlot" class="mb-4">
    </div>

    <div class="p-6">
        <img src="img/jazz/lilithMerlot2.png" alt="Lilith Merlot">
    </div>

    <div class=" flex items-center p-8 m-6 bg-[#FCC040]">
        <div class="text-left mx-auto">
            <p class="mt-4"> Since releasing her debut EP in 2017, Lilith has been experimenting with various genres, from Jazz to Pop and Soul, influenced by Lizz Wright, Jeff Buckley, and Norah Jones, to name a few, creating music reminiscent of Nina Simone, Melody Gardot, and Madeleine Peyroux.</p>
            <p class="mt-4"> With nearly 5 million streams across platforms, her music has aired across a number of stations under the established Netherlands public broadcaster NPO, earning spins on NPO Soul & Jazz, NPO 3FM Radio and Sublime FM. </p>
        </div>
    </div>
</div>

<!-- albums -->
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="p-4">
            <div class="p-4 text-center artist-card cursor-pointer block">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/2LsarF7MWgoNLK8DsCC1d9?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </div>
        <div class="p-4">
            <div class="p-4 text-center artist-card cursor-pointer block">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3IYw1yRBBNYXGf2XLx1kl4?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </div>
        <div class="p-4">
            <div class="p-4 text-center artist-card cursor-pointer block">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/2AWCbsMHCCW6VFd3LFz9D1?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>            </div>
        </div>
    </div>
</div>


<!-- songs -->
<div class="md:grid md:grid-cols-3 gap-8 my-8">
    <div class="text-center mb-4 md:mb-0">
        <div class="inline-block">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5Ck86xT1yXsPRi1vRUTECa?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
    </div>
    <div class="text-center mb-4 md:mb-0">
        <div class="inline-block">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3d4k38C0dO6BWOkPn62eey?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
    </div>
    <div class="text-center mb-4 md:mb-0">
        <div class="inline-block">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/7Iku7xW9nlXg6qaMi3xDV2?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
    </div>
</div>
    <!-- tickets -->
    <div class="text-center">
        <button class="button-buy px-6 py-2 rounded-full text-lg mb-2">Buy Tickets!</button>
        <div class="flex flex-col bg-[#FCC040] items-center p-8 m-6">
            <p>Come to Patronaat on Saturday, 29th July to enjoy Lilith’s music!<br>21:00 - 22:00 | Third Hall - € 10,00</p>
        </div>
        <!-- You can link this button to your ticket sales page -->
    </div>



</body>
</html>
