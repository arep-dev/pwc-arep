{% extends "base.tpl" %}
{% block body %}
	<form method="post" action="login">
		<input type="text" name="username"><br>
		<input type="text" name="password"><br>
		<input type="submit" value="go">
	</form>
{% endblock %}