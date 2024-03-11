<div class="relative">
    <img src="{{ $image }}" alt="{{ $alt }}" class="w-full" />
</div>
<div class="bg-amber-400 p-10 text-black font-bold text-center">
    <h1 class="text-8xl mb-6">{{ $title }}</h1>
    <p class="text-4xl mb-2">{{ $subtitle }}</p>
</div>

<div class="relative mt-8">
    <!-- Shadow Bar-->
    <div class="bg-pink-300 h-16 w-4/6 left-1 top-0"></div>
    <!-- Main Bar -->
    <div class="bg-pink-400 h-16 w-4/6 absolute left-0 top-1">
        <h1 class="text-4xl p-2 font-bold text-center">Who are we?</h1>
    </div>
    <div class="bg-yellow-300 rounded-2xl shadow-lg text-center text-3xl p-6">
        <p>We love to cook delicious food!</p>
        <p>We cook <b>{{ $category1 }}</b>, <b>{{ $category2 }}</b>, And <b>{{ $category3 }}</b> food.</p>
    </div>
</div>