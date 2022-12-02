<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">

</head>
<body>
    <header>
        Liste de Client
    </header>
    <main>
        <section>
            <h2>{{ client_list }}</h2>
            <a href="{{ path }}client/create">Ajouter</a>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>email</th> 
                        <th>edit</th>                       
                    </tr> 
                </thead>
                <tbody>
                    {% for client in clients %}
                    <tr>
                        <td>{{ client.nom }}</td>
                        <td>{{ client.courriel }}</td>
                        <td><a href="{{ path }}client/show/{{ client.id}}">Vue</a></td>
                    </tr>
                    {% endfor %}
                </tbody>
                
            </table>
        </section>
    </main>
    <footer>
        Tous les droits
    </footer>
</body>
</html>