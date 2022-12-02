{{ include('header.php', {title: 'Login'}) }}

    <main>
        <h2>Connecter</h2>
        <span class="error">{{ errors|raw }}</span>
        <form action="{{ path }}user/auth" method="post">
            <label>Username 
                <input type="email" name="username" value="{{ user.username }}">
            </label>
            <label>Password 
                <input type="password" name="password">
            </label>
            <input type="submit" value="Connecter">
        </form>
    </main>
</body>
</html>