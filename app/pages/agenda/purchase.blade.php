@extends('agenda.layout')

@section('title', 'Upcoming Events')

@section('content')

<div class="bg-[#fdc9ef] flex flex-row gap-4 p-4 min-h-[calc(100vh-20rem)]">
    @include('agenda.filter_form')
    <div id="out" class="w-full flex flex-col gap-4">
        <!-- <div class="flex flex-row gap-6 items-center flex-grow"> -->
        <!--     <h1 class="text-2xl text-gray-700 font-semibold font-serif">25th July</h1> -->
        <!--     <div class="bg-gray-400 flex-grow h-[1px]"></div> -->
        <!-- </div> -->
    </div>
    <div class="bg-white rounded-lg flex flex-col gap-4">
        <h1 class="font-serif font-semibold text-4xl whitespace-nowrap m-4">Your Cart</h1>
        <div id="cart"></div>
    </div>
</div>

@endsection
