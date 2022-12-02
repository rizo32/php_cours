<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">
</head>
<body>
    <main>
        <p><strong>Nom : </strong>{{client.nom}}</p>
        <p><strong>Adresse : </strong>{{client.adresse}}</p>
        <p><strong>Postal Code :</strong>{{ client.postal_code }}</p>
        <p><strong>Courriel : </strong>{{ client.courriel }}</p>
        <p><a href="{{ path }}client/edit/{{client.id}}">Modifier</a></p>
    </main>
</body>
</html>

