<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Icone--> 
	<link rel="shortcut icon" type="image/x-icon" href="../images/cabane_ropeup.png" />

	<link rel="stylesheet" type="text/css" href="../css/libs/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link rel="stylesheet" type="text/css" href="../css/contact_responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/header_principal.css">
	<link rel="stylesheet" type="text/css" href="../css/header_contact.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/header_categories_responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/footer_responsive.css">
</head>
<body>
	<!-- inclure menu -->
	<?php include("header_menu.php") ?>
		<div class="img_container">
			<h1 id="contact">contact</h1>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 145"><defs><style>.cls-1{fill:none;stroke:#FF7D00;stroke-miterlimit:10;stroke-width:5px;}</style></defs><title>Fichier 2</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><rect class="cls-1" x="2.5" y="2.5" width="70" height="140" rx="32" ry="32"/></g></g>
				</svg>
				<span></span>
			</div>
		</div>
	</header>

	
	<section>

		<div class="wrap_contact">

			<div>

				<p>
					Pour vous abonner, pour un renseignement ou pour un essai, vous pouvez nous appeler au 07 68 18 09 45 du lundi au vendredi de 9h à 17h.
					<br/>
					Toutes vos demandes mails seront traitées avec la plus grande attention et nous vous apporterons une réponse dans les heures qui suivent. 
					<br/>
					N'hésitez pas à être le plus précis possible dans vos demandes et surtout à nous proposer un rdv sur vos disponibilités pour échanger directement. 
				</p>

			</div>

			<div>
				<form action="mail.php" method="post">

					<div>
						<input type="text" name="nom" placeholder="Nom Prénom" maxlength="40" required>
						<input type="text" name="tel" placeholder="Téléphone" maxlength="15" required>			
					</div>

					<input type="email" name="mail" placeholder="Adresse Mail" maxlength="60" required>

					<div>
						<label>Pack :</label>
						<input id="com" type="checkbox" name="com">
						<label>Communication</label>
						<input id="gestion" type="checkbox" name="gestion">
						<label>Gestion</label>
<!-- 						<input type="checkbox" name="vente" disabled="disabled">
						<label>Pack vente</label> -->
					</div>
					
					<textarea placeholder="Votre message" name="message" maxlength="1000" required></textarea>
					<!-- <input type="textarea" wrap="true" name="message" placeholder="Votre message"> -->
					<div class="g-recaptcha" data-sitekey="6LdCL8MUAAAAAHG2wXoyotuvSb6ApfYfVfeBsxsb"></div>
					<br>
					<input type="submit" name="submitpost" value="Envoyer">
				</form>

			</div>	
				
		</div>
	</section>

	<!-- Footer -->
	<?php include("footer.php") ?>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="../js/libs/jquery.js"></script>
	<script src="../js/contact.js"></script>
	<script src="../js/menu.js"></script>
		
</body>
</html>