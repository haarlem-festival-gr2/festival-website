<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h1 class="text-xl font-bold mb-4">Edit User</h1>
        <form action="/updateUser" method="POST">
            <input type="hidden" name="userId" value="{{ $userId }}">

            <!-- Name -->
            <div class="mb-4">
                <label for="firstName" class="block mb-2">Name:</label>
                <input type="text" id="firstName" name="firstName" class="w-full border rounded-md px-3 py-2"
                    value="{{ $userDetails->Name }}" required>
            </div>

            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block mb-2">Username:</label>
                <input type="text" id="username" name="username" class="w-full border rounded-md px-3 py-2"
                    value="{{ $userDetails->Username }}" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full border rounded-md px-3 py-2"
                    value="{{ $userDetails->Email }}" required>
            </div>

            <!-- Password
            <div class="mb-4">
                <label for="password" class="block mb-2">Password:</label>
                <input type="password" id="password" name="password" class="w-full border rounded-md px-3 py-2"
                    required>
            </div>-->

            <!-- Role -->
            <div class="mb-4">
                <label for="role" class="block mb-2">Role:</label>
                <select id="role" name="role" class="w-full border rounded-md px-3 py-2" required>
                    <option value="admin" @if ($userDetails->Role == 'admin') selected @endif>admin</option>
                    <option value="user" @if ($userDetails->Role == 'user') selected @endif>user</option>
                    <option value="employee" @if ($userDetails->Role == 'employee') selected @endif>employee</option>
                </select>
            </div>

            <div>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
                <a href="/manageUsers" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>
