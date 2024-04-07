<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        @include('layouts.guestnavigation') 
        
        <div class="intro-container">
            <div class="intro-section">
                <div class="intro-image">
                    <img src="{{ asset('images/intro-image.jpg') }}" alt="Introduction image" width=800 height=800>
                </div>
                <div class="intro-text">
                    <div class="intro-head">
                        AnomalyGuard
                    </div>
                    <div class="intro-content">
                        Your ultimate solution for real-time monitoring and analysis 
                        of Internet of Things (IoT) devices. Our platform offers cutting-edge technology powered by 
                        advanced algorithms to detect anomalies and uncover valuable insights from your IoT data 
                        streams. Whether you're a researcher, a business owner, or an enthusiast in the IoT field, 
                        our intuitive interface and robust analytics tools empower you to optimize device 
                        performance, enhance security, and make data-driven decisions with confidence. Join us on 
                        the forefront of IoT innovation and revolutionize the way you interact with your connected 
                        devices.
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-section">
            <div class="feature-section-head">
                FEATURES WE OFFER
            </div>
            <div class="feature-section-contnet">
    <div class="feature-section">
        <div class="feature">
            <div class="feature-number">1</div>
            <div class="feature-content">
                A robust anomaly detection algorithm which helps to identify anomalies in your IOT dataset.
            </div>
        </div>
        <div class="feature">
            <div class="feature-number">2</div>
            <div class="feature-content">
                A robust anomaly detection algorithm which helps to identify anomalies in your IOT dataset.
            </div>
        </div>
        <div class="feature">
            <div class="feature-number">3</div>
            <div class="feature-content">
                A robust anomaly detection algorithm which helps to identify anomalies in your IOT dataset.
            </div>
        </div>
    </div>
    <div class="feature-section">
        <div class="feature">
            <div class="feature-number">4</div>
            <div class="feature-content">
                A robust anomaly detection algorithm which helps to identify anomalies in your IOT dataset.
            </div>
        </div>
        <div class="feature">
            <div class="feature-number">5</div>
            <div class="feature-content">
                A robust anomaly detection algorithm which helps to identify anomalies in your IOT dataset.
            </div>
        </div>
        <div class="feature">
            <div class="feature-number">6</div>
            <div class="feature-content">
                A robust anomaly detection algorithm which helps to identify anomalies in your IOT dataset.
            </div>
        </div>
    </div>
</div>

        </div>
    </body>
</html>
