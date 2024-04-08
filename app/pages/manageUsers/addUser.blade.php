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
        @include('admin.panel')


        <!-- Add User Container -->
        <section class="w-4/5 p-4">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h1 class="text-xl font-bold mb-4">Add User</h1>
                <form action="/createUser" method="POST">
                    <div class="mb-4">
                        <label for="firstName" class="block mb-2">Name:</label>
                        <input type="text" id="firstName" name="firstName" class="w-full border rounded-md px-3 py-2"
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
                            <option value="user">Employee</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block mb-2">Email:</label>
                        <input type="email" id="email" name="email" class="w-full border rounded-md px-3 py-2"
                            required>
                    </div>

                    <div>
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
                        <a href="/manageUsers"
                            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Cancel</a>


                    </div>
                </form>
            </div>
        </section>
    </div>
</body>

</html>
