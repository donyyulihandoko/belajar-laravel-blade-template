<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Blade</title>
</head>
<body>
    @if (count($hobbies) == 1)
        <h1>i have one hobby!</h1>
    @elseif(count($hobbies) > 1)
        <h1>i have mutltiple hobbies!</h1>
    @else
        <h1>i dont have hobby!</h1>
    @endif
</body>
</html>