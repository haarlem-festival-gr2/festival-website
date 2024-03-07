<!doctype html>
<html lang="en">

<head>
    <title>Login/Create account</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
        integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
</head>

<body style="background-image: url(&quot;/img/login/background.png&quot;)"
    class="bg-cover bg-no-repeat bg-bottom grid justify-center items-center min-h-[100vh]">
    <form
        class="max-w-96 flex flex-col justify-between gap-2 p-8 rounded shadow-[rgba(0,0,0,0.25)] shadow-xl min-h-[50vh] min-w-[50vh]"
        style="background-color: var(--color-bg-yellow)" hx-target="#error" hx-post>
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl font-semibold">Welcome {{ $user }}</h1>
            <div class="grid grid-cols-2 gap-2 h-10">
                <input type="submit" name="action" value="Log Out"
                    class="cursor-pointer bg-white border border-black rounded hover:bg-gray-100" />
                <input type="submit" name="action" value="View Agenda"
                    class="cursor-pointer bg-white border border-black rounded hover:bg-gray-100" />
            </div>
            <p id="error"></p>
        </div>
    </form>
</body>

</html>
