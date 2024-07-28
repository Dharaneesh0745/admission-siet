$(document).ready(function() {
    $('.uploadButton').click(function() {
        var fileInputName = $(this).data('file-input');
        var fileInput = $('input[name="' + fileInputName + '"]')[0];
        if(fileInputName=="UGTotalMark10Document"||fileInputName=="LETotalMark10Document"||fileInputName=="PGTotalMark10Document"){
            fileInputName = "TotalMark10Document";
        }
        if(fileInputName=="UGTotalMark12Document"||fileInputName=="LETotalMark12Document"||fileInputName=="PGTotalMark12Document"){
            fileInputName = "TotalMark12Document";
        }
        var mobileNumber = $('#StudentMobileNo').val();

        console.log('File Input Name:', fileInputName);
        console.log('File Input Element:', fileInput);
        console.log('Mobile Number:', mobileNumber);
        console.log('File Selected:', fileInput.files.length > 0);

        if (fileInput.files.length > 0 && mobileNumber) {
            var formData = new FormData();
            formData.append('file', fileInput.files[0]);
            formData.append('column', fileInputName);
            formData.append('StudentMobileNo', mobileNumber);

            $.ajax({
                url: './pdf-upload.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log('Response:', response);
                },
                error: function(xhr, status, error) {
                    $('#response').append('<p>An error occurred: ' + error + '</p>');
                    console.log('Error:', error);
                }
            });
        } else {
            alert('Please select a file to upload and provide a mobile number.');
        }
    });
});
