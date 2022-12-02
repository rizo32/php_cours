<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <link rel="stylesheet" href="{{ path }}css\style.css">
</head>
<body>
    <main>
        
        <h2>Saisir</h2>
        <span class="error">{{ errors|raw }}</span>
        
        <form action="{{ path }}client/store" method="post">
            <label>Nom 
                <input type="text" name="nom" value="{{ data.nom }}">
            </label>
            <label>Adresse
                <input type="text" name="adresse" value="{{ data.adresse }}">
            </label>
            <label>Postal Code
                <input type="text" name="postal_code" value="{{ data.postal_code }}">
            </label>
            <label>Courriel
                <input type="email" name="courriel" value="{{ data.courriel }}">
            </label>
            <label>Phone
                <input type="text" name="phone" value="{{ data.phone }}">
            </label>
            <label>Ville
                <input type="text" name="ville" value="{{ data.ville }}">
            </label>
            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>