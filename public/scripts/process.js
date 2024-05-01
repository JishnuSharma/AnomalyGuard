$(document).ready(function() {
    $('#processDataForm').submit(function(event) {
        event.preventDefault(); 
        
        let file_id = $('#filename').val();
        // Fetch the file first
        $.ajax({
            url: `/getprocessfile/${file_id}`,
            type: 'GET',
            success: function(fileData) {
                // Once the file is fetched, proceed with the main AJAX call
                let epsilon = $('#epsilon').val();
                let minPts = $('#min_pts').val();
                let minimumValue = $('#minimum_value').val();
                let maximumValue = $('#maximum_value').val();
                let acceptablePercentage = $('#acceptable_percentage').val();
                
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
                        console.log(data);
                        $('#totalReadings').text(data.total_readings);
                        $('#totalAnomalies').text(data.total_anomalies);
                        $('#percentageAnomalies').text(data.percentage_anomalies);
                        $('#feedback').text(data.feedback);
                        
                        // Create image element and set its source to the returned image data
                        // let img = $('<img />', {
                        //     src: 'data:image/png;base64,' + data.image_data // Assuming image data is returned as base64 string
                        // });
                        
                        // // Append the image to a container in your HTML
                        // $('#imageContainer').empty(); // Clear previous image, if any
                        // $('#imageContainer').append(img);

                        let img = new Image();
                        img.src = 'data:image/png;base64,' + data.image_data;
                        
                        // Append the image to a container in your HTML
                        $('#imageContainer').empty(); // Clear previous image, if any
                        $('#imageContainer').append(img);
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
