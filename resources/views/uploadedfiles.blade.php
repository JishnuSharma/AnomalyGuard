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
            <button id="add-new-device" data-bs-toggle="modal" data-bs-target="#fileUploadModal" {{ $files_data->count() >= 5 ? 'disabled' : '' }}>
                Analyze New File
            </button>
            <br/>
            <br/>
            {{ $files_data->count() >= 5 ? '*Please remove existing file to upload a new one' : '' }}
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
                    @php $counter = 1; @endphp
                    @forelse($files_data as $file)
                        <tr>
                            <td class="p-3">
                                {{ $counter }}
                            </td>
                            <td>
                                {{$file->file_name}}
                            </td>
                            <td>
                                <form action="{{ route('analyzefile') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="file_id" value="{{ $file->id }}">
                                    <input type="hidden" name="device_id" value="{{ $file->device_id }}">
                                    <button type="submit" class="btn" style="background-color:#59E4A8; color: white;">
                                        Analyze
                                    </button>
                                </form>
                            </td>
                            <td>
                                <button class="btn btn-danger deleteFile" data-file-id="{{$file->id}}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @php $counter++; @endphp
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">You dont have any files uploaded for the device</td>
                    </tr>
                    @endforelse 
                </tbody>
            </table>
        </div>
    </div>

    @include('components.upload-file')

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('scripts/files.js')}}"></script>
</x-app-layout>
