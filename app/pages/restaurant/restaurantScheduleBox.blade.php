<div class="col-span-1 bg-white rounded-lg shadow-lg mr-4">
    <div class="bg-pink-400 p-4 rounded-t-lg mb-4">
        <h1 class="text-white text-4xl text-center font-bold underline">{{ date('jS \of F', strtotime($date)) }}</h1>
        <h1 class="text-white text-xl text-center font-bold">{{ $day }}</h1>
    </div>
    <div class="mt-4">
        @foreach ($sessions as $session)
            <div class="flex justify-center mb-4">
                <div class="bg-purple-500 px-2 py-1 rounded-md mr-2">
                    <h1 class="text-white text-lg">{{ date('H:i', strtotime($session->StartDateTime)) }}</h1>
                </div>
                <div class="bg-pink-500 px-2 py-1 rounded-md ml-2">
                    <h1 class="text-white text-lg">{{ $session->Name }}</h1>
                </div>
            </div>
        @endforeach
    </div>
</div>
