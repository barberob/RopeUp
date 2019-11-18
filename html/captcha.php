<?php
	require_once('recaptcha/autoload.php');
	$recaptcha = new \ReCaptcha\ReCaptcha('6LdCL8MUAAAAAHH-ZwQNzjTvb9GG_Q4gvOj-O3Cn');
	$resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
	                  ->verify($_POST['g-recaptcha-response']);
	if ($resp->isSuccess()) {
	    // Verified!
	    var_dump('Valide');
	} else {
	    $errors = $resp->getErrorCodes();
	    var_dump('Invalide');
	}
?>