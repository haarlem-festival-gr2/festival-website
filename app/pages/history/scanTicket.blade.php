<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code Scanner</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #preview {
            width: 300px;
            height: 300px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div id="preview"></div>
    <script src="https://cdn.jsdelivr.net/npm/instascan@2.0.0/instascan.min.js"></script>
    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

        scanner.addListener('scan', function(content) {
            // Handle scanned QR code content
            updateTicketStatus(content);
        });

        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
        });

        function updateTicketStatus(ticketCode) {
            // Send an AJAX request to your PHP backend to update the ticket status
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'update_ticket_status.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Handle successful response
                        console.log('Ticket status updated successfully.');
                    } else {
                        // Handle error response
                        console.error('Failed to update ticket status.');
                    }
                }
            };
            xhr.send('ticket_code=' + encodeURIComponent(ticketCode));
        }
    </script>
</body>
</html>
