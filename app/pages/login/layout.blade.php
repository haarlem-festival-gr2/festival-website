<!doctype html>
<html lang="en">

<head>
    <title>Haarlem festival | @yield('title', 'Login')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
</head>

<body>
    @include('main.navbar')
    <div class="bg-cover bg-no-repeat bg-bottom sm:grid sm:justify-center sm:items-center min-h-[100vh]"
        style="background-image: url(&quot;/img/login/background.png&quot;)">
        <form
            class="flex flex-col justify-between gap-2 p-8 sm:rounded shadow-[rgba(0,0,0,0.25)] shadow-xl sm:min-h-[50vh] min-h-[100vh] sm:min-w-[50vh]"
            style="background-color: var(--color-bg-yellow)" hx-target="#error" hx-post>
            @yield('content')
        </form>
    </div>
</body>

</html>
