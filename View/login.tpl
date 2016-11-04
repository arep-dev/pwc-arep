{% extends "base.tpl" %}
{% block header %}
<div id="header">
	<img src="img/header.jpg">
</div>
{% endblock %}
{% block content %}
<<<<<<< HEAD
	<form method="post" action="login.php">
=======
	<form method="post" action="login">
>>>>>>> 2fe376e433643b245d23c8ae9165356c7061beab
		<p><input type="text" name="username" placeholder="Identifiant"></p>
		<p><input type="password" name="password" placeholder="Mot de passe"></p>
		<p id="btn"><input type="submit" value="Connexion"></p>
	</form>
{% endblock %}