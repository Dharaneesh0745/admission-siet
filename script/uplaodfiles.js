$(document).ready(function() {
    $('.uploadButton').click(function() {
        var fileInputId = $(this).data('file-input');
        var fileInput = $('#' + fileInputId)[0];
        var mobileNumber = $('#MobileNumber').val();

        // console.log('File Input ID:', fileInputId);
        // console.log('Mobile Number:', mobileNumber);
        // console.log('File Selected:', fileInput.files.length > 0);

        if (fileInput.files.length > 0 && mobileNumber) {
            var formData = new FormData();
            formData.append('file', fileInput.files[0]);
            formData.append('column', fileInputId);
            formData.append('MobileNumber', mobileNumber);

            $.ajax({
                url: 'pdf-upload.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#response').append('<p>' + response + '</p>');
                    // console.log('Response:', response);
                },
                error: function(xhr, status, error) {
                    $('#response').append('<p>An error occurred: ' + error + '</p>');
                    // console.log('Error:', error);
                }
            });
        } else {
            alert('Please select a file to upload and provide a mobile number.');
        }
    });
});
