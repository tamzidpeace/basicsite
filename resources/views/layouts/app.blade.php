<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Acme</title>

    {{-- what is the problem --}}
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
</head>
<body>
@include('inc.navbar')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.message')
            @yield('content')
        </div>

        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>

    </div>
</div>


</body>
</html>
