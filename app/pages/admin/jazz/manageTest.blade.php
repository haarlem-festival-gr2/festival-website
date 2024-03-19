<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script>
        function confirmDelete(userId) {
            if (confirm("Are you sure you want to delete this user?")) {
                // If user confirms, redirect to delete user endpoint passing the userId
                window.location.href = "/deleteUser?userId=" + userId;
            }
        }
    </script>
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
            {{-- <li class="mb-4">
                <a href="/updateUser"
                    class="block text-left bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-3 rounded-lg mb-2 text-lg">
                    Update Users
                </a>
            </li> --}}
        </ul>
    </aside>

    <!-- Manage Users Section -->
    <section class="p-4 w-4/5 overflow-y-auto" style="max-height: calc(100vh - 100px);">
        <h2 class="text-xl font-bold mb-4">View Users List</h2>

        <!-- User List -->
        <div class="mb-4 flex items-center">
            <input id="searchInput" type="text" class="border rounded-l px-4 py-2 w-full"
                   placeholder="Search users...">
            <button onclick="searchUsers()" class="bg-blue-500 text-white px-4 py-2 rounded-r">Search</button>
        </div>
        <select id="filterSelect" class="border rounded px-4 py-2 w-full mb-2">
            <option value="">Filter</option>
            <option value="role">Role</option>
            <option value="name">Name</option>
            <option value="username">Username</option>
            <option value="id">ID</option>
        </select>
        <!-- User Table -->
        <table id="userTable" class="table-auto w-full">
            <thead>
            <tr>
                <th class="px-4 py-2">User ID</th>
                <th class="px-4 py-2">Username</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Password</th>
                <th class="px-4 py-2">Registration Date</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Loop through users and display each user -->
            @foreach ($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->UserID }}</td>
                    <td class="border px-4 py-2">{{ $user->Username }}</td>
                    <td class="border px-4 py-2">{{ $user->Email }}</td>
                    <td class="border px-4 py-2">*****</td>
                    <td class="border px-4 py-2">{{ $user->RegistrationDate }}</td>
                    <td class="border px-4 py-2">{{ $user->Role }}</td>
                    <td class="border px-4 py-2">{{ $user->Name }}</td>
                    <td class="border px-4 py-2">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded mr-2"
                                onclick="editUser({{ $user->UserID }})">Edit</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded"
                                onclick="confirmDelete({{ $user->UserID }})">Delete</button>

                    </td>
                </tr>
            @endforeach
            </tbody>

            </tbody>
        </table>
    </section>

</div>

</body>
</html>