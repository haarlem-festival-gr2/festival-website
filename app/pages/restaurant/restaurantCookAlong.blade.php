<div class="grid grid-cols-6 p-2 mt-8">
    <div class="col-span-3 row-spawn-1 flex justify-center">
        <img src="{{ $image }}" alt="{{ $alt }}" class="mt-8 shadow-lg rounded-3xl" />
    </div>
    <div class="col-span-3 row-spawn-1 p-2 bg-amber-400">
        <div class="bg-pink-400">
            <h1 class="text-4xl p-2 font-bold text-center">{{ $title }}</h1>
        </div>
        <div class="p-10 text-2xl">
            @php
                $stepNumber = 1;
            @endphp
            @php
                $stepArray = explode('. ', $steps); // Split the string into an array of steps
            @endphp
            @foreach ($stepArray as $step)
                <p><b>{{ $stepNumber }}</b>. {{ $step }}</p>
                @php
                    $stepNumber++;
                @endphp
            @endforeach
        </div>
    </div>
</div>
