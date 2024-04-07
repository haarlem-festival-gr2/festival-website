<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function confirmDelete(ticketId) {
            if (confirm("Are you sure you want to delete this ticket?")) {
                window.location.href = `/manageHistoryPage?deleteTicket=${ticketId}`;
            }
        }
    </script>
</head>

<body class="flex">
    <!-- Admin Panel -->
    @include('admin.panel')

    <!-- Management Section -->
    <section class="flex-1 p-4 overflow-y-auto" style="max-height: calc(100vh - 100px);">
        <div class="flex space-x-8 items-center mb-4">
            <h1 class="text-xl font-bold">Manage History</h1>
            <a href="/addTicketHistory"
                class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add Ticket
            </a>
        </div>
        @foreach ($ticketsByDay as $dayID => $tickets)
            <div class="mb-8">
                <h2 class="text-lg font-bold mb-2">Day ID: {{ $dayID }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($tickets as $ticket)
                        <div class="bg-white shadow overflow-hidden rounded-lg">
                            <div class="px-4 py-5 sm:px-6 flex justify-between">
                                <h3 class="text-lg leading-6 font-semibold text-gray-900">{{ $ticket->Name }} (Tour ID:
                                    {{ $ticket->TourID }})</h3>
                                <div class="flex space-x-2">
                                    <a href="/editTicketHistory?ticketId={{ $ticket->TourID }}"
                                        class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-700 text-sm">Edit</a>
                                    <button onclick="confirmDelete({{ $ticket->TourID }})"
                                        class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded text-sm">Delete</button>
                                </div>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Tour ID</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $ticket->TourID }}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Day ID</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $ticket->DayID }}</dd>
                                    </div>

                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Language ID</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $ticket->LanguageID }}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Name</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $ticket->Name }}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Start DateTime</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ date('d-m-Y H:i', strtotime($ticket->StartDateTime)) }}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">End DateTime</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ date('d-m-Y H:i', strtotime($ticket->EndDateTime)) }}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Total Tickets</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $ticket->TotalTickets }}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Remaining Tickets</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $ticket->RemainingTickets }}</dd>
                                    </div>
                                </dl>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>

</body>

</html>
