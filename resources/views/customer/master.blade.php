<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="zamanshops">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="zamanshops">
    <title>zamanshops</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/trolley.png') }}">
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('assets/css/style.css') }}" as="style">

</head>

<body class="index-bg-gray">
    @include('customer.compoents.header_top')
    @include('customer.compoents.mobile_menu')

    @yield('customer')

    @include('customer.compoents.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script defer src="{{ asset('assets/js/plugins.js') }}"></script>
    <script defer src="{{ asset('assets/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
