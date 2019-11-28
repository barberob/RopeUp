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
			<h1>contact</h1>
		</div>
	</header>

	
	<section>

		<div class="wrap_contact">

			<div>

				<p>
					Vous pouvez nous appeler au 07 68 18 09 45 du lundi au vendredi de 9h à 17h.
					<br/>
					Toutes vos demandes mails seront traitées avec la plus grande attention et nous vous apporterons une réponse dans les heures qui suivent. 
					<br/>
					N'hésitez pas à être le plus précis possible dans vos demandes et surtout à nous proposer un rdv sur vos disponibilités pour échanger directement. 
				</p>

			</div>

			<div>
				<form action="mail.php" method="post">

					<?php
					  require('recaptcha/autoload.php');
					  if(isset($_POST['submitpost'])) {
					    if(isset($_POST['g-recaptcha-response'])) {
					      $recaptcha = new \ReCaptcha\ReCaptcha('6LdCL8MUAAAAAHH-ZwQNzjTvb9GG_Q4gvOj-O3Cn');
					      $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
					      if ($resp->isSuccess()) {
					          var_dump('Captcha Valide');
					      } else {
					          $errors = $resp->getErrorCodes();
					          var_dump('Captcha Invalide');
					          var_dump($errors);
					      }
					    } else {
					      var_dump('Captcha non rempli');
					    }
					  }
					?>

					<div>
						<input type="text" name="nom" placeholder="Nom Prénom">
						<input type="text" name="tel" placeholder="Téléphone">			
					</div>

					<input type="email" name="mail" placeholder="Adresse Mail">

					<div>
						<p>Pack :</p>
						<input type="checkbox" name="com">
						<p>Communication</p>
						<input type="checkbox" name="gestion">
						<p>Gestion</p>
					</div>
					
					<textarea placeholder="Votre message" name="message"></textarea>
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
	<script type="text/javascript" src="../js/libs/jquery.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
		
</body>
</html>