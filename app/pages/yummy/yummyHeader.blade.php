<div class="relative">
    <img src="{{ $headerImage }}" alt="{{ $headerImageAlt }}" class="w-full" />
</div>
<div class="bg-fuchsia-600 p-10 text-white font-bold text-center">
    <h1 class="text-8xl mb-6">{{ $title }}</h1>
    <p class="text-4xl mb-2">{{ $subtitle }}</p>
</div>

<div class="relative mt-8">
    <!-- Shadow Bar-->
    <div class="bg-pink-300 h-16 w-full md:w-4/6 absolute left-1 top-0 flex items-center px-4">

    </div>
    <!-- Main Bar -->
    <div class="bg-pink-400 h-16 w-full md:w-4/6 absolute left-0 top-1 flex items-center px-4">
        <h1 class="text-4xl p-2 font-bold text-center flex-grow">
            {{ $mainBarTitle }}
        </h1>
    </div>
</div>