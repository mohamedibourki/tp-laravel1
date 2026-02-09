<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>

<body>
    <div class="calculator">
        <form action="/calculer" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombre1">Nombre 1:</label>
                <input type="number" step="any" id="nombre1" name="nombre1" required>
            </div>

            <div class="form-group">
                <label for="operation">Operation:</label>
                <select id="operation" name="operation" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">÷</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nombre2">Nombre 2:</label>
                <input type="number" step="any" id="nombre2" name="nombre2" required>
            </div>

            <button type="submit">Calculer</button>
        </form>

        @if(isset($result))
        <div class="result">
            <h3>Résultat:</h3>
            <p>{{ $result }}</p>
        </div>
        @endif
    </div>
</body>

</html>