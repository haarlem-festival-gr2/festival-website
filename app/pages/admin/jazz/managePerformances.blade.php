<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Manage performances</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>
<body class="font-montserrat">
<div class="flex">
@include('admin.jazz.jazzAdminSidebar')
    <div class="flex-1" style="margin-left: 16rem;">
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Manage Performances</h1>
        <form action="/admin/update-performance" method="POST" class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 shadow-sm">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Performance ID</th>
                    <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Artist Name</th>
                    <th scope="col" class="px-12 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event day and Location</th>
                    <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Time</th>
                    <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Time</th>
                    <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Details</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Tickets</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Available Tickets</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($performances as $performance)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/admin/edit-performance/{{ $performance->PerformanceID }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <a href="#" onclick="deletePerformance({{ $performance->PerformanceID }})" class="text-red-600 hover:text-red-900 ml-4">Delete</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $performance->PerformanceID }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $performance->Artist->Name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $performance->Day->Date }} - {{ $performance->Day->Venue->Name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ date('H:i', strtotime($performance->StartDateTime)) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ date('H:i', strtotime($performance->EndDateTime)) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $performance->Price }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $performance->Details }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $performance->TotalTickets }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $performance->AvailableTickets }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>
</div>
</body>
</html>
