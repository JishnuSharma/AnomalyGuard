<div class="modal fade" id="deviceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content mod-bg-col">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">ADD NEW DEVICE</h5>
            </div>
            <div class="modal-body">
                <form method="post" id="deviceforms">
                    <div class="mb-3">
                        <input type="hidden" id="action" value="create">
                        <input type="hidden" id="unique_id" value="">

                        <label for="device_id" class="input-label">DEVICE ID</label>
                        <input type="text" name="device_id" class="input-control" id="deviceid">

                        <label for="device_name" class="input-label">DEVICE NAME</label>
                        <input type="text" name="device_name" class="input-control" id="devicename">

                        <label for="device_type" class="input-label">DEVICE TYPE</label>
                        <select class="input-control" name="device_type" aria-label="device_type" id="devicetype">
                            <option selected disabled>Select device type</option>
                            <option value="Temperature Sensor">Temperature Sensor</option>
                            <option value="Humidity Sensor">Humidity Sensor</option>
                            <option value="Motion Sensor">Motion Sensor</option>
                            <option value="Light Sensor">Light Sensor</option>
                            <option value="Proximity Sensor">Proximity Sensor</option>
                            <option value="Pressure Sensor">Pressure Sensor</option>
                            <option value="Gas Sensor">Gas Sensor</option>
                            <option value="Water Sensor">Water Sensor</option>
                            <option value="Vibration Sensor">Vibration Sensor</option>
                            <option value="Smoke Sensor">Smoke Sensor</option>
                            <option value="Sound Sensor">Sound Sensor</option>
                            <option value="Air Quality Sensor">Air Quality Sensor</option>
                            <option value="GPS Tracker">GPS Tracker</option>
                            <option value="RFID Reader">RFID Reader</option>
                        </select>

                        <label for="data_type" class="input-label">DEVICE DATA TYPE</label>
                        <select class="input-control" name="data_type" aria-label="datatype" id="datatype">
                            <option selected>Select data type</option>
                            <option value="Numeric">Numeric</option>
                            <option value="Binary">Binary</option>
                            <option value="Boolean">Boolean</option>
                            <option value="Textual">Textual</option>
                        </select>

                        <label for="added_on" class="input-label">ADDED ON</label>
                        <input type="date" name="added_on" class="input-control" id="addedon">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn text-light" style="background-color: #59E4A8;" id="deviceformsubmit">Save changes</button>
            </div>
        </div>
    </div>
</div>
