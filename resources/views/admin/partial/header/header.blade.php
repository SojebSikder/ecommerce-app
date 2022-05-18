<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href=" {{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href=" {{ asset('assets/css/sidebar.css') }}" />

</head>

<body>



    @yield('content')