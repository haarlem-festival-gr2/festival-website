<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Venue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
            integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-montserrat">
<div class="flex h-screen">

    @include('admin.jazz.panel')

    <section class="w-4/5 p-4">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-md shadow-md">
            <h1 class="text-xl font-bold mb-4 flex justify-center">Edit Venue</h1>
            <form hx-post="/editVenue" hx-target="#error">
                <input type="hidden" name = "id" value = "{{ $venue->VenueID }}">
                <div class="mb-4">
                    <label for="name" class="block mb-2">Venue name*:</label>
                    <input type="text" id="name" name="name" required class="w-full border rounded-md px-3 py-2" value="{{$venue->Name}}">
                </div>
                <div class="mb-4">
                    <label for="address" class="block mb-2">Address*:</label>
                    <input type="text" id="address" name="address" required class="w-full border rounded-md px-3 py-2" value="{{$venue->Address}}">
                </div>
                <div class="mb-4">
                    <label for="contact_details" class="block mb-2">Contact details (optional):</label>
                    <textarea id="contact_details" name="contact_details" class="w-full h-32 border rounded-md px-3 py-2">{{$venue->ContactDetails}}</textarea>
                </div>
                <div id="error"></div>
                <div class="flex justify-center space-x-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    <a href="/manageVenues" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>