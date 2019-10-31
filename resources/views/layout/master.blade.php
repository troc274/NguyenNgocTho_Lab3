<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trang chu</title>
    <link href="{{asset('css/page.css')}}" rel="stylesheet">
</head>
<body>
    @section('header')
        <header>
            HEADER
        </header>
    @section('sidebar')


    @show

    <div class="container">
        @yield('content')
    </div>
@section('footer')
    <footer>
            FOOTER
        </footer>
</body>
</html>