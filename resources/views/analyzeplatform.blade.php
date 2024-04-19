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
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="analysis-form">
                            <label for="file_name" class="form-label">Select File</label>
                            <select name="file_name" id="filename" class="form-select">
                                <option value="select-file-name">Select file</option>
                                <option value="select-file-name">First File</option>
                                <option value="select-file-name">Second File</option>
                                <option value="select-file-name">Third File</option>
                                <option value="select-file-name">Fourth File</option>
                                <option value="select-file-name">Fifth File</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="analysis-form">
                            <label for="epsilon" class="form-label">Epsilon Value</label>
                            <input type="text" name="epsilon" class="form-control" placeholder="Enter epsilon value">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="analysis-form">
                            <label for="min_pts" class="form-label">MinPts Value</label>
                            <input type="text" name="min_pts" class="form-control" placeholder="Enter minimum points">
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="analysis-form">
                            <label for="min_pts" class="form-label">Minimum Value</label>
                            <input type="text" name="min_pts" class="form-control" placeholder="Enter minimum value">
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="analysis-form">
                            <label for="min_pts" class="form-label">Maximum Value</label>
                            <input type="text" name="min_pts" class="form-control" placeholder="Enter maximum value">
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="analysis-form">
                            <label for="min_pts" class="form-label">Acceptable anomaly percentage</label>
                            <input type="text" name="min_pts" class="form-control" placeholder="Enter percentage value">
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
        <div class="heading-title mt-4 pt-4" id="statical-headiing">
            Statistical Derived
        </div>
        <div class="col-12 mt-4 pt-4 d-flex align-items-center justify-content-center">
            <div class="col-3 d-flex align-items-center justiy-content-center flex-column">
                <div class="metric-heading">
                    Total Number of Readings
                </div>
                <div class="metric-value">
                    18439
                </div>
            </div>
            <div class="col-3 d-flex align-items-center justiy-content-center flex-column">
                <div class="metric-heading">
                    Total Number of Anomalies
                </div>
                <div class="metric-value">
                    1774
                </div>
            </div>
            <div class="col-3 d-flex align-items-center justiy-content-center flex-column">
                <div class="metric-heading">
                    Percentage of Anomalies
                </div>
                <div class="metric-value">
                    9.6%
                </div>
            </div>
            <div class="col-3 d-flex align-items-center justiy-content-center flex-column">
                <div class="metric-heading">
                    Device Status
                </div>
                <div class="metric-value correct">
                    Functioning Properly
                </div>
            </div>
        </div>
        <div class="heading-title mt-4 pt-4" id="statical-headiing">
            Visual Derived
        </div>
        <div class="container mb-4 pb-4">
            <div class="row justify-content-center d-flex flex-column align-items-center mb-4 ">
                <div class="col-auto">
                    <img src="{{ asset('images/like1.jpg') }}" class="img-fluid static-images" width="800" alt="Title Image">
                </div>
                <div class="col-auto image-descriptions mt-4 ">
                    Scattter Plot for The Dataset
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center flex-column">
                <div class="col-auto">
                    <img src="{{ asset('images/like3.jpg') }}" class="img-fluid" width="800"  alt="Title Image">
                </div>
                <div class="col-auto image-descriptions mt-4 ">
                    Bar Chart Plot for The Dataset
                </div>
            </div>
        </div>
    </div>

    @include('components.analysis-instructions')
</x-app-layout>
