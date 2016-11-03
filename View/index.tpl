{% extends "base.tpl" %}
{% block header %}
<div id="header">
	<img src="img/header.jpg">
	<div id="menu">
		<a href="index">
			<div class="menu active">
				Accueil
			</div>
		</a>
		<a href="index/blabla">
			<div class="menu">
				L'offre de l'agence
			</div>
		</a>
		<a href="equipe-contacts.php">
			<div class="menu">
				L'équipe et contacts
			</div>
		</a>
		<a href="brief-evenement.php">
			<div class="menu">
				Brief événement
			</div>
		</a>
		<a href="process-administratifs.php">
			<div class="menu">
				Process administratifs
			</div>
		</a>
		<a href="mon-espace.php">
			<div class="menu">
			 	Mon espace de collaboration
			</div>
		</a>
	</div>
</div>
{% endblock %}

{% block content %}
	<p>Ici, le contenu de la page</p>
{% endblock %}