<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Go PKL</title>

    <!-- Select 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-white dark:bg-gray-900">
        <div class="flex flex-1">
            @include('layouts.admin.sidebar')

            <div class="w-full">
                @if (Session::has('success'))
                    <div class="p-3">
                        <div class="text-white rounded-md alert bg-primary">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                    <?php
                    header('refresh: 1');
                    ?>
                @endif

                @if (Session::has('error'))
                    <div class="p-3">
                        <div class="text-white rounded-md alert bg-error">
                            {{ Session::get('error') }}
                        </div>
                    </div>
                    <?php
                    header('refresh: 3');
                    ?>
                @endif

                <!-- Page Content -->
                @yield('content')

                <!-- Page Footer -->
                @include('layouts.user.footer')

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>

</html>
