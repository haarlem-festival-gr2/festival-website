<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Artist</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/script/previewImage.js" defer></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
            integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-montserrat">
<div class="flex h-screen">
    @include('admin.jazz.panel')
    <section class="w-4/5 p-4">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-md shadow-md">
            <h1 class="text-xl font-bold mb-4 flex justify-center">Create Artist</h1>
            <form hx-post="/createArtist" hx-target="#error" hx-encoding="multipart/form-data" class="grid grid-cols-2 gap-8">
                <div class="space-y-4">
                    <div class="mb-4">
                        <label for="name" class="block mb-2">Name*:</label>
                        <input type="text" id="name" name="name" required class="w-full border rounded-md px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="bio" class="block mb-2">Bio*:</label>
                        <textarea id="bio" name="bio" required class="w-full h-64 border rounded-md px-3 py-2"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="song1" class="block mb-2">Song 1 (Spotify ID):</label>
                        <input type="text" id="song1" name="song1" class="w-full border rounded-md px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="song2" class="block mb-2">Song 2 (Spotify ID):</label>
                        <input type="text" id="song2" name="song2" class="w-full border rounded-md px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="song3" class="block mb-2">Song 3 (Spotify ID):</label>
                        <input type="text" id="song3" name="song3" class="w-full border rounded-md px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="album1" class="block mb-2">Album 1 (Spotify ID):</label>
                        <input type="text" id="album1" name="album1" class="w-full border rounded-md px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="album2" class="block mb-2">Album 2 (Spotify ID):</label>
                        <input type="text" id="album2" name="album2" class="w-full border rounded-md px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="album3" class="block mb-2">Album 3 (Spotify ID):</label>
                        <input type="text" id="album3" name="album3" class="w-full border rounded-md px-3 py-2">
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="mb-4">
                        <label for="header_img" class="block mb-2">Header Image*:</label>
                        <input type="file" id="header_img" name="header_img"  class="w-full border rounded-md px-3 py-2">
                        <img class="imagePreview" src="" alt="Image preview" style="display:none; max-width:70%; height:auto; margin:10px"/>
                    </div>
                    <div class="mb-4">
                        <label for="artist_img1" class="block mb-2">Artist Image 1*:</label>
                        <input type="file" id="artist_img1" name="artist_img1" class="w-full border rounded-md px-3 py-2">
                        <img class="imagePreview" src="" alt="Image preview" style="display:none; max-width:50%; height:auto; margin:10px"/>
                    </div>
                    <div class="mb-4">
                        <label for="artist_img2" class="block mb-2">Artist Image 2*:</label>
                        <input type="file" id="artist_img2" name="artist_img2" class="w-full border rounded-md px-3 py-2">
                        <img class="imagePreview" src="" alt="Image preview" style="display:none; max-width:50%; height:auto; margin:10px"/>
                    </div>
                    <div class="mb-4">
                        <label for="performance_img" class="block mb-2">Performance Image*:</label>
                        <input type="file" id="performance_img" name="performance_img" class="w-full border rounded-md px-3 py-2">
                        <img class="imagePreview" src="" alt="Image preview" style="display:none; max-width:50%; height:auto; margin:10px"/>
                    </div>
                </div>
                <div class="col-span-2 flex justify-center">
                    <div class="space-x-4">
                        <div id="error"></div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                        <a href="/manageArtists" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>