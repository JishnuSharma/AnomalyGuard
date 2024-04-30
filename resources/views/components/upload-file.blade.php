<div class="modal fade" id="fileUploadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content mod-bg-col">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">UPLOAD NEW FILE</h5>
            </div>
            <div class="modal-body">
                * The supported file formats are <b>.xlxs</b> and <b>.csv</b>
                <form method="post" id="devicefileform">
                    <div class="mb-3">
                        <input type="hidden" id="device_id_file" value={{$device_id}}>
                        <label for="deviceFile" class="input-label mt-4 mb-3">UPLOAD FILE</label><br/>
                        <input type="file" name="device_file" class="file-control" id="deviceFile">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="deviceFileUpload">Upload</button>
            </div>
        </div>
    </div>
</div>
