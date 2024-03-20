<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
<div class="flex w-full justify-between">
    <!-- Admin Panel -->
    <aside class="w-1/5 bg-gray-200 p-4 h-screen">
        <h2 class="text-xl font-bold mb-4">Admin Panel</h2>
        <ul>
            <li class="mb-4">
                <a href="#"
                   class="block text-left bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-3 rounded-lg mb-2 text-lg">
                    View Users
                </a>
            </li>
            <li class="mb-4">
                <a href="/addUser"
                   class="block text-left bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-3 rounded-lg mb-2 text-lg">
                    Add Users
                </a>
            </li>
        </ul>
    </aside>

    <!-- Manage Users Section -->
    <section class="p-4 w-4/5 overflow-y-auto" style="max-height: calc(100vh - 100px);">
        <h2 class="text-xl font-bold mb-4">View Users List</h2>
        <!-- User Table -->
        <table id="userTable" class="table-auto w-full">
            <thead>
            <tr>
                <th class="px-4 py-2">Venue ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Address</th>
                <th class="px-4 py-2">Contact Details</th>
            </tr>
            </thead>
            <tbody>
            <!-- Loop through users and display each user -->
            @foreach ($venues as $venue)
                <tr>
                    <td class="border px-4 py-2">{{ $venue->VenueID }}</td>
                    <td class="border px-4 py-2">{{ $venue->Name }}</td>
                    <td class="border px-4 py-2">{{ $venue->Address }}</td>
                    <td class="border px-4 py-2">{{ $venue->ContactDetails }}</td>
                    <td class="border px-4 py-2">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded mr-2"
                                onclick="editUser({{ $venue->VenueID }})">Edit
                        </button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded"
                                onclick="confirmDelete({{ $venue->VenueID }})">Delete
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</div>




</body>
</html>