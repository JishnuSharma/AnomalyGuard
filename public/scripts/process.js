$(document).ready(function() 
{
    $('.fordisplayspecification').css({
        'display': 'none'
    });
    

    $('#processDataForm').submit(function(event) {
        event.preventDefault(); 
        
        let file_id = $('#filename').val();

        $.ajax({
            url: `/getprocessfile/${file_id}`,
            type: 'GET',
            success: function(fileData) 
            {
                let epsilon = parseFloat($('#epsilon').val());
                let minPts = parseFloat($('#min_pts').val());
                let minimumValue = parseInt($('#minimum_value').val());
                let maximumValue = parseFloat($('#maximum_value').val());
                let acceptablePercentage = parseFloat($('#acceptable_percentage').val());
                
                // Construct FormData object to append form fields and file
                let formData = new FormData();
                formData.append('epsilon', epsilon);
                formData.append('min_pts', minPts);
                formData.append('minimum_value', minimumValue);
                formData.append('maximum_value', maximumValue);
                formData.append('acceptable_percentage', acceptablePercentage);
                
                // Create a Blob object from fileData
                let blob = new Blob([fileData], { type: 'application/octet-stream' });
                
                // Append the Blob object to FormData
                formData.append('csv_file', blob, 'uploaded_file.csv');
                
                // Make the main AJAX call to send the data to the API along with the file
                $.ajax({
                    url: 'http://127.0.0.1:5000/iotapi/detect_anomalies',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {

                        $('.fordisplayspecification').css({
                            'display': 'block'
                        });

                        console.log(data);
                        $('#totalreadings').text(data.total_readings);
                        $('#totalanomalies').text(data.total_anomalies);
                        $('#percentanomalies').text(data.percentage_anomalies.toFixed(4));
                        
                        let feedback = data.feedback;

                        if (feedback === "Requires Attention") 
                        {
                            $('#feedback').css('background-color', 'red'); 
                            $('#feedback').text(data.feedback);
                        } 
                        else if (feedback === "Stable") 
                        {
                            $('#feedback').css('background-color', '#b9ffa6'); 
                            $('#feedback').text(data.feedback);
                        }

                        let img = new Image();
                        img.src = 'data:image/png;base64,' + data.image_data;
                        
                        $('#imageContainer').empty(); 
                        $('#imageContainer').append(img)
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching file:', error);
            }
        });
    });
});
