<div class="w-full relative bg-center min-h-[10vh] sm:min-h-[30vh] md:min-h-[70vh]" style="background-image: url('{{ $artist->HeaderImg }}'); background-size: cover;">
    <div class="absolute inset-0 flex flex-col justify-center items-center p-4 sm:p-8 text-center text-white">
        <h1 class="text-2xl sm:text-4xl md:text-7xl font-medium mb-2 font-noto-serif uppercase">
            {{ $artist->Name }}
        </h1>
    </div>
</div>