<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My BBS</title>

    <!-- CSSを追加 --><!-- 追加1 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Use lightbox -->
    <link href="http://localhost/my_bbs/public/src/lightbox2/dist/css/lightbox.css" type="text/css" rel="stylesheet" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- For スマホ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style type="text/css">
<!--
body {
    padding-top: 70px;
    font-size:20px;
}
<!-- For スマホ -->
img {
     max-width: 100%;
     height: auto;
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
    <script src="http://localhost/my_bbs/public/src/lightbox2/dist/js/lightbox.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
