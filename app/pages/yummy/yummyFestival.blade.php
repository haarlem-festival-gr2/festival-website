<div class="grid grid-cols-10 mt-36 mx-4 text-center text-3xl relative">
    <div class="col-span-full md:col-span-3 p-2 md:row-span-2 bg-yellow-300 rounded-2xl shadow-lg relative">
        <p>
            {{ $section1Text }}
        </p>
    </div>
    <div class="col-span-full md:col-span-3 p-4 md:row-span-2">
        <img src="{{ $section1Image }}" alt="{{ $section1ImageAlt }}" class="w-full shadow-lg rounded-3xl" />
    </div>
    <div class="hidden md:block col-span-1 p-4 row-span-6"></div>
    <div class="col-span-full md:col-span-3 p-4 bg-yellow-300 rounded-2xl shadow-lg relative">
        <p>
            {{ $section2Text }}
        </p>
    </div>
    <div class="col-span-full md:col-span-3 p-4 md:row-span-2">
        <img src="{{ $section2Image }}" alt="{{ $section2ImageAlt }}" class="w-full shadow-lg rounded-3xl" />
    </div>
    <div class="col-span-full md:col-span-3 p-4 md:row-span-2">
        <img src="{{ $section3Image }}" alt="{{ $section3ImageAlt }}" class="w-full shadow-lg rounded-3xl" />
    </div>
    <div class="col-span-full md:col-span-3 p-4 md:row-span-2">
        <img src="{{ $section4Image }}" alt="{{ $section4ImageAlt }}" class="w-full shadow-lg rounded-3xl" />
    </div>
    <div class="col-span-full md:col-span-3 p-4 bg-yellow-300 rounded-2xl shadow-lg relative">
        <p>
            {{ $section3Text }}
        </p>
    </div>
    <div class="col-span-full md:col-span-6 p-4 bg-yellow-300 rounded-2xl shadow-lg relative">
        <p>
            {{ $section4Text }}
        </p>
    </div>
    <div class="col-span-full md:col-span-3 p-4">
        <img src="{{ $section5Image }}" alt="{{ $section5ImageAlt }}" class="w-full shadow-lg rounded-3xl" />
    </div>
</div>
