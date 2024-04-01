<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jazz Day</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/script/previewImage.js" defer></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
            integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-montserrat">
<div class="flex h-screen">
    @include('admin.panel')
    <section class="w-4/5 p-4 overflow-y-auto" style="max-height: calc(100vh - 50px);">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-md shadow-md">
            <h1 class="text-xl font-bold mb-4 flex justify-center">Edit Jazz Day</h1>
            <form hx-post="/jazzdays/editDay" hx-target="#error" hx-encoding="multipart/form-data">
                <input type="hidden" name = "id" value = "{{$day->DayID}}">
                <div class="mb-4">
                    <label for="date" class="block mb-2">Date*:</label>
                    <input type="date" id="date" name="date" value="{{ $day->Date }}" required class="w-full border rounded-md px-3 py-2">
                </div>
                <div class="mb-4">
                    <label for="venue" class="block mb-2">Venue*:</label>
                    <select id="venue" name="venue" class="w-full border rounded-md px-3 py-2" required>
                        @foreach ($venues as $venue)
                            <option value="{{ $venue->VenueID }}"{{ $venue->VenueID == $day->Venue->VenueID ? ' selected' : '' }}>{{ $venue->Name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="note" class="block mb-2">Note (optional):</label>
                    <textarea id="note" name="note" class="w-full border rounded-md px-3 py-2">{{ $day->Note }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block mb-2">Image:</label>
                    <input type="file" id="image" name="image" class="w-full border rounded-md px-3 py-2">
                    <img class="imagePreview" src="{{ $day->ImgPath }}" alt="Image preview" style="max-width:50%; height:auto; margin:10px"/>
                </div>
                <div id="error"></div>
                <div class="flex justify-center space-x-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    <a href="/jazzdays/manageDays" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>