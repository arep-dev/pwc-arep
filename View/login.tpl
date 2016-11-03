{% extends "base.tpl" %}
{% block header %}
<div id="header">
	<img src="img/header.jpg">
</div>
{% endblock %}
{% block content %}
	<form method="post" action="login.php">
		<p><input type="text" name="username" placeholder="Identifiant"></p>
		<p><input type="password" name="password" placeholder="Mot de passe"></p>
		<p id="btn"><input type="submit" value="Connexion"></p>
	</form>
{% endblock %}