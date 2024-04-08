<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4">Edit Ticket</h1>
            <form action="/editTicketHistory" method="POST">
                <input type="hidden" name="ticketId" value="{{ $ticket->TourID }}">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" value="{{ $ticket->Name }}"
                           required class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="tour_id" class="block text-gray-700 font-bold mb-2">Tour ID</label>
                    <input type="text" id="tour_id" name="tour_id" value="{{ $ticket->TourID }}"
                           required class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="day_id" class="block text-gray-700 font-bold mb-2">Day ID</label>
                    <input type="text" id="day_id" name="day_id" value="{{ $ticket->DayID }}"
                           required class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="language_id" class="block text-gray-700 font-bold mb-2">Language ID</label>
                    <input type="text" id="language_id" name="language_id" value="{{ $ticket->LanguageID }}"
                           required class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="start_date_time" class="block text-gray-700 font-bold mb-2">Start Date Time</label>
                    <input type="datetime-local" id="start_date_time" name="start_date_time"
                        value="{{ date('d-m-Y H:i', strtotime($ticket->StartDateTime)) }}"
                        required class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="end_date_time" class="block text-gray-700 font-bold mb-2">End Date Time</label>
                    <input type="datetime-local" id="end_date_time" name="end_date_time"
                        value="{{ date('d-m-Y H:i', strtotime($ticket->EndDateTime)) }}"
                        required class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="total_tickets" class="block text-gray-700 font-bold mb-2">Total Tickets</label>
                    <input type="number" id="total_tickets" name="total_tickets" value="{{ $ticket->TotalTickets }}"
                           required class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="remaining_tickets" class="block text-gray-700 font-bold mb-2">Remaining
                        Tickets</label>
                    <input type="number" id="remaining_tickets" name="remaining_tickets"
                        value="{{ $ticket->RemainingTickets }}"
                           required class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="flex justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                    <button type="button" onclick="window.location.href='/manageHistoryPage'"
                        class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
