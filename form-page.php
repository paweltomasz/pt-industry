<?php
    // We get the infos of the form
    $user_name = $_POST['name']; // Nom / Pseudo.
    $email = $_POST['email']; // email.
    $user_message = $_POST['message']; // Message.
    //=========

    // We put the adress where the mail is going to be send.
    //P.S : "myemail@gmail.com" isn't MY email, I just put it here to hide my email :)
    $mail = 'paweltomasz01@gmail.com';
    //=========

    // We filtrate servers to avoid bugs.
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) 
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }
    //=========

    // We define the subject of the mail.
    $sujet = "Suggestion ou bug de ton site, Pokemon Reality";
    //=========

    // We create the header of the email.
    $header = "From: \"$user_name\" $email".$passage_ligne;
    $header.= "MIME-Version: 1.0".$passage_ligne;
    //==========

    // We create the message.
    $message = $message;
    //==========

    // Finally, we send the email.
    mail($mail,$sujet,$message,$header);
    //==========
?>