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
    </style>
</head>

<body class="font-open-sans bg-amber-100 text-black">
    <div class="flex flex-wrap">
        @include('admin.panel')
        <div class="p-4 w-4/5 overflow-y-auto flex-2">
            <section class="mb-8">
                <div class="bg-white shadow overflow-hidden rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-semibold text-gray-900">Edit Yummy</h3>
                    </div>
                    <div class="border-t border-gray-200">
                        <form action="/manageRestaurant" method="POST"
                            class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="editYummy">
                            <input type="hidden" name="YummyID" value="{{ $yummie->YummyID }}">
                            @foreach ($yummyFields as $fieldName)
                                @if ($fieldName !== 'YummyID')
                                    <div class="flex mb-4">
                                        <div class="w-1/3">
                                            <label for="{{ $fieldName }}"
                                                class="block text-sm font-medium text-gray-700">{{ ucfirst($fieldName) }}</label>
                                        </div>
                                        <div class="w-2/3">
                                            @if (strpos($fieldName, 'Img') !== false)
                                                <input type="file" name="{{ $fieldName }}"
                                                    id="{{ $fieldName }}"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-black rounded-md bg-cyan-100"
                                                    accept="image/jpeg,image/png">
                                            @else
                                                <input type="text" name="{{ $fieldName }}"
                                                    id="{{ $fieldName }}"
                                                    value="{{ $fieldName !== 'YummyID' ? $yummie->$fieldName : '' }}"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-black rounded-md bg-cyan-100"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="col-span-3">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save
                                    Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class = "mb-8">
                <div class="bg-white shadow overflow-hidden rounded-lg">
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
                                                <input type="file" name="{{ $fieldName }}"
                                                    id="{{ $fieldName }}"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-black rounded-md bg-cyan-100"
                                                    accept="image/jpeg,image/png" required>
                                            @else
                                                <input type="text" name="{{ $fieldName }}"
                                                    id="{{ $fieldName }}" autocomplete="off"
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
            </section>
            <section>
                <h1 class="text-xl font-bold mb-4">Manage Restaurants</h1>
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
                                        <input type="hidden" name="RestaurantID"
                                            value="{{ $restaurant->RestaurantID }}">
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded text-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    @foreach ($restaurant as $key => $value)
                                        @if (in_array($key, ['HeaderImg', 'FoodImg1', 'FoodImg2', 'FoodImg3', 'RecipeImg']))
                                            <div
                                                class="{{ $loop->iteration % 2 === 0 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">{{ ucfirst($key) }}</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    @if ($value)
                                                        <img src="{{ $value }}"
                                                            alt="{{ $restaurant->{$key . 'Alt'} ?? 'No Image' }}"
                                                            style="width: 200px; height: auto;">
                                                    @else
                                                        <span>No Image</span>
                                                    @endif
                                                </dd>
                                            </div>
                                        @else
                                            <div
                                                class="{{ $loop->iteration % 2 === 0 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">{{ ucfirst($key) }}</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $value }}</dd>
                                            </div>
                                        @endif
                                    @endforeach
                                </dl>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</body>

</html>
