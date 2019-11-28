<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>RopeUp</title>

	<!-- Icone--> 
	<link rel="shortcut icon" type="image/x-icon" href="../images/cabane_ropeup.png" />

	<link rel="stylesheet" type="text/css" href="../css/libs/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/header_principal.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/header_responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/footer_responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/post-form.css">
</head>

<!-- Header -->
<?php include("header_menu.php") ;
$error = $_GET['error'];?>
<section>


	<div id="wrappostform">

		<div id="redirection">
			<h3 class="form">Il y a eu un problème lors de l'envoi de votre formulaire,

			<?php echo $error;?> veuillez attendre et réessayer après <h3 id="counter">5</h3> <h3 class="form"> secondes</h3></h3>
		</div>


		<h3 id="boutonform"> Ou appuyez sur ce bouton ! </h3><div id="bouton"> <a href="index.php"><span id="home">Accueil</span></a></div>




	</div>


</section>
<?php include ('footer.php'); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
<script type="text/javascript" src="../js/menu.js"></script>
<script type="text/javascript" src="../js/redirect.js"></script>
</body>
</html>