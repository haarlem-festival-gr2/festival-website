<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Venues</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen font-montserrat">
<div class="flex w-full justify-between">

    @include('admin.jazz.panel')

    <section class="p-4 w-4/5 overflow-y-auto" style="max-height: calc(100vh - 100px);">
        <div class="flex space-x-8 items-center mb-4">
            <h1 class="text-xl font-bold">Manage Venues</h1>
            <a href="/createVenue" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Venue
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($venues as $venue)
                <div class="bg-white shadow overflow-hidden rounded-lg">
                    <div class="px-4 py-5 sm:px-6 flex justify-between">
                        <h3 class="text-lg leading-6 font-semibold text-gray-900">{{ $venue->Name }}</h3>
                        <div class="flex space-x-2">
                            <a href="/editVenue" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-700 text-sm">Edit</a>
                            <form action="/manageVenues" method="POST" onsubmit="return confirm('Are you sure you want to delete this venue?');" class="block">
                                <input type="hidden" name="venue_id" value="{{ $venue->VenueID }}">
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded text-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Venue ID</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $venue->VenueID }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Address</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $venue->Address }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Contact Details</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $venue->ContactDetails }}</dd>
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