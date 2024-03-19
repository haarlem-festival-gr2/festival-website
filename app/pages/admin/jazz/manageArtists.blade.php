<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Manage artists</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>
<body class="font-montserrat">
<div class="flex">
    @include('admin.adminPanel')
    <div class="flex-1" style="margin-left: 16rem;">
        <div class="p-4">
            <h1 class="text-2xl font-bold mb-4">Manage Artists</h1>
            <form action="/admin/update-performance" method="POST" class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 shadow-sm">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                        <th scope="col"
                            class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Artist ID
                        </th>
                        <th scope="col"
                            class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Artist Name
                        </th>
                        <th scope="col"
                            class="px-12 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bio
                        </th>
                        <th scope="col"
                            class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Header Image
                        </th>
                        <th scope="col"
                            class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Artist Image 1
                        </th>
                        <th scope="col"
                            class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Artist Image 2
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Performance Image
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Albums (Spotify IDs)
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Songs (Spotify IDs)
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($artists as $artist)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="/admin/edit-performance/{{ $artist->ArtistID }}"
                                   class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <a href="#" onclick="deletePerformance({{ $artist->ArtistID }})"
                                   class="text-red-600 hover:text-red-900 ml-4">Delete</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $artist->ArtistID }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $artist->Name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ substr($artist->Bio, 0, 50) }}{{ strlen($artist->Bio) > 50 ? '...' : '' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $artist->HeaderImg }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $artist->ArtistImg1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $artist->ArtistImg2 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $artist->PerformanceImg }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @foreach ($artist->Albums as $album)
                                    {{ $album->SpotifyID }},
                                    @if (!$loop->last)
                                        <br> <!-- Add a line break if it's not the last album -->
                                    @endif
                                @endforeach
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @foreach ($artist->Songs as $song)
                                    {{ $song->SpotifyID }},
                                    @if (!$loop->last)
                                        <br> <!-- Add a line break if it's not the last album -->
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>
