$(document).ready(function() 
{
    $('#deviceFileUpload').on('click', function(e) {
        e.preventDefault(); 

        var formData = new FormData();
        formData.append('file', $('#deviceFile')[0].files[0]);
        formData.append('device_id', parseInt($('#device_id_file').val()));
    
        $.ajax({
            url: '/savefiles',
            method: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            processData: false, 
            contentType: false,
            success: function(response) {
                $('#fileUploadModal').modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.message
                });
    
                setTimeout(() => {
                    location.reload();
                }, 3000);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    $('.deleteFile').on('click', function() {
        let fileId = $(this).data('file-id');
    
        // Show confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                $.ajax({
                    url: '/delete-file/' + fileId,
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message
                        });
        
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
});