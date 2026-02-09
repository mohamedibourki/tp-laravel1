<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
</head>

<body>
    <div>
        <h2>Formulaire</h2>
        <form action="/inscription/afficher" method="POST">
            @csrf
            <label>Nom Complet</label>
            <div>
                <div>
                    <input type="text" name="prenom" placeholder="Prenom">
                </div>
                <div>
                    <input type="text" name="nom" placeholder="Nom">
                </div>
            </div>
            
            <div>
                <div>
                    <label>Sexe</label> <select name="sexe">
                        <option value="Femme">Femme</option>
                        <option value="Homme">Homme</option>
                    </select>
                </div>
                <div>
                    <label>E-mail</label> <input type="email" name="email" placeholder="exemple@exemple.com">
                    <br>
                    <small>monnom@exemple.com</small>
                </div>
            </div>

            <br>

            <button type="submit">Soumettre l'inscription</button>
        </form>
    </div>

    @if(isset($data))
    <div>
        <h3>Récapitulatif</h3>
        <ul>
            <li>Votre prenom: {{ $data['prenom'] }}</li>
            <li>Votre nom: {{ $data['nom'] }}</li>
            <li>Votre sexe: {{ $data['sexe'] }}</li>
            <li>Votre email: {{ $data['email'] }}</li>
        </ul>
    </div>
    @endif
</body>

</html>