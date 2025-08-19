<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch case</title>
</head>
<body>
    @switch($value)
        @case('A')
            Memuaskan
            @break
        @case('B')
            Bagus
            @break
        @case('C')
            Cukup
            @break
        @case('D')
            Tidak Lulus
            @break
        @default
            Salah Input Nilai
    @endswitch
</body>
</html>