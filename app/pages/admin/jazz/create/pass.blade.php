<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pass</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
            integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-montserrat">
<div class="flex h-screen">
    @include('admin.panel')
    <section class="w-4/5 p-4 overflow-y-auto" style="max-height: calc(100vh - 50px);">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-md shadow-md">
            <h1 class="text-xl font-bold mb-4 flex justify-center">Create Jazz Pass</h1>
            <form hx-post="/createPass" hx-target="#error">
                <div class="mb-4">
                    <label for="start_date" class="block mb-2">Start Date Time*:</label>
                    <input type="date" id="start_date" name="start_date" required class="w-full border rounded-md px-3 py-2">
                </div>
                <div class="mb-4">
                    <label for="end_date" class="block mb-2">End Date Time*:</label>
                    <input type="date" id="end_date" name="end_date" required class="w-full border rounded-md px-3 py-2">
                </div>
                <div class="mb-4">
                    <label for="price" class="block mb-2">Price, €*:</label>
                    <input type="number" id="price" name="price" step="0.1" placeholder="0.00" required class="w-full border rounded-md px-3 py-2">
                </div>
                <div class="mb-4">
                    <label for="available_tickets" class="block mb-2">Available Tickets*:</label>
                    <input type="number" id="available_tickets" name="available_tickets" required class="w-full border rounded-md px-3 py-2">
                </div>
                <div class="mb-4">
                    <label for="total_tickets" class="block mb-2">Total Tickets*:</label>
                    <input type="number" id="total_tickets" name="total_tickets" required class="w-full border rounded-md px-3 py-2">
                </div>
                <div class="mb-4">
                    <label for="details" class="block mb-2">Note (optional):</label>
                    <textarea id="details" name="note" class="w-full border rounded-md px-3 py-2"></textarea>
                </div>
                <div id="error"></div>
                <div class="flex justify-center space-x-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    <a href="/manageJazzPasses" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>