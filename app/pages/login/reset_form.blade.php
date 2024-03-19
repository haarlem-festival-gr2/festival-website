@extends('login.layout')

@section('title', 'Reset Password')

@section('content')

<input type="hidden" name="token" value="{{ $token }}">
<div class="flex flex-col gap-2">
    <label for="email" class="flex flex-col">
        Password
        <input id="password" type="password" name="password" class="border border-black rounded p-2" required />
    </label>
    <label for="email" class="flex flex-col">
        Confirm Password
        <input id="password_c" type="password" name="password_c" class="border border-black rounded p-2" required />
    </label>
</div>

<div class="flex flex-col">
    <input type="submit" name="action" value="Reset password"
        class="cursor-pointer bg-white border border-black rounded hover:bg-gray-100 h-10" />
    <p class="text-green-700" id="error"></p>
</div>

@endsection
