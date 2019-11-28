<?php

//Appelle le fichier exécutant le captcha
  require('recaptcha/autoload.php');

  //Si le submit bouton est appuyé, vérifier si le coche du captcha existe
  if(isset($_POST['submitpost'])) {
    if(isset($_POST['g-recaptcha-response'])) {

    //le captcha est défini par sa clé
      $recaptcha = new \ReCaptcha\ReCaptcha('6LdCL8MUAAAAAHH-ZwQNzjTvb9GG_Q4gvOj-O3Cn');
      //le captcha vérifie que la réponse est correcte
      $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
      //Si la réponse est un succés, le captcha est valide, sinon, il doit montrer les erreurs occasionnées
      if ($resp->isSuccess()) {
          var_dump('Captcha Valide');
            if (isset($_POST['nom']) && !empty($_POST['nom'])  && isset($_POST['tel']) && !empty($_POST['tel']) && isset($_POST['message']) && !empty($_POST['message']) && isset($_POST['mail']) && !empty($_POST['mail']) && (isset($_POST['com']) && !empty($_POST['com']) || isset($_POST['gestion']) && !empty($_POST['gestion']))){

                $recipient = 'domusaruon@gmail.com'; //antoine@ropeup.fr

                //samson@ropeup.fr
                //06 34 22 76 04

                //limiter le nombre de caractères en 30 maximum par exemple
            
               $sender = 'Expéditeur : '.$_POST['nom'];
                        //ne mettre que des chiffres dans ce champ
                $tel = 'Numéro : ' .$_POST['tel'];

                $message = 'Message : '.$_POST['message'];

                $header =  'From: '.$_POST['mail'];
                
                //Si pack com est coché/existant et pack gestion ne l'est pas, alors $pack s'appelle pack communication.
                if(isset($_POST['com'])){
                    $pack = 'Pack communication';
                }

                if(isset($_POST['gestion'])){
                    $pack = 'Pack gestion';
                }

                if(isset($_POST['gestion']) && isset($_POST['com'])){
                    $pack = 'Packs com et gestion';
                }
                
                $retour = mail($recipient, 'Envoi' , $sender .' '. $tel .' '. $message .' '. $pack, $header);
                    
                if ($retour) {
                    echo '<h1>Votre message a bien été envoyé.</h1>';
                }
                else
                {
                    echo '<h1>Erreur</h1>';
                }
            } else {
                if (empty($_POST['nom'])) {
                     echo 'Veuillez remplir le champ nom';
                }
                if (empty($_POST['tel'])) {
                    echo 'Veuillez remplir le champ téléphone';
                }
                if (empty($_POST['mail'])) {
                    echo 'Veuillez remplir le champ mail';
                }
                if (empty($_POST['message'])) {
                    echo 'Veuillez remplir le champ message';
                }

                if(empty($_POST['gestion']) && empty($_POST['com'])) {
                    echo "Veuillez choisir une offre";
                }

            }

      } else {
          $errors = $resp->getErrorCodes();
          var_dump('Captcha Invalide');
          var_dump($errors);
      }
    } else { //Si le captcha n'est pas rempli, c'est indiqué ici
      var_dump('Captcha non rempli');
    }
  }


?>

