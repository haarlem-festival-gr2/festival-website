@extends('login.layout')

@section('title', 'Update User Info')

@section('content')
@auth
<div class="flex flex-col gap-2">
    <label for="email" class="flex flex-col">
        Email
        <input id="email" type="email" name="email" class="border border-black rounded p-2" placeholder="unmodified" />
    </label>
    <label for="email" class="flex flex-col">
        Name
        <input id="name" type="text" name="name" class="border border-black rounded p-2" placeholder="unmodified" />
    </label>
    <label for="email" class="flex flex-col">
        Username
        <input id="username" type="text" name="username" class="border border-black rounded p-2" placeholder="unmodified" />
    </label>
</div>
<div class="flex flex-col">
    <input type="submit" name="action" value="Update the modified values"
        class="cursor-pointer bg-white border border-black rounded hover:bg-gray-100 h-10" />
    <p class="text-red-700" id="error"></p>
    <a class="text-gray-600 hover:underline" href="reset">Forgot your password?</a>
</div>
@endauth
@endsection
