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
    </div>

    @include('components.analysis-instructions')
</x-app-layout>
