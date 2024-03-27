<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $yummies->Title }}</title>
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
    <section>

        <form action="/manageRestaurant" method="POST">
            <input type="hidden" name="action" value="create">

            <input type="text" name="title" placeholder="Title">
            <input type="text" name="subtitle" placeholder="SubTitle">
            <input type="text" name="HeaderImg" placeholder="HeaderImg">
            <input type="text" name="HeaderAlt" placeholder="HeaderAlt">
            <input type="text" name="Category1" placeholder="Category1">
            <input type="text" name="Category2" placeholder="Category2">
            <input type="text" name="Category3" placeholder="Category3">
            <input type="text" name="Location" placeholder="Location">
            <input type="text" name="Stars" placeholder="Stars">
            <input type="text" name="FoodImg1" placeholder="FoodImg1">
            <input type="text" name="FoodAlt1" placeholder="FoodAlt1">
            <input type="text" name="FoodImg2" placeholder="FoodImg2">
            <input type="text" name="FoodAlt2" placeholder="FoodAlt2">
            <input type="text" name="FoodImg3" placeholder="FoodImg3">
            <input type="text" name="FoodAlt3" placeholder="FoodAlt3">
            <input type="text" name="SessionsADay" placeholder="SessionsADay">
            <input type="text" name="SessionsDuration" placeholder="SessionsDuration">
            <input type="text" name="SessionsStartTime" placeholder="SessionsStartTime">
            <input type="text" name="SessionsTotalSeats" placeholder="SessionsTotalSeats">
            <input type="text" name="PriceAdult" placeholder="PriceAdult">
            <input type="text" name="PriceChild" placeholder="PriceChild">
            <input type="text" name="Recipe" placeholder="Recipe">
            <input type="text" name="RecipeImg" placeholder="RecipeImg">
            <input type="text" name="RecipeAlt" placeholder="RecipeAlt">
            <input type="text" name="Telephone" placeholder="Telephone">
            <input type="text" name="Email" placeholder="Email">
            <input type="text" name="ChamberOfCommerce" placeholder="ChamberOfCommerce">

            <button type="submit">Create Restaurant</button>
        </form>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-black">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        Actions </th>

                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        RestaurantID </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider"> Title
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        SubTitle </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        HeaderImg </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        HeaderAlt </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        Category1 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        Category2 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        Category3 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        Location </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider"> Stars
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        FoodImg1 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        FoodAlt1 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        FoodImg2 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        FoodAlt2 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        FoodImg3 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        FoodAlt3 </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        SessionsADay </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        SessionsDuration </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        SessionsStartTime </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        SessionsTotalSeats </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        PriceAdult </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        PriceChild </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        Recipe </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        RecipeImg </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        RecipeAlt </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        Telephone </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider"> Email
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-yellow-400 uppercase tracking-wider">
                        ChamberOfCommerce </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($restaurants as $key => $restaurant)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 edit-btn">Edit</a>
                            <form action="/manageRestaurant" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete restaurant {{ $restaurant->Title }}?');">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="RestaurantID" value="{{ $restaurant->RestaurantID }}">
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->RestaurantID }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->SubTitle }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($restaurant->HeaderImg)
                                <img src="{{ $restaurant->HeaderImg }}" alt="{{ $restaurant->HeaderAlt }}"
                                    style="width: 200px; height: auto;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->HeaderAlt }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Category1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Category2 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Category3 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Location }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Stars }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($restaurant->FoodImg1)
                                <img src="{{ $restaurant->FoodImg1 }}" alt="{{ $restaurant->FoodAlt1 }}"
                                    style="width: 200px; height: auto;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->FoodAlt1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($restaurant->FoodImg2)
                                <img src="{{ $restaurant->FoodImg2 }}" alt="{{ $restaurant->FoodAlt2 }}"
                                    style="width: 200px; height: auto;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->FoodAlt2 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($restaurant->FoodImg3)
                                <img src="{{ $restaurant->FoodImg3 }}" alt="{{ $restaurant->FoodAlt3 }}"
                                    style="width: 200px; height: auto;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->FoodAlt3 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->SessionsADay }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->SessionsDuration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->SessionsStartTime }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->SessionsTotalSeats }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->PriceAdult }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->PriceChild }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Recipe }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($restaurant->RecipeImg)
                                <img src="{{ $restaurant->RecipeImg }}" alt="{{ $restaurant->RecipeAlt }}"
                                    style="width: 200px; height: auto;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->RecipeAlt }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Telephone }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->Email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $restaurant->ChamberOfCommerce }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>

</html>
