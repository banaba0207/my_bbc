<!-- app/resources/view/contact.blade.php -->

<!DOCTYPE HTML>
<html>
<head>
    <title>Contact</title>
</head>
<body>
    <h1>Contact me!</h1>
    @for ($i = 0; $i < 10; ++$i)
        Number is  {{ $i }} <br>
    @endfor
</body>
</html>
