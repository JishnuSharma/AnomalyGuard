$(document).ready(function() 
{
    $('#deviceformsubmit').on('click', function(e) 
    {
        let device_id = $('#deviceid').val();
        let device_name = $('#devicename').val();
        let devicetype = $('#devicetype').val();
        let datatype = $('#datatype').val();
        let added_on = $('#addedon').val();
        let url = '';
        let requestData = {};

        if($('#action').val()=='create')
        {
            url = '/createdevice';

            requestData = { 
                device_id: device_id,
                device_name: device_name,
                devicetype: devicetype,
                datatype: datatype,
                added_on: added_on,
            }
        }
        else if($('#action').val()=='update')
        {
            url = '/updatedevice';

            let unique_id = $('#unique_id').val();

            requestData = { 
                id: unique_id,
                device_id: device_id,
                device_name: device_name,
                devicetype: devicetype,
                datatype: datatype,
                added_on: added_on,
            }
        }

        $.ajax({
            url: url, 
            method: 'POST', 
            dataType: 'json', 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: requestData,
            success: function(response) 
            {    
                $('#deviceModal').modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.message
                });

                setTimeout(() => {
                    location.reload();
                }, 3000);
            },
            error: function(xhr, status, error) 
            {
                console.error(xhr.responseText); 
            }
        });
    });

    $('.edit-button').click(function() 
    {
        let deviceId = $(this).data('device-id');

        $.ajax({
            url: `/devicedata`, 
            method: 'GET', 
            dataType: 'json', 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { 
                id: deviceId,
            },
            success: function(response) 
            {   
                $('#action').val('update');
                $('#unique_id').val(response.id);
                $('#deviceid').val(response.device_id);
                $('#devicename').val(response.device_name);
                $('#devicetype').val(response.device_type);
                $('#datatype').val(response.data_type);
                $('#addedon').val(response.added_on);
                $('#deviceModal').modal('show');
            },
            error: function(xhr, status, error) 
            {
                console.error(xhr.responseText); 
            }
        });
    });
    
});

$(document).on('click', function(event) 
{
    if (!$(event.target).closest('.modal').length) 
    {
        $('#action').val('create');
        $('#unique_id').val('');
        $('#deviceid').val('');
        $('#devicename').val('');
        $('#devicetype').val('');
        $('#datatype').val('');
        $('#addedon').val('');
    }
});
