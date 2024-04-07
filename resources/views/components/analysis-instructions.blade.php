<div class="modal modal-xl fade" id="deviceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content mod-bg-col">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">INSTRUCTIONS</h5>
            </div>
            <div class="modal-body">
                <div class="instructions">
                    Below are the guidelines for analyzing the IoT dataset effectively, 
                    aiming to derive the most valuable insights possible.
                </div>
                <div class="file-upload">
                    <div class="file-upload-head">
                        File Upload Specification
                    </div>
                    <hr>
                    <div class="file-upload-contents">
                        <div class="point-element">
                        <i class='bx bxs-right-arrow'></i>The maximum file size which can be uploaded on the
                            platform is <b>5MB</b>
                        </div>
                        <div class="point-element">
                        <i class='bx bxs-right-arrow'></i>The file formats supported by the platform are <b>.xlsx</b>
                        and <b>.csv</b> 
                        </div>
                        <div class="point-element">
                        <i class='bx bxs-right-arrow'></i>The column names inside the file of the IOT device readings need 
                        to be named as <b>value</b> 
                        </div>
                    </div>
                </div>
                <div class="file-upload">
                    <div class="file-upload-head">
                        Parameter Specification
                    </div>
                    <hr>
                    <div class="file-upload-contents">
                        <div class="point-element">
                        <i class='bx bxs-right-arrow'></i>The <b>Epsilon</b> parameter determines how
                        far each point is from one another to be considered as neighbors
                        </div>
                        <div class="point-element">
                        <i class='bx bxs-right-arrow'></i>The <b>MinPts</b> parameter helps to specify 
                        how dense the clusters need to be for them to be considered as valid patterns
                        in the dataset. 
                        </div>
                        <div class="point-element">
                        <i class='bx bxs-right-arrow'></i>Finding the right parameters depend on hit and
                        trial , in order to find the right values needed to analyze the dataset correctly.
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="more-information">
                    For more insights on how the platform works to derive insights from the dataset 
                    <b>Click Here</b>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
