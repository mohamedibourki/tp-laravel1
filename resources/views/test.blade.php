<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @php
        $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
    @endphp

    @forelse ($animals as $animal)
        <li>{{ $animal }}</li>
    @empty
        <p>Aucun animal existant.</p>
    @endforelse
</body>

</html>