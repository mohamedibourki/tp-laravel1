<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Liste des notes</h1>

    <form action="/notes/show">
        <input type="text" name="search" value="{{ old('search') }}" placeholder="Entrez un nom">
        <br><br>
        <button type="submit">Rechercher</button>
    </form>

    <br>

    <table border="collapse">
        <tr>
            <th>Nom</th>
            <th>Note</th>
        </tr>
        @forelse ($notes as $nom => $note)
            @php
                $noteInt = intval($note);
                if ($noteInt > 10) {
                    $style = "background-color: green;";    
                } elseif ($noteInt >= 8 && $noteInt <= 10) {
                    $style = "background-color: orange;";
                } else {
                    $style = "background-color: red;";
                }
            @endphp
            <tr style="{{ $style }}">
                <td>{{ $nom }}</td>
                <td>{{ $note }}</td>
            </tr>
        @empty
            <tr style="background-color: orange;">
                <td colspan="2">Cet élève ne figure pas dans le tableau</td>
            </tr>
        @endforelse
    </table>
</body>

</html>
