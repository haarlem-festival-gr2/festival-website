<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<body class="flex flex-col items-center justify-center min-h-screen">
    <h1 class="text-3xl font-bold mb-8">Add Tour</h1>
    <form action="/addTicketHistory" method="POST" class="w-1/2">

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="tour_id" class="block text-sm font-medium text-gray-700">Tour ID</label>
            <input type="text" name="tour_id" id="tour_id" required class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="day_id" class="block text-sm font-medium text-gray-700">Day ID</label>
            <input type="text" name="day_id" id="day_id" required class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="language_id" class="block text-sm font-medium text-gray-700">Language ID</label>
            <input type="text" name="language_id" id="language_id" required class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="start_date_time" class="block text-sm font-medium text-gray-700">Start Date Time</label>
            <input type="datetime-local" name="start_date_time" id="start_date_time"
                required class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="end_date_time" class="block text-sm font-medium text-gray-700">End Date Time</label>
            <input type="datetime-local" name="end_date_time" id="end_date_time"
                required class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="total_seats" class="block text-sm font-medium text-gray-700">Total Tickets</label>
            <input type="number" name="total_tickets" id="total_tickets" required class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="total_seats" class="block text-sm font-medium text-gray-700">Remaining Tickets</label>
            <input type="number" name="remaining_tickets" id="total_tickets" required class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
            <div class="w-4"></div>
            <button onclick="window.location.href='/manageHistoryPage'" type="button"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Cancel
            </button>
        </div>
    </form>
</body>

</html>
