<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">
</head>
<body>
    <nav>
        <a href = "{{ path }}client">Client</a>
        <a href = "{{ path }}user">User</a>
        {% if guest %}
        <a href = "{{ path }}user/login">Login</a>
        {% else %}
        <a href = "{{ path }}user/logout">Logout</a>
        {% endif %}
    </nav>
    <header>
       <h1>{{ pageHeader }}</h1>
    </header>

    <aside>
        {% if errors is defined %}
            <span class="error">{{ errors | raw}}</span>
        {% endif %}

    </aside>