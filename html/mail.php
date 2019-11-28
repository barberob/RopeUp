<?php

	$recipient = 'domusaruon@gmail.com'; //antoine@ropeup.fr 

    if(isset($_POST['com']) && $_POST['gestion'] == NULL){
        $pack = 'Pack communication';
    }

    if(isset($_POST['gestion']) && $_POST['com'] == NULL){
        $pack = 'Pack gestion';
    }

    if(isset($_POST['gestion']) && isset($_POST['com'])){
        $pack = 'Packs com et gestion';
    }
	
    $retour = mail($recipient, 'Envoi' , 'Expéditeur : '.$_POST['nom'] ."\n". 'Numéro : ' .$_POST['tel'] ."\n". 'Message : '.$_POST['message']. $pack, 'From: '.$_POST['mail']);
    
    if ($retour) {
        echo '<h1>Votre message a bien été envoyé.</h1>';
    }
    else
    {
    	echo '<h1>Erreur</h1>';
    }

?>

