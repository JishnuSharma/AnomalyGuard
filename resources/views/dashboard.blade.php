<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="heading-section">
            <div class="heading-title">
                MY DEVICES
            </div>
            <div class="heading-button">
                <button id="add-new-device" data-bs-toggle="modal" data-bs-target="#deviceModal">
                    Add New Device
                </button>
            </div>
        </div>
        <div class="device-section">
            @forelse($device_data as $device)
                <div class="my-device">
                    <div class="device-image">
                        <img src="{{ asset('images/' . rand(1, 7) . '.jpg') }}" id="titleimage" alt="Title Image">
                    </div>
                    <div class="device-content">
                        <div class="content-element">
                            <div class="prop-title">ID</div>{{$device->device_id}}
                        </div>
                        <div class="horizontal"></div>
                        <div class="content-element">
                            <div class="prop-title">NAME</div>{{$device->device_name}}
                        </div>
                        <div class="horizontal"></div>
                        <div class="content-element">
                            <div class="prop-title">TYPE</div>{{$device->device_type}}
                        </div>
                        <div class="horizontal"></div>
                        <div class="content-element">
                            <div class="prop-title">DATA TYPE</div>{{$device->data_type}}
                        </div>
                        <div class="horizontal"></div>

                        <div class="content-element">
                            <div class="prop-title">ADDED ON</div>{{$device->added_on}}
                        </div>
                        <div class="horizontal"></div>
                        <div class="button-section">
                            <div class="button-container">
                                <button class="edit-button" data-bs-toggle="modal" data-device-id="{{ $device->id }}" data-bs-target="#deviceModal">
                                    Edit Details
                                </button>
                                <a id="analyze-button" href="{{ route('filelisting',['id'=> $device->id]) }}">Analyze</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="no-devices">You dont have any devices yet</div>
            @endforelse
        </div>
    </div>

    @include('components.device-modal')

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('scripts/dashboard.js') }}"></script>

    <x-footer/>
</x-app-layout>
