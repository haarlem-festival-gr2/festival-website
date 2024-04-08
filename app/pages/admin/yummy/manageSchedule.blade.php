<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Yummy Schedule</title>
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
                        <h3 class="text-lg leading-6 font-semibold text-gray-900">Create Yummy Event Day</h3>
                    </div>
                    <div class="border-t border-gray-200">
                        <form action="/editYummyEventDays" method="POST"
                            class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="createYummyEventDay">
                            @foreach ($yummyEventDayFields as $fieldName)
                                @if ($fieldName !== 'DayID')
                                    <div class="flex mb-4">
                                        <div class="w-1/3">
                                            <label for="{{ $fieldName }}"
                                                class="block text-sm font-medium text-gray-700">{{ ucfirst($fieldName) }}</label>
                                        </div>
                                        <div class="w-2/3">
                                            @if ($fieldName === 'Date')
                                                <input type="date" name="{{ $fieldName }}"
                                                    id="{{ $fieldName }}"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-black rounded-md bg-cyan-100"
                                                    required>
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
                                    Yummy Event
                                    Day</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="mb-8">
                <div class="bg-white shadow overflow-hidden rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-semibold text-gray-900">Create Session</h3>
                    </div>
                    <div class="border-t border-gray-200">
                        <form action="/editYummyEventDays" method="POST"
                            class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="createSession">
                            @foreach ($sessionFields as $fieldName)
                                @if ($fieldName !== 'SessionID')
                                    <div class="flex mb-4">
                                        <div class="w-1/3">
                                            <label for="{{ $fieldName }}"
                                                class="block text-sm font-medium text-gray-700">{{ ucfirst($fieldName) }}</label>
                                        </div>
                                        <div class="w-2/3">
                                            @if (in_array($fieldName, ['StartDateTime', 'EndDateTime']))
                                                <input type="datetime-local" name="{{ $fieldName }}"
                                                    id="{{ $fieldName }}"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-black rounded-md bg-cyan-100"
                                                    required>
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
                                    Session</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section>
                <h1 class="text-xl font-bold mb-4">Manage Schedule</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($yummyEventDays as $day)
                        <div class="bg-white shadow overflow-hidden rounded-lg">
                            <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                                <h3 class="text-lg leading-6 font-semibold text-gray-900">Sessions for
                                    {{ date('l, F Y', strtotime($day->Date)) }}</h3>
                                <div class="flex justify-end my-2">
                                    <form action="/editYummyEventDays" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this day?');">
                                        <input type="hidden" name="action" value="deleteYummyEventDay">
                                        <input type="hidden" name="DayID" value="{{ $day->DayID }}">
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded text-sm mr-2">Delete
                                            Day</button>
                                    </form>
                                    <a href="/editYummyEventDay?id={{ $day->DayID }}"
                                        class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-700 text-sm">Edit
                                        Day</a>
                                </div>
                            </div>
                            <div>
                                <dl class="border-b border-gray-200">
                                    @foreach ($day as $key => $value)
                                        <div class="px-4 py-5 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">{{ ucfirst($key) }}</dt>
                                            <dd class="mt-1 text-sm text-gray-900">{{ $value }}</dd>
                                        </div>
                                    @endforeach
                                </dl>
                            </div>
                            <div>
                                @foreach ($sessions as $session)
                                    @if ($session->DayID === $day->DayID)
                                        <dl class="border-b border-gray-200">
                                            @foreach ($session as $key => $value)
                                                @if ($key !== 'SessionID')
                                                    <div class="px-4 py-5 sm:px-6">
                                                        <dt class="text-sm font-medium text-gray-500">
                                                            {{ ucfirst($key) }}</dt>
                                                        <dd class="mt-1 text-sm text-gray-900">{{ $value }}
                                                        </dd>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <div class="px-4 py-3 sm:px-6 flex justify-end">
                                                <form action="/editYummyEventDays" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this session?');">
                                                    <input type="hidden" name="action" value="deleteSession">
                                                    <input type="hidden" name="SessionID"
                                                        value="{{ $session->SessionID }}">
                                                    <button type="submit"
                                                        class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded text-sm mr-2">Delete
                                                        Session</button>
                                                </form>
                                                <a href="/editSession?id={{ $session->SessionID }}"
                                                    class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-700 text-sm">Edit
                                                    Session</a>
                                            </div>
                                        </dl>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</body>

</html>
