<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pass</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
            integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-montserrat ">
<div class="flex h-screen">

    @include('admin.panel')

    <section class="w-4/5 p-4 overflow-y-auto" style="max-height: calc(100vh - 50px);">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-md shadow-md">
            <h1 class="text-xl font-bold mb-4 flex justify-center">Edit Performance</h1>
            <form hx-post="/performances/editPerformance" hx-target="#error">
                <div class="mb-4">
                    <input type="hidden" name = "id" value = "{{ $performance->PerformanceID }}">
                    <label for="artist" class="block mb-2">Artist:</label>
                    <select id="artist" name="artist" class="w-full border rounded-md px-3 py-2" required>
                        @foreach ($artists as $artist)
                            <option value="{{ $artist->ArtistID }}" {{ $artist->ArtistID == $performance->Artist->ArtistID ? 'selected' : '' }}>{{ $artist->Name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="day" class="block mb-2">Jazz Day:</label>
                    <select id="day" name="day" class="w-full border rounded-md px-3 py-2" required>
                        @foreach ($jazzDays as $jazzDay)
                            <option value="{{ $jazzDay->DayID }}" {{ $jazzDay->DayID == $performance->Day->DayID ? 'selected' : '' }}>{{ date('d-m-Y', strtotime($jazzDay->Date)) }} - {{$jazzDay->Venue->Name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="start_time" class="block mb-2">Start Time*:</label>
                    <input type="time" id="start_time" name="start_time" required class="w-full border rounded-md px-3 py-2" value="{{ date('H:i', strtotime($performance->StartDateTime)) }}">
                </div>
                <div class="mb-4">
                    <label for="end_time" class="block mb-2">End Time*:</label>
                    <input type="time" id="end_time" name="end_time" required class="w-full border rounded-md px-3 py-2" value="{{ date('H:i', strtotime($performance->EndDateTime)) }}">
                </div>
                <div class="mb-4">
                    <label for="price" class="block mb-2">Price, €*:</label>
                    <input type="number" id="price" name="price" step="0.1" required class="w-full border rounded-md px-3 py-2" value="{{ number_format($performance->Price, 2) }}">
                </div>
                <div class="mb-4">
                    <label for="available_tickets" class="block mb-2">Available Tickets*:</label>
                    <input type="number" id="available_tickets" name="available_tickets" required class="w-full border rounded-md px-3 py-2" value="{{ $performance->AvailableTickets }}">
                </div>
                <div class="mb-4">
                    <label for="total_tickets" class="block mb-2">Total Tickets*:</label>
                    <input type="number" id="total_tickets" name="total_tickets" required class="w-full border rounded-md px-3 py-2" value="{{ $performance->TotalTickets }}">
                </div>
                <div class="mb-4">
                    <label for="details" class="block mb-2">Details (optional):</label>
                    <textarea id="details" name="details" class="w-full border rounded-md px-3 py-2">{{ $performance->Details }}</textarea>
                </div>
                <div id="error"></div>
                <div class="flex justify-center space-x-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    <a href="/performances/managePerformances" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>