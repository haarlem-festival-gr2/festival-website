@extends('agenda.layout')

@section('title', 'Upcoming Events')

@section('content')

<div class="bg-[#fdc9ef] flex flex-row gap-4 p-4 min-h-[calc(100vh-20rem)]">
    @include('agenda.filter_form')
    <div id="out" class="w-full flex flex-col gap-4">
        {{ $renderDefault() }}
    </div>
    @include('agenda.cart', ['cart' => $cart])
</div>

@endsection
