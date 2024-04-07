<div class="relative w-full">
    <img src="{{ $festivalEvent->getImgPath() }}" alt="{{ $festivalEvent->getFestivalEventName() }}" class="w-full object-cover"/>
    <div class="absolute inset-0 flex flex-col justify-center items-center p-4 sm:p-8 text-center text-white">
        <h1 class="text-2xl sm:text-4xl md:text-7xl font-medium mb-2 font-serif">
            {{ $festivalEvent->getFestivalEventName() }}
        </h1>
        <p class="text-xl sm:text-2xl md:text-2xl mb-2 font-bold">
            {{ date('j F', strtotime($festivalEvent->getStartDate())) }} -
            {{ date('j F', strtotime($festivalEvent->getEndDate())) }}
        </p>
    </div>
</div>

