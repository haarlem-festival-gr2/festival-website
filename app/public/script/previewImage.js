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

document.addEventListener('DOMContentLoaded', function() {
    const MAX_FILE_SIZE = 1000000;
    const form = document.querySelector('form');
    const errorDiv = document.getElementById('error');

    form.addEventListener('submit', function(e) {
        const files = document.querySelectorAll('input[type=file]');
        let totalSize = 0;
        files.forEach(function(file) {
            if (file.files[0]) {
                console.log("File size: ", file.files[0].size);
                totalSize += file.files[0].size;
            }
        });

        console.log("Total size: ", totalSize);
        if (totalSize > MAX_FILE_SIZE) {
            e.preventDefault(); // Stop the form submission
            console.log("Total file size exceeds limit");
            errorDiv.innerHTML = 'The total size of files should not exceed 1MB.';
            errorDiv.className = 'error bg-red-100 border-l-4 border-red-500 text-red-700 p-4 m-4'; // This line applies the classes
            errorDiv.style.display = 'block';
        }
    });
});

