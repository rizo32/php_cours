<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">
</head>
<body>
    <main>
        <h2>Saisir User</h2>
        <span class="error">{{ errors|raw }}</span>
        <form action="{{ path }}user/store" method="post">
            <label>Nom 
                <input type="text" name="nom" value="{{ user.nom }}">
            </label>
            <label>Username 
                <input type="email" name="username" value="{{ user.username }}">
            </label>
            <label>Password 
                <input type="password" name="password">
            </label>
            <label>Privilege 
                <select name="privilege_id">
                    <option value="">Select</option>
                    {% for privilege in privileges%}
                    <option value="{{ privilege.id }}" {% if privilege.id == user.privilege_id %} selected {% endif %}>{{ privilege.privilege }}</option>
                    {% endfor %}
                </select>
            </label>
            <input type="submit" value="Sauvegarder">
        </form>
    </main>
</body>
</html>