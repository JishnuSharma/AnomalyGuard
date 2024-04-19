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
            <div class="my-device">
                <div class="device-image">
                    <img src="{{ asset('images/7.jpg') }}" id="titleimage" alt="Title Image">
                </div>
                <div class="device-content">
                    <div class="content-element">
                        <div class="prop-title">ID</div>EER433E
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">NAME</div>Bedroom Temperature Seonor
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">TYPE</div>Temperature Sensor
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">DATA TYPE</div>Numeric
                    </div>
                    <div class="horizontal"></div>

                    <div class="content-element">
                        <div class="prop-title">ADDED ON</div>07-04-2024
                    </div>
                    <div class="horizontal"></div>
                    <div class="button-section">
                        <div class="button-container">
                            <button id="edit-button" data-bs-toggle="modal" data-bs-target="#deviceModal">
                                Edit Details
                            </button>
                            <button id="analyze-button">
                                Analyze
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-device">
                <div class="device-image">
                    <img src="{{ asset('images/6.jpg') }}" id="titleimage" alt="Title Image">
                </div>
                <div class="device-content">
                    <div class="content-element">
                        <div class="prop-title">ID</div>FFRER43
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">NAME</div>Industry Humidity Seonor
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">TYPE</div>Humidity Sensor
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">DATA TYPE</div>Numeric
                    </div>
                    <div class="horizontal"></div>

                    <div class="content-element">
                        <div class="prop-title">ADDED ON</div>05-04-2024
                    </div>
                    <div class="horizontal"></div>
                    <div class="button-section">
                        <div class="button-container">
                            <button id="edit-button" data-bs-toggle="modal" data-bs-target="#deviceModal">
                                Edit Details
                            </button>
                            <button id="analyze-button">
                                Analyze
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-device">
                <div class="device-image">
                    <img src="{{ asset('images/5.jpg') }}" id="titleimage" alt="Title Image">
                </div>
                <div class="device-content">
                    <div class="content-element">
                        <div class="prop-title">ID</div>CCDERE3
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">NAME</div>Garage Smoke Seonor
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">TYPE</div>Smoke Sensor
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">DATA TYPE</div>Numeric
                    </div>
                    <div class="horizontal"></div>

                    <div class="content-element">
                        <div class="prop-title">ADDED ON</div>09-04-2024
                    </div>
                    <div class="horizontal"></div>
                    <div class="button-section">
                        <div class="button-container">
                            <button id="edit-button" data-bs-toggle="modal" data-bs-target="#deviceModal">
                                Edit Details
                            </button>
                            <button id="analyze-button">
                                Analyze
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-device">
                <div class="device-image">
                    <img src="{{ asset('images/4.jpg') }}" id="titleimage" alt="Title Image">
                </div>
                <div class="device-content">
                    <div class="content-element">
                        <div class="prop-title">ID</div>KKRRKES
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">NAME</div>Car Temperature Sensor
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">TYPE</div>Temperature Sensor
                    </div>
                    <div class="horizontal"></div>
                    <div class="content-element">
                        <div class="prop-title">DATA TYPE</div>Numeric
                    </div>
                    <div class="horizontal"></div>

                    <div class="content-element">
                        <div class="prop-title">ADDED ON</div>10-04-2024
                    </div>
                    <div class="horizontal"></div>
                    <div class="button-section">
                        <div class="button-container">
                            <button id="edit-button" data-bs-toggle="modal" data-bs-target="#deviceModal">
                                Edit Details
                            </button>
                            <button id="analyze-button">
                                Analyze
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.device-modal')
</x-app-layout>
