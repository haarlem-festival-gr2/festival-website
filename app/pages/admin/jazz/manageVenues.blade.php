<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Manage venues</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="/css/jazzStyles.css" rel="stylesheet">
</head>
<body class="font-montserrat">
<div class="flex">
    @include('admin.jazz.jazzAdminSidebar')
    <div class="flex-1" style="margin-left: 16rem;">
        <h1 class="text-2xl font-bold mb-4">Manage Venues and Jazz Days</h1>

        <div class="p-4">
            <h2 class="text-lg font-semibold mb-2">Manage Jazz Days</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Day ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Venue</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Note</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image Path</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($jazzDays as $jazzDay)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 edit-btn">Edit</a>
                            <form action="/manageJazzDays" method="POST" onsubmit="return confirm('Are you sure you want to delete this day?');">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="jazzday_id" value="{{ $jazzDay->DayID }}">
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $jazzDay->DayID }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $jazzDay->Date }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $jazzDay->Venue->Name }}</td>
                        <td class="px-6 py-4 whitespace-normal">{{ $jazzDay->Note }}</td>
                        <td class="px-6 py-4 whitespace-normal">
                            @if($jazzDay->ImgPath)
                                <img src="{{ $jazzDay->ImgPath }}" alt="Jazz Day Image" style="width: 200px; height: auto;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                    </tr>
                    <tr class="edit-form hidden">
                        <td colspan="5">
                            <form action="/manageJazzDays" enctype="multipart/form-data" method="POST" class="w-full">
                                <input type="hidden" name="action" value="edit">
                                <input type="hidden" name="jazzday_id" value="{{ $jazzDay->DayID }}">
                                <div class="grid grid-cols-5 gap-4">
                                    <div class="col-span-1">
                                        <textarea name="date" class="w-full px-6 py-4 h-auto resize-y border rounded focus:outline-none focus:shadow-outline">{{ $jazzDay->Date }}</textarea>
                                    </div>
                                    <div class="col-span-1">
                                        <select name="venue_id" required class="p-2 border rounded">
                                            @foreach ($venues as $venue)
                                                <option value="{{ $venue->VenueID }}" @if($venue->VenueID == $jazzDay->Venue->VenueID) selected @endif>{{ $venue->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-3">
                                        <textarea name="note" class="w-full px-6 py-4 h-auto resize-y border rounded focus:outline-none focus:shadow-outline">{{ $jazzDay->Note }}</textarea>
                                    </div>
                                    <input type="file" name="image" id="image" class="p-2 border rounded">
                                </div>
                                <div class="flex justify-end mt-4">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-2 rounded">Save</button>
                                    <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded" onclick="cancelEditForm(this)">Cancel</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-4">
            <h2 class="text-lg font-semibold mb-2">Add New Jazz Day</h2>
            <form action="/manageJazzDays" enctype="multipart/form-data" method="POST" class="w-full">
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <input type="hidden" name="action" value="create">
                    <input type="date" name="date" required class="p-2 border rounded">
                    <select name="venue_id" required class="p-2 border rounded">
                        @foreach ($venues as $venue)
                            <option value="{{ $venue->VenueID }}">{{ $venue->Name }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="note" placeholder="Note" class="p-2 border rounded">
                    <input type="file" name="image" id="image" class="p-2 border rounded">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Jazz Day
                </button>
            </form>
        </div>


        <div class="p-4">
            <h2 class="text-lg font-semibold mb-2">Manage Venues</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Venue ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Details</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($venues as $venue)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 edit-btn">Edit</a>
                            <form action="/manageVenues/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this venue?');">
                                <!--<input type="hidden" name="action" value="delete">-->
                                <input type="hidden" name="venue_id" value="{{ $venue->VenueID }}">
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $venue->VenueID }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $venue->Name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $venue->Address }}</td>
                        <td class="px-6 py-4 whitespace-normal break-words">{{ $venue->ContactDetails }}</td>
                    </tr>
                    <tr class="edit-form hidden">
                        <td colspan="5">
                            <form action="/manageVenues/edit" method="POST" class="w-full">
                                <!--<input type="hidden" name="action" value="edit">-->
                                <input type="hidden" name="venue_id" value="{{ $venue->VenueID }}">
                                <div class="grid grid-cols-5 gap-4">
                                    <div class="col-span-1">
                                        <textarea name="name" class="w-full px-6 py-4 h-auto resize-y border rounded focus:outline-none focus:shadow-outline">{{ $venue->Name }}</textarea>
                                    </div>
                                    <div class="col-span-1">
                                        <textarea name="address" class="w-full px-6 py-4 h-auto resize-y border rounded focus:outline-none focus:shadow-outline">{{ $venue->Address }}</textarea>
                                    </div>
                                    <div class="col-span-3">
                                        <textarea name="contact_details" class="w-full px-6 py-4 h-auto resize-y border rounded focus:outline-none focus:shadow-outline">{{ $venue->ContactDetails }}</textarea>
                                    </div>
                                </div>
                                <div class="flex justify-end mt-4">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-2 rounded">Save</button>
                                    <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded" onclick="cancelEditForm(this)">Cancel</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-4">
            <h2 class="text-lg font-semibold mb-2">Add New Venue</h2>
            <form action="/manageVenues/create" method="POST">
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <!--<input type="hidden" name="action" value="create">-->
                    <input type="text" name="name" placeholder="Venue Name" required class="p-2 border rounded">
                    <input type="text" name="address" placeholder="Address" required class="p-2 border rounded">
                    <input type="text" name="contact_details" placeholder="Contact Details" class="p-2 border rounded">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Venue
                </button>
            </form>
        </div>


    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(btn => {
            btn.addEventListener('click', function (event) {
                event.preventDefault();
                const row = this.closest('tr');
                const editForm = row.nextElementSibling;

                // Hide all other open edit forms
                const openForms = document.querySelectorAll('.edit-form:not(.hidden)');
                openForms.forEach(form => {
                    if (form !== editForm) {
                        cancelEditForm(form.querySelector('button[type="button"]'));
                    }
                });

                // Toggle visibility of the clicked form
                editForm.classList.toggle('hidden');
            });
        });
    });

    function cancelEditForm(button) {
        // Find the closest parent <tr> element containing the form
        const formRow = button.closest('.edit-form');
        // Hide the form row
        formRow.classList.add('hidden');

        // Reset the form fields to their initial values
        const form = formRow.querySelector('form');
        form.reset();
    }
</script>


</body>
</html>
