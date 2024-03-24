<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <link href="/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
        integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
        </script>
</head>

<body class="flex flex-col gap-6">
    <h1 class="font-serif font-bold text-5xl">@yield('title', 'Agenda')</h1>
    @yield('content')
</body>

</html>
