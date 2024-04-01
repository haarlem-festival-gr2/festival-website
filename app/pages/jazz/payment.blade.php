<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
            integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="font-montserrat bg-cover bg-no-repeat" style="background-image: url('/img/confirmation.png');">
<div class="container mx-auto my-10 p-8 bg-gray-100 bg-opacity-25 rounded-lg shadow-xl">
    <div class="header text-center text-4xl font-bold py-4 border-b-4 border-black mb-6">Payment</div>
    <div class="md:flex md:justify-between">

        <div class="md:w-1/2 bg-yellow-400 p-4 rounded-lg">
            <div class="text-2xl mb-2">Please fill in the contact information</div>
            <form class="space-y-3">
                <input class="w-full px-4 py-2 border rounded" type="text" placeholder="First name*" required>
                <input class="w-full px-4 py-2 border rounded" type="text" placeholder="Last name*" required>
                <input class="w-full px-4 py-2 border rounded" type="text" placeholder="Phone number*" required>
                <input class="w-full px-4 py-2 border rounded" type="email" placeholder="Email address*" required>
                <div class="text-base">Your tickets will be sent to your email</div>
            </form>
            <div class="payment-methods mt-6 bg-yellow-400">
                <div class="text-2xl mb-2">Please select a payment method*</div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="payment" id="ideal" class="mr-2 h-6 w-6 text-[#B92090] focus:ring-[#B92090] border-gray-300 rounded">
                    <label for="ideal" class="text-lg font-semibold text-black">iDEAL</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="payment" id="credit-card" class="mr-2 h-6 w-6 text-[#B92090] focus:ring-[#B92090] border-gray-300 rounded">
                    <label for="credit-card" class="text-lg font-semibold text-black">Credit Card / Debit Card</label>
                </div>
            </div>

        </div>

        <div class="md:w-1/2 bg-yellow-400 p-4 rounded-lg ml-4">
            <div class="text-2xl font-bold mb-2">Summary</div>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <div>English Tour</div>
                    <div>€ 60,00</div>
                </div>
                <div class="flex justify-between">
                    <div>Gare du Nord</div>
                    <div>€ 30,00</div>
                </div>
                <!-- Repeat for each item -->
            </div>
            <div class="flex justify-between font-bold text-xl mt-4">
                <div>Total:</div>
                <div>€ 250,00</div>
            </div>
        </div>

    </div>

    <div class="flex justify-center space-x-12 mt-6">
        <a href="/previous-page" class="py-2 px-4 bg-gray-300 hover:bg-gray-400 text-black font-bold rounded shadow inline-block text-center leading-5">Go back</a>
        <button type="submit" class="py-2 px-4 bg-[#B92090] hover:bg-purple-700 text-white font-bold rounded shadow">Continue</button>
    </div>

</div>
<script>
</script>
</body>
</html>
