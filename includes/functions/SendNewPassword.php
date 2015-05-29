<?php

/**
 * SendNewPassword.php
 *
 * @version 1.0
 * @copyright 2008 by Tom1991 for XNova
 */



function sendnewpassword($mail)
{

  	$ExistMail = doquery("SELECT `email` FROM {{table}} WHERE `email` = '". $mail ."' LIMIT 1;", 'users', true);

    if (empty($ExistMail['email']))	
	{
	   message('La direccion es inexistente');
	}

	else
	{
		//Possible characters for a new password
    	$Caracters="aazertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN1234567890";

    	$Count=strlen($Caracters);

    	$NewPass="";
    	$Taille=6;


    	srand((double)microtime()*1000000);

     	for($i=0;$i<$Taille;$i++)
		{
			$CaracterBoucle=rand(0,$Count-1);

      		$NewPass=$NewPass.substr($Caracters,$CaracterBoucle,1);
     	}

    	//On va maintenant l'envoyer au destinataire
    	$Title = "OBTgame recuperacion de contrase&ntilde;a ";
    	$Body = "Aqui tu nueva contrase&ntilde;a de OBTgame : ";
    	$Body .= $NewPass;

    	$result = mail( $mail , $Title , $Body );

    	//Verifying that could send email

		if ($result==TRUE)
		{
    		$NewPassSql = md5($NewPass);

    		$QryPassChange = "UPDATE {{table}} SET ";
    		$QryPassChange .= "`password` ='". $NewPassSql ."' ";
    		$QryPassChange .= "WHERE `email`='". $mail ."' LIMIT 1;";

    		doquery( $QryPassChange, 'users');
		}
		else
			message('No se ha podido enviar ningun email a la direccion');

    }



}



?>
