{{ include('header.php', {title: 'Liste de clients', pageHeader: 'Index'}) }}

    <main>
        <section>
            {% if session.privilege_id == 1 %}
                <a href="{{ path }}client/create">Ajouter</a>
            {% endif %}
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