@extends('login.layout')

@section('title', 'Your Account')

@section('content')
    <div class="flex flex-col gap-2">
        <h1 class="text-3xl font-semibold">Welcome {{ $user }}</h1>
        <div class="grid grid-cols-2 gap-2">
            <input type="submit" name="action" value="Log Out"
                class="cursor-pointer bg-white border border-black rounded hover:bg-gray-100 h-10" />
            <input type="submit" name="action" value="Change account info"
                class="cursor-pointer bg-white border border-black rounded hover:bg-gray-100 h-10" />
        </div>
        <input type="submit" name="action" value="View Agenda"
            class="cursor-pointer bg-white border border-black rounded hover:bg-gray-100 h-10" />
        <p id="error"></p>
    </div>
@endsection
