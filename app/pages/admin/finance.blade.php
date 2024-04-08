<!-- A table for finance report, with filters etc -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>revenue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/script/textToSpeech.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/navBarStyle.css" rel="stylesheet">
</head>
<body class="font-montserrat">

@include('main.navbar')

<div class="container mx-auto px-4 py-6">

    <h1 class="text-2xl font-bold text-gray-800 mb-4">Finance Report</h1>
    <div class="mb-5">
        <span class="block text-lg font-semibold text-gray-700">Total revenue: €{{ $monthlyRevenue }}</span>
        <span class="block mt-2 text-lg font-semibold text-gray-700">Total sales: {{ $totalSales }}</span>
    </div>
    <form method="post" class="mb-5">
        <input type="submit" name="action" value="Export as CSV" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
</div>

</body>
</html>
