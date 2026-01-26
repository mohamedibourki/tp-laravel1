<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .calculator {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e7f3ff;
            border-left: 4px solid #2196F3;
            border-radius: 5px;
        }
        .result h3 {
            margin: 0 0 10px 0;
            color: #2196F3;
        }
        .result p {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculatrice Web</h2>
        
        <form action="/calculer" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="nombre1">Nombre 1:</label>
                <input type="number" step="any" id="nombre1" name="nombre1" required>
            </div>
            
            <div class="form-group">
                <label for="operation">Opération:</label>
                <select id="operation" name="operation" required>
                    <option value="+">Addition (+)</option>
                    <option value="-">Soustraction (-)</option>
                    <option value="*">Multiplication (×)</option>
                    <option value="/">Division (÷)</option>
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