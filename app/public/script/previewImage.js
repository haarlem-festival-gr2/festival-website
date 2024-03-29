document.querySelectorAll('input[type="file"]').forEach(function(input) {
    input.addEventListener('change', function(event) {
        let imageInput = event.target;
        let preview = imageInput.nextElementSibling;

        if (imageInput.files && imageInput.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block'; // Make the image visible
            };

            reader.readAsDataURL(imageInput.files[0]); // Read the file and use it as the source for the image preview
        }
    });
});


