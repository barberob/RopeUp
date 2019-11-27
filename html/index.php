<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>RopeUp</title>

<!-- Icone--> 
	<link rel="shortcut icon" type="image/x-icon" href="../images/cabane_ropeup.png" />

	<link rel="stylesheet" type="text/css" href="../css/libs/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/header_principal.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/index_responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/header_responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/footer_responsive.css">
</head>

<body>	
	<!-- Header -->
	<?php include("header_menu.php") ?>
		<div class="img_container">
			<span>L’application de gestion et de communication des professionnels indépendants</span>
		</div>
	</header>
	
	<!-- First Section -->
	<section>
		<h2>QU'EST CE QUE ROPE UP ?</h2>
		<div class="wrap_index">
			<p>Rope Up ! est une application web accessible en ligne qui aide les professionnels indépendants dans leur gestion commerciale et administrative.
			C'est un support qui renforce leurs liens avec leurs prospects, leurs clients et leurs partenaires mais c'est aussi une aide efficace pour structurer leur activité et répondre sans soucis aux exigences de l'administration. Qu’ils soient au régime de micro entrepreneur ou au régime réel d'imposition, l’application est faite pour eux. <br>Bienvenue chez Rope Up ! 
			</p>
			<img src="../images/cabane_ropeup.svg" alt="Logo RopeUp">
		</div>
	</section>

	<!-- Second Section -->
	<section>
		<h2>NOS DIFFÉRENTS PRODUITS</h2>
		<div class="wrap_index">
			<div>
				<h3>Gestion</h3>
				<img src="../images/icone_gestion_provisoire.svg" alt="Logo calendrier">
				<p>Enfin un outil de gestion qui n'est pas une usine à gaz ! Simple d'utilisation et très complet, il permet de répondre aux exigences de l'administration et en même temps à celles du terrain.
				Ce PACK est supporté par une équipe dédiée à sa maintenance et à ses améliorations techniques. 
				</p>
			</div>
			<div>
				<h3>Communication</h3>
				<img src="../images/icone_communication_provisoire.svg" alt="Logo communication">
				<p>Vous souhaitez un site simple, qui vous présente et présente votre activité. 
				Vous recherchez un outil de communication peu onéreux et complet que vous faites vivre sans avoir de compétences informatiques. Ce PACK est supporté par une équipe dédiée à sa maintenance et à ses améliorations techniques. 
				</p>
			</div>
		</div>
		<p><a href="#third">En Savoir Plus</a></p>
	</section>

	<!-- Third Section -->
	<section id="third">
		<h2>LES SECTEURS D'ACTIVITÉ</h2>
		<p>Les produits de Rope Up! sont adaptés à votre domaine,<br>veuillez choisir le vôtre :</p>
		<div id="slider">
			<div>
				<img src="../images/randonneur.png" alt="Photo Randonneur">
				<a href="outdoor.php">SPORTS ET OUTDOOR</a>
			</div>
			<div>
				<img src="../images/bucheron.png" alt="Photo Bucheron">
				<a href="page_en_construction.php">ESPACES VERTS</a>
			</div>
		</div>
	</section>

	<!-- Fourth Section -->
	<section>
		<h2>NOS PARTENAIRES</h2>
		<div class="wrap_index">
			<div>
				<a href="https://www.bpaura.banquepopulaire.fr/portailinternet/Pages/default.aspx" target="_blank"><img src="../images/partenaires/logo_banque_populaire.png" alt="Logo Banque populaire"></a>
				<a href="https://www.initiative-grand-annecy.fr" target="_blank"><img src="../images/partenaires/logo_initiative.png" alt="Logo Initiative"></a>
				<a href="https://lafrenchtech.com/fr/" target="_blank"><img src="../images/partenaires/logo_french_tech.jpg" alt="Logo La French Tech"></a>
				<a href="http://inovizi.com" target="_blank"><img src="../images/partenaires/logo_inovizi.png" alt="Logo Inovizi"></a>
				<a href="https://www.auvergnerhonealpes.fr" target="_blank"><img src="../images/partenaires/logo_auvergne_rhone_alpes.png" alt="Logo Region Auvergne Rhône Alpes"></a>
				<a href="http://greta-viva5.org" target="_blank"><img src="../images/partenaires/logo_greta.png" alt="Logo Greta"></a>
				<a href="https://www.outdoorsportsvalley.org" target="_blank"><img src="../images/partenaires/logo_osv.png" alt="Logo OSV"></a>
				<a href="https://www.prepa-sports.com" target="_blank"><img src="../images/partenaires/logo_prepa_sport.png" alt="Logo Prepa Sport"></a>
				<a href="https://www.syndicat-sim.com" target="_blank"><img src="../images/partenaires/logo_sim.png" alt="Logo SIM"></a>
				<a href="http://www.snapec.org" target="_blank"><img src="../images/partenaires/logo_syndicat_escalade.png" alt="Logo Syndicat Professionnels Escalade et Canyon"></a>
				<a href="https://sngm.com" target="_blank"><img src="../images/partenaires/logo_syndicat_guide.png" alt="Logo Syndicat Guide de Montagne"></a>
				<a href="https://snam.pro" target="_blank"><img src="../images/partenaires/logo_syndicat_accompagnateur_montagne.png" alt="Logo Syndicat Accompagnateur en Montagne"></a>
				<a href="https://snam.pro" target="_blank"><img src="../images/partenaires/logo_credit_agricole.svg" alt="Logo Crédit Agricole"></a>
			</div>
		</div>
		
	</section>

	<?php include 'footer.php'; ?>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
</body>
</html>