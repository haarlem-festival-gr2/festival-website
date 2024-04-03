<nav class="h-16 bg-red-100 flex flex-row gap-6 px-4">
    <a href="/" class="flex gap-2 items-center">
        <img class="h-12" src="favicon.ico" alt="">
        <p class="text-2xl font-bold">Haarlem</p>
    </a>

    <span class="flex gap-2 items-center text-lg">
        <a href="" class="hover:underline">Haarlem 1</a>
        <a href="" class="hover:underline">Haarlem 2</a>
        <a href="" class="hover:underline">Haarlem 3</a>
        <a href="" class="bg-[#FCC040] px-4 py-2 rounded-lg hover:underline">Attend our festival!</a>
        @auth
        <a href="user" class="hover:underline">User Management</a>
        @endauth
        @authguest
        <a href="login" class="hover:underline">Login</a>
        @endauth
    </span>
</nav>
