<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DEVICE FILES') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="heading-section">
            <div class="heading-title">
                Uploaded Files
            </div>
            <div class="heading-button">
                <button id="add-new-device" data-bs-toggle="modal" data-bs-target="#fileUploadModal">
                    Analyze New File
                </button>
            </div>
        </div>
        <div class="container-fluid">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr class="table-head-row">
                        <th scope="col">S.No</th>
                        <th scope="col">File Name</th>
                        <th scope="col">Analyze</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-3">
                            1
                        </td>
                        <td>
                            temperature_data.xlsx
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                Analyze
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3">
                            2
                        </td>
                        <td>
                            smoke_data.xlsx
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                Analyze
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3">
                            3
                        </td>
                        <td>
                            motion_data.xlsx
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                Analyze
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3">
                            4
                        </td>
                        <td>
                            rfid_data.xlsx
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                Analyze
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3">
                            5
                        </td>
                        <td>
                            humidity_data.xlsx
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                Analyze
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @include('components.upload-file')
</x-app-layout>
