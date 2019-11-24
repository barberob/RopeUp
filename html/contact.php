<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Icone--> 
	<link rel="shortcut icon" type="image/x-icon" href="../images/cabane_ropeup.png" />

	<link rel="stylesheet" type="text/css" href="../css/libs/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/header_principal.css">
	<link rel="stylesheet" type="text/css" href="../css/header_contact.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
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

	<section id ="formulaire">

		<div class="wrap">

			<div class="explanation">

				<p>
					Vous pouvez nous appeler au 07 68 18 09 45 du lundi au vendredi de 9h à 17h.
					<br/>
					Toutes vos demandes mails seront traitées avec la plus grande attention et nous vous apporterons une réponse dans les heures qui suivent. 
					<br/>
					N'hésitez pas à être le plus précis possible dans vos demandes et surtout à nous proposer un rdv sur vos disponibilités pour échanger directement. 
				</p>

			</div>


			<div class="form_container">
				
					<div>

						<form action="mail.php" method="post">

							<?php
								require_once('recaptcha/autoload.php');

								if (isset($_POST['submitpost'])) {
									if (isset($_POST['g-recaptcha-response'])) {
										$recaptcha = new \ReCaptcha\ReCaptcha('6LdCL8MUAAAAAHH-ZwQNzjTvb9GG_Q4gvOj-O3Cn');
										$resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
										                  ->verify($_POST['g-recaptcha-response']);
										if ($resp->isSuccess()) {
										    // Verified!
										    var_dump('Valide');
										} else {
										    $errors = $resp->getErrorCodes();
										    var_dump('Invalide');
										    var_dump($errors);
										}
										
									}
									else {
										var_dump('Captcha non rempli');
									}	
								}

							?>

							<div>
								<input type="text" name="" placeholder="Nom Prénom">
							</div>

							<div>
								<input type="text" name="" placeholder="Téléphone">			
							</div>

							<div>
								<input class="third_input" type="email" name="email" placeholder="Adresse Mail">	
							</div>

							<div class="checkboxes_container">
								<p>
									Pack :
								</p>

								<input type="checkbox" name=""> <p>Communication</p>
								<input type="checkbox" name=""> <p>Gestion</p>
							</div>

							<div>
								<input class="message" type="text" name="message" placeholder="Votre message">
							</div>

							
							

							<div class="g-recaptcha" data-sitekey="6LdCL8MUAAAAAHG2wXoyotuvSb6ApfYfVfeBsxsb"></div>
							<input type="submit" name="submitpost" value="Envoyer" class="submit_input">


						</form>

					</div>
		
			</div>
				
			
			

		</div>

	</section>
	<?php include("footer.php") ?>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script type="text/javascript" src="../js/libs/jquery.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
		
</body>
</html>