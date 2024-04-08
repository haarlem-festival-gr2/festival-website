<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($eventDay['performances'] as $performance)
            @if ($artist = $performance->Artist)
                <a href="/artistDetails?id={{ $artist->ArtistID }}" class="artist-card p-4 text-center cursor-pointer block">
                    <h3 class="text-white font-bold mb-2 text-sm md:text-base lg:text-xl">
                        {{ $artist->Name }}
                    </h3>
                    <img src="{{ $artist->PerformanceImg }}" alt="{{ $artist->Name }}" class="artist-image w-full h-[30vh] sm:h-[200px] md:h-[250px] object-cover self-center">
                    <div class="overlay text-sm sm:text-lg md:text-xl mt-2">FIND OUT MORE</div>
                </a>
            @endif
        @endforeach
    </div>
</div>