<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Passes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
            integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>


<body class="bg-gray-100 font-montserrat">
@include('main.navbar')
<div class="flex justify-center items-center h-screen">

<div class="flex w-full justify-between">

    @include('admin.panel')

    <section class="p-4 w-4/5 overflow-y-auto" style="max-height: calc(100vh - 100px);">
        <div class="flex space-x-8 items-center mb-4">
            <h1 class="text-xl font-bold">Manage Jazz Passes</h1>
            <a href="/jazzpasses/createPass"
               class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Pass
            </a>
            <div id="error"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($passes as $pass)
                <div class="bg-white shadow overflow-hidden rounded-lg">
                    <div class="px-4 py-5 sm:px-6 flex justify-between">
                        <h3 class="text-lg leading-6 font-semibold text-gray-900">Pass</h3>
                        <div class="flex space-x-2">
                            <a href="/jazzpasses/editPass?id={{ $pass->JazzPassID }}"
                               class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-700 text-sm">Edit</a>
                            <form hx-post="/jazzpasses/managePasses" hx-target="#error"
                                  onsubmit="return confirm('Are you sure you want to delete this pass?');"
                                  class="block">
                                <input type="hidden" name="id" value="{{ $pass->JazzPassID }}">
                                <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded text-sm">Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Pass ID</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pass->JazzPassID }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Note</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pass->Note }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Price</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    €{{ number_format($pass->Price, 2) }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Start Date</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ date('d-m-Y', strtotime($pass->StartDateTime)) }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">End Date</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ date('d-m-Y', strtotime($pass->EndDateTime)) }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Total Tickets</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pass->TotalTickets }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Available Tickets</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $pass->AvailableTickets }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

</body>
</html>
