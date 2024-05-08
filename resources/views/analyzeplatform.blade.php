<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ANALYTICS CONSOLE') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="heading-section">
            <div class="heading-title">
                Analyze Data
            </div>
            <div class="heading-button">
                <button id="add-new-device" data-bs-toggle="modal" data-bs-target="#deviceModal">
                    Instructions
                </button>
            </div>
        </div>
        <div class="form-section col-10 px-4">
            <form action="#" id="processDataForm" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="analysis-form">
                            <label for="file_name" class="form-label">Select File</label>
                            <select name="file_id" id="filename" class="form-select">
                                    <option value="#">Select File</option>
                                @foreach($files as $file)
                                    <option value="{{$file->id}}" {{($file->id==$file_id) ? 'selected' : ''}}>{{$file->file_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="analysis-form">
                            <label for="epsilon" class="form-label">Epsilon Value</label>
                            <input type="text" id="epsilon" name="epsilon" class="form-control" placeholder="Enter epsilon value">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="analysis-form">
                            <label for="min_pts" class="form-label">MinPts Value</label>
                            <input type="text" id="min_pts" name="min_pts" class="form-control" placeholder="Enter minimum points">
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="analysis-form">
                            <label for="min_pts" class="form-label">Minimum Value</label>
                            <input type="number" id="minimum_value" name="minimum_value" class="form-control" placeholder="Enter minimum value">
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="analysis-form">
                            <label for="min_pts" class="form-label">Maximum Value</label>
                            <input type="number" id="maximum_value" name="maximum_value" class="form-control" placeholder="Enter maximum value">
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="analysis-form">
                            <label for="min_pts" class="form-label">Acceptable anomaly percentage</label>
                            <input type="number" id="acceptable_percentage" name="acceptable_percentage" class="form-control" placeholder="Enter percentage value">
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="analysis-form">
                            <button class="btn btn-success">Process Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="heading-title mt-4 pt-4 fordisplayspecification" id="statical-headiing">
            Statistical Derived
        </div>
        <div class="col-12 mt-4 pt-4 d-flex align-items-center justify-content-center fordisplayspecification">
            <div class="col-3 d-flex align-items-center justiy-content-center flex-column fordisplayspecification">
                <div class="metric-heading fordisplayspecification">
                    Total Number of Readings
                </div>
                <div class="metric-value fordisplayspecification" id="totalreadings">
                    18439
                </div>
            </div>
            <div class="col-3 d-flex align-items-center justiy-content-center flex-column fordisplayspecification">
                <div class="metric-heading fordisplayspecification">
                    Total Number of Anomalies
                </div>
                <div class="metric-value fordisplayspecification" id="totalanomalies">
                    1774
                </div>
            </div>
            <div class="col-3 d-flex align-items-center justiy-content-center flex-column fordisplayspecification">
                <div class="metric-heading fordisplayspecification">
                    Percentage of Anomalies
                </div>
                <div class="metric-value fordisplayspecification" id="percentanomalies">
                    9.6%
                </div>
            </div>
            <div class="col-3 d-flex align-items-center justiy-content-center flex-column fordisplayspecification">
                <div class="metric-heading fordisplayspecification">
                    Device Status
                </div>
                <div class="metric-value correct fordisplayspecification" id="feedback">
                    Functioning Properly
                </div>
            </div>
        </div>
        <div class="heading-title mt-4 pt-4 fordisplayspecification" id="statical-headiing">
            Visual Derived
        </div>
        <div class="container mb-4 pb-4 fordisplayspecification" >
            <div class="row justify-content-center d-flex flex-column align-items-center mb-4 ">
                <div class="col-auto result-image" id="imageContainer">
                    
                </div>
                <div class="col-auto image-descriptions mt-4 ">
                    Scatter Plot for The Dataset
                </div>
            </div>
            <!-- <div class="row justify-content-center d-flex align-items-center flex-column">
                <div class="col-auto">
                    <img src="{{ asset('images/like3.jpg') }}" class="img-fluid" width="800"  alt="Title Image">
                </div>
                <div class="col-auto image-descriptions mt-4 ">
                    Bar Chart Plot for The Dataset
                </div>
            </div> -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('scripts/process.js')}}"></script>

    @include('components.analysis-instructions')

    <x-footer/>
</x-app-layout>
