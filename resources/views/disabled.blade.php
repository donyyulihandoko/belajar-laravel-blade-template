<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disabled Blade</title>
</head>
<body>
    @{{ $name }}

    @verbatim
    <p>
         hello{{ $name }}
         hello{{ $name }}
         hello{{ $name }}c
    </p>
    @endverbatim
</body>
</html>