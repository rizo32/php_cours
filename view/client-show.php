{{ include('header.php', {title: 'client show'}) }}

    <main>
        <p><strong>Nom : </strong>{{client.nom}}</p>
        <p><strong>Adresse : </strong>{{client.adresse}}</p>
        <p><strong>Postal Code :</strong>{{ client.postal_code }}</p>
        <p><strong>Courriel : </strong>{{ client.courriel }}</p>
        <p><a href="{{ path }}client/edit/{{client.id}}">Modifier</a></p>
    </main>
</body>
</html>

