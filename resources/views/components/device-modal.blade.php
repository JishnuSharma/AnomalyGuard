<div class="modal fade" id="deviceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content mod-bg-col">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">ADD NEW DEVICE</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="device_id" class="input-label">DEVICE ID</label>
                        <input type="text" name="device_id" class="input-control" id="deviceid">

                        <label for="device_name" class="input-label">DEVICE NAME</label>
                        <input type="text" name="device_name" class="input-control" id="devicename">

                        <label for="device_type" class="input-label">DEVICE TYPE</label>
                        <select class="input-control" name="device_type" aria-label="device_type" id="devicetype">
                            <option selected disabled>Select device type</option>
                            <option value="temperature-sensor">Temperature Sensor</option>
                            <option value="humidity-sensor">Humidity Sensor</option>
                            <option value="motion-sensor">Motion Sensor</option>
                            <option value="light-sensor">Light Sensor</option>
                            <option value="proximity-sensor">Proximity Sensor</option>
                            <option value="pressure-sensor">Pressure Sensor</option>
                            <option value="gas-sensor">Gas Sensor</option>
                            <option value="water-sensor">Water Sensor</option>
                            <option value="vibration-sensor">Vibration Sensor</option>
                            <option value="smoke-sensor">Smoke Sensor</option>
                            <option value="sound-sensor">Sound Sensor</option>
                            <option value="air-quality-sensor">Air Quality Sensor</option>
                            <option value="GPS-tracker">GPS Tracker</option>
                            <option value="RFID-reader">RFID Reader</option>
                        </select>

                        <label for="data_type" class="input-label">DEVICE DATA TYPE</label>
                        <select class="input-control" name="data_type" aria-label="datatype" id="datatype">
                            <option selected>Select data type</option>
                            <option value="1">Numeric</option>
                            <option value="2">Binary</option>
                            <option value="3">Boolean</option>
                            <option value="4">Textual</option>
                        </select>

                        <label for="added_on" class="input-label">ADDED ON</label>
                        <input type="date" name="added_on" class="input-control" id="addedon">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
