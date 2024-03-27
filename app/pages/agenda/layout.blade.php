<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/tailwind.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
        integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
        </script>
</head>

<body class="flex flex-col">
    <h1 class="font-serif font-bold text-5xl my-6">@yield('title', 'Agenda')</h1>
    @yield('content')
    @extends('main.footer')
</body>

</html>
