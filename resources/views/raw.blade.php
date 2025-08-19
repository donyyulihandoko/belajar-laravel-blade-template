<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        class Person
        {
            public string $name;
            public string $addres;
        }

        $person = new Person();
        $person->name = 'Dony';
        $person->addres = 'Tangerang';
    @endphp

    <ul>
        <li>{{ $person->name }}</li>
        {{ $person->addres }}
    </ul>
</body>
</html>