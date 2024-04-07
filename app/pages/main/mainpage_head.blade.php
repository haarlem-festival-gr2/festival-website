<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/tailwind.css" rel="stylesheet">
    <style>
        @media (min-width: 768px) {
            #stickyNav {
                position: sticky;
                top: 0;
                z-index: 50;
            }
        }
    </style>
</head>

<body>
    @include('main.navbar')
    <main class="no-tailwindcss-base">
        {{ $content() }}
    </main>
    @include('main.footer')
</body>

</html>
