<?php

$userFirstname = $_POST['user_firstname'];
$userLastname = $_POST['user_lastname'];
$subject = $_POST['subject'];
$userMail = $_POST['user_mail'];
$userPhoneNumber = $_POST['user_phone'];
$message = $_POST['user_message'];


echo ("<h1>Merci $userFirstname $userLastname de nous avoir contacté à propos de votre sujet : $subject.</h1></br>
Un de nos conseiller vous contactera soit à l’adresse $userMail ou par téléphone au $userPhoneNumber 
dans les plus brefs délais pour traiter votre demande :<br><br>
                
$message");