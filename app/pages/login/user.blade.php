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
    <a href="/agenda"
        class="text-center cursor-pointer inline-block bg-white border border-black rounded hover:bg-gray-100 h-10 px-4 py-2">View
        Agenda</a>
    @if ($isAdmin)
    <div class="flex items-center justify-center">
        <div class="border-t border-gray-400 flex-grow"></div>
        <div class="mx-4 text-gray-500 font-bold">Admin</div>
        <div class="border-t border-gray-400 flex-grow"></div>
    </div>
    <a href="/finance" class="text-center cursor-pointer 
        inline-block bg-white border border-black rounded hover:bg-gray-100 h-10 px-4 py-2">View Finance</a>
    <a href="http://192.168.0.26:8080/manageUsers" class="text-center cursor-pointer 
        inline-block bg-white border border-black rounded hover:bg-gray-100 h-10 px-4 py-2">Dashboard</a>
    <a href="/index/edit" class="text-center cursor-pointer
        inline-block bg-white border border-black rounded hover:bg-gray-100 h-10 px-4 py-2">Dynamic page editor</a>
    @endif
    @if ($isEmployee)
    <div class="flex items-center justify-center">
        <div class="border-t border-gray-400 flex-grow"></div>
        <div class="mx-4 text-gray-500 font-bold">Employee</div>
        <div class="border-t border-gray-400 flex-grow"></div>
    </div>
    <a href="/scan" class="text-center cursor-pointer
        inline-block bg-white border border-black rounded hover:bg-gray-100 h-10 px-4 py-2">Scan Tickets</a>
    @endif

    <!-- TODO TODO TODO LINKS -->
    <p id="error"></p>
</div>
@endsection
