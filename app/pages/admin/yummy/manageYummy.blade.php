<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Yummy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .font-open-sans {
            font-family: "Open Sans", sans-serif;
        }

        .button {
            background-color: #c026d3;
            color: #fff;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>

<body class="font-open-sans bg-amber-100 text-black">
    <div class="flex flex-wrap">
        @include('admin.panel')
        <section class="p-4 w-4/5 overflow-y-auto flex-2">
            <div class="bg-white shadow overflow-hidden rounded-lg mb-8">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-semibold text-gray-900">Create Restaurant</h3>
                </div>
                <div class="border-t border-gray-200">
                    <form action="/manageRestaurant" method="POST"
                        class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="create">
                        @foreach ($restaurantFields as $fieldName)
                            @if ($fieldName !== 'RestaurantID')
                                <div class="flex mb-4">
                                    <div class="w-1/3">
                                        <label for="{{ $fieldName }}"
                                            class="block text-sm font-medium text-gray-700">{{ ucfirst($fieldName) }}</label>
                                    </div>
                                    <div class="w-2/3">
                                        @if (in_array($fieldName, ['HeaderImg', 'FoodImg1', 'FoodImg2', 'FoodImg3', 'RecipeImg']))
                                            <input type="file" name="{{ $fieldName }}" id="{{ $fieldName }}"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-black rounded-md bg-cyan-100"
                                                accept="image/jpeg,image/png" required>
                                        @else
                                            <input type="text" name="{{ $fieldName }}" id="{{ $fieldName }}"
                                                autocomplete="off"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-black rounded-md bg-cyan-100"
                                                required>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="col-span-3">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create
                                Restaurant</button>
                        </div>
                    </form>
                </div>
            </div>
            <h1 class="text-xl font-bold">Manage Restaurants</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($restaurants as $restaurant)
                    <div class="bg-white shadow overflow-hidden rounded-lg">
                        <div class="px-4 py-5 sm:px-6 flex justify-between">
                            <h3 class="text-lg leading-6 font-semibold text-gray-900">{{ $restaurant->Title }}</h3>
                            <div class="flex space-x-2">
                                <a href="/editRestaurant?id={{ $restaurant->RestaurantID }}"
                                    class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-700 text-sm">Edit</a>
                                <form action="/manageRestaurant" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete restaurant {{ $restaurant->Title }}?');">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="RestaurantID" value="{{ $restaurant->RestaurantID }}">
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded text-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Restaurant ID</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->RestaurantID }}</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">SubTitle</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->SubTitle }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">HeaderImg</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        @if ($restaurant->HeaderImg)
                                            <img src="{{ $restaurant->HeaderImg }}" alt="{{ $restaurant->HeaderAlt }}"
                                                style="width: 200px; height: auto;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">HeaderAlt</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->HeaderAlt }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Category 1</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->Category1 }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Category 2</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->Category2 }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Category 3</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->Category3 }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Location</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->Location }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Stars</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->Stars }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">FoodImg 1</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        @if ($restaurant->HeaderImg)
                                            <img src="{{ $restaurant->FoodImg1 }}" alt="{{ $restaurant->FoodAlt1 }}"
                                                style="width: 200px; height: auto;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">FoodImg 2</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        @if ($restaurant->HeaderImg)
                                            <img src="{{ $restaurant->FoodImg2 }}" alt="{{ $restaurant->FoodAlt2 }}"
                                                style="width: 200px; height: auto;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">FoodImg 3</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        @if ($restaurant->HeaderImg)
                                            <img src="{{ $restaurant->FoodImg3 }}" alt="{{ $restaurant->FoodAlt3 }}"
                                                style="width: 200px; height: auto;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Sessions a Day</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->SessionsADay }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Sessions Duration</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->SessionsDuration }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Sessions Start Time</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->SessionsStartTime }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Sessions Total Seats</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->SessionsTotalSeats }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Price Adult</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->PriceAdult }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Price Child</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->PriceChild }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Recipe</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->Recipe }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">RecipeImg</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        @if ($restaurant->HeaderImg)
                                            <img src="{{ $restaurant->RecipeImg }}"
                                                alt="{{ $restaurant->RecipeAlt }}"
                                                style="width: 200px; height: auto;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">RecipeAlt</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->RecipeAlt }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Telephone</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->Telephone }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Email</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->Email }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">KvK</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $restaurant->ChamberOfCommerce }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</body>

</html>
