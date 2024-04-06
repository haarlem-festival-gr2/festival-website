<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/fti0kzn0bxks5cqawp2swwpmujnbumsxor130pj92h845m5m/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#htmledit',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
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
    <script src="https://unpkg.com/htmx.org@1.9.10"
        integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
        </script>
</head>

<body>
    <form hx-post hx-target="#out" hx-vals="js:{'wysiwyg': parseHtmlIntoResponse()}" hx-trigger="submit, every 300s">
        <input type="submit" name="action" value="Save"
            style="background-color: lightcyan; border: 1 black; padding: 12px; margin-bottom: 12px; cursor: pointer; border-radius: 12px; font-weight: bold; font-size: 16px;">
        <input type="submit" name="action" value="Load Default"
            style="background-color: white; border: 1 black; padding: 12px; margin-bottom: 12px; cursor: pointer; border-radius: 12px; font-weight: bold; font-size: 16px;">
        <div id="out"></div>
        <textarea id="htmledit" style="height: calc(100vh - 6rem);">
            {{$current}}
        </textarea>
    </form>
</body>

</html>
