<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    
    <!-- Custom Fonts -->
    <link href="{{ asset('public/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    
    <!-- Chart and CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/charts/c3charts/c3.css') }}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/libs/css/style.css') }}">
    
    <title>ADMIN PANEL FOR THIS WEBSITE</title>
    
    <style>
        .text-yellow {
            color: #FFC750;
        }

        .text-red {
            color: red;
        }

        .text-green {
            color: green;
        }
    </style>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <!-- Navbar -->
        <header class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <h1 class="h1">
                    <a href="{{route('adduser')}}" class="navbar-brand" style="color: black;">
                        <span class="span" style="color: hsl(238.15deg 75.39% 64.8%);">WELCOME TO PAGE</span>
                    </a>
                </h1>
            </nav>
        </header>

        <!-- Sidebar -->
        @include('home.sidenav')

      
</body>

</html>
