<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Admin Panel -->
        <aside class="w-1/5 bg-gray-200 p-4">
            <h2 class="text-xl font-bold mb-4">Admin Panel</h2>
            <ul>
                <li class="mb-4">
                    <a href="/manageUsers"
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
                <li class="mb-4">
                    <a href="#"
                        class="block text-left bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-3 rounded-lg mb-2 text-lg">
                        Update Users
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Add User Container -->
        <section class="w-4/5 p-4">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h1 class="text-xl font-bold mb-4">Update User</h1>
                <form action="create_user.php" method="POST">
                    <div class="mb-4">
                        <label for="firstName" class="block mb-2">First Name:</label>
                        <input type="text" id="firstName" name="firstName" class="w-full border rounded-md px-3 py-2"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="lastName" class="block mb-2">Last Name:</label>
                        <input type="text" id="lastName" name="lastName" class="w-full border rounded-md px-3 py-2"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="username" class="block mb-2">Username:</label>
                        <input type="text" id="username" name="username" class="w-full border rounded-md px-3 py-2"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block mb-2">Password:</label>
                        <input type="password" id="password" name="password" class="w-full border rounded-md px-3 py-2"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="role" class="block mb-2">Role:</label>
                        <select id="role" name="role" class="w-full border rounded-md px-3 py-2" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block mb-2">Email:</label>
                        <input type="email" id="email" name="email" class="w-full border rounded-md px-3 py-2"
                            required>
                    </div>

                    <div>
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
                        <form action="create_user.php" method="POST">
                            <button type="submit"
                                class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Cancel</button>

                    </div>
                </form>
            </div>
        </section>
    </div>
</body>

</html>
