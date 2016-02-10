<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>

    <!-- CSSを追加 --><!-- 追加1 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>

<style type="text/css">
<!--
body {
    padding-top: 70px;
    font-size:20px;
}
-->
</style>

<body>

    @include('navbar')
    <div class="container">
        {{--
        @if (Session::has('flash_message'))
            <div class='alert alert-success'>
                {{ Session::get('flash_message') }}
            </div>
        @endif
        --}}

        @include('flash::message')
        @yield('content')
    </div>

    <!-- Scripts --><!-- 追加3 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
