<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="public/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@include('inc.header')


<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            @yield ('content')
        </div>
        <div class="col-4">
            @include('inc.aside')
        </div>
    </div>
</div>

@include('inc.footer')
</body>
</html>


