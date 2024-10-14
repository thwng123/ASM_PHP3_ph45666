<!DOCTYPE html>
<html lang="en">

<head>
    <title>BookSaw - Free Book Store HTML CSS Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    @include('client.layouts.partials.css')

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    <div id="header-wrap">
        @include('client.layouts.partials.top-content')

        
        @include('client.layouts.partials.header')

    </div><!--header-wrap-->


    @yield('content')


    @include('client.layouts.partials.footer')

    @include('client.layouts.partials.js')
</body>

</html>
