<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/tailwind.css" rel="stylesheet">
</head>

<body>
    @include('main.navbar')
    <main class="no-tailwindcss-base">
        {{ $content() }}
    </main>
    @include('main.footer')
</body>

</html>
