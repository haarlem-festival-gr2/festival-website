<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Event Day</title>
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
    @if ($yummyEventDay)
        <div class="flex flex-wrap">
            @include('admin.panel')
            <section class="p-4 w-4/5 overflow-y-auto flex-2">
                <div class="bg-white shadow overflow-hidden rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-semibold text-gray-900">Edit Yummy Event Day</h3>
                    </div>
                    <div class="border-t border-gray-200">
                        <form action="/editYummyEventDays" method="POST"
                            class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="editYummyEventDay">
                            <input type="hidden" name="DayID" value="{{ $yummyEventDay->DayID }}">
                            @foreach (get_object_vars($yummyEventDay) as $fieldName => $fieldValue)
                                @if ($fieldName !== 'DayID')
                                    <div class="flex mb-4">
                                        <div class="w-1/3">
                                            <label for="{{ $fieldName }}"
                                                class="block text-sm font-medium text-gray-700">{{ ucfirst($fieldName) }}</label>
                                        </div>
                                        <div class="w-2/3">
                                            @if (in_array($fieldName, ['Date']))
                                                <input type="date" name="{{ $fieldName }}"
                                                    id="{{ $fieldName }}" value="{{ $fieldValue }}"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-black rounded-md bg-cyan-100"
                                                    required>
                                            @else
                                                <input type="text" name="{{ $fieldName }}"
                                                    id="{{ $fieldName }}" value="{{ $fieldValue }}"
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
        </div>
    @else
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">Yummy Event Day not found.</span>
        </div>
    @endif
</body>
