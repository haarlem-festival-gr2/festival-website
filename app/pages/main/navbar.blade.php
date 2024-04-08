<nav id="stickyNav" class="bg-red-100 px-6 py-3">
<div class="flex flex-col md:flex-row justify-between items-center w-full">
        <div class="flex flex-col md:flex-row items-center gap-6">
            <a href="/" class="flex items-center gap-2">
                <img class="h-12" src="/favicon.ico" alt="Haarlem Festival">
                <p class="text-2xl font-bold">Haarlem</p>
            </a>

            <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                <a href="/yummy" class="hover:underline">Yummy event</a>
                <a href="/jazz" class="hover:underline">Jazz event</a>
                <a href="/history" class="hover:underline">History tours</a>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-6">
            <a href="/agenda/purchase" class="bg-[#FCC040] px-4 py-2 rounded-lg text-center">Attend our festival!</a>
            @auth
                <a href="/user" class="hover:underline">My Profile</a>
            @endauth
            @authguest
                <a href="/login" class="hover:underline">Login</a>
            @endguest
        </div>
    </div>
</nav>

