<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/fti0kzn0bxks5cqawp2swwpmujnbumsxor130pj92h845m5m/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
        integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
        </script>
    <script>
        tinymce.init({
            selector: '#htmledit',
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion visualblocks',
            toolbar: "undo redo | accordion accordionremove | Payment | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | print | pagebreak anchor codesample | ltr rtl",
            menubar: 'file edit view insert format tools table help',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            images_upload_url: '/uploadimage',
            mergetags_list: [
                {value: 'First.Name', title: 'First Name'},
                {value: 'Email', title: 'Email'},
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });

        let parseHtmlIntoResponse = () => {
            let a = tinymce.activeEditor.getContent("#htmledit");
            return a;
        };
    </script>
</head>

<body>
    <script>
        function openDia() {
            document.getElementById("dialog").showModal();
        }
        function closeDia() {
            document.getElementById("dialog").close();
        }
    </script>

    <dialog id="dialog" class="p-4">
        <button type="button" onclick="closeDia()"
            class="bg-white-200 border border-black px-4 py-2 m-2 cursor-pointer rounded-2xl font-bold text-lg">
            Close
        </button>
        <form hx-post="/admin/addpage" hx-swap="none">
            <input type="text" name="title" placeholder="Page Title"
                class="bg-white-200 border border-black px-4 py-2 m-2 cursor-text rounded-2xl font-bold text-lg" required>
            <input type="text" name="path" placeholder="Path"
                class="bg-white-200 border border-black px-4 py-2 m-2 cursor-text rounded-2xl font-bold text-lg" required>
            <input type="submit" value="Add or Edit"
                class="bg-white-200 border border-black px-4 py-2 m-2 cursor-pointer rounded-2xl font-bold text-lg">
            </input>
        </form>
        <form hx-post="/admin/editpage" hx-swap="none">
            <select name="pageid"
                class="bg-white-200 border border-black px-4 py-2 m-2 cursor-pointer rounded-2xl font-bold text-lg">
                @foreach($pages as $page)
                <option value="{{$page['ID']}}">{{$page['Title']}} (/{{$page['Path']}})</option>
                @endforeach
            </select>
            <input type="submit" value="Edit this page" name="action"
                class="bg-white border border-black px-4 py-2 m-2 cursor-pointer rounded-2xl font-bold text-lg">
            </input>
            <input type="submit" value="Delete this page" name="action"
                class="bg-red-200 border border-black px-4 py-2 m-2 cursor-pointer rounded-2xl font-bold text-lg">
            </input>
        </form>
    </dialog>

    <form hx-post hx-target="#out" hx-vals="js:{'wysiwyg': parseHtmlIntoResponse()}" hx-trigger="submit">
        <input type="submit" name="action" value="Save"
            class="bg-cyan-200 border border-black px-4 py-2 m-2 cursor-pointer rounded-2xl font-bold text-lg">
        <button type="button" onclick="openDia()"
            class="bg-white border border-black px-4 py-2 m-2 cursor-pointer rounded-2xl font-bold text-lg">
            Open management panel
        </button>
        <input id="editpageid" type="hidden" name="editpageid" value="{{$editpageid}}">
        <div id="out"></div>
        <textarea id="htmledit" style="height: calc(100vh - 9rem);">
            {{$current}}
        </textarea>
    </form>
</body>

</html>
