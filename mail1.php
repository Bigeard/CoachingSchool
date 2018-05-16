<?php

// $from = "cronoses.b@gmail.com";

// $to = "robin.bigeard@ynov.com";

// $subject = "Vérification PHP mail";

// $message = "PHP mail marche";

// $headers = "From:" . $from;

// mail($to,$subject,$message,$headers);

// if(mail($to,$subject,$message,$headers)){
//     echo "envoyé";
// }else{
//     echo "erreur";
// }

    // Test fonction mail();

   // *** A configurer

   $to    = "robin.bigeard@ynov.com";  
   $from  = "cronoses.b@gmail.com";  // adresse MAIL OVH liée à ton hébergement.

   // *** Laisser tel quel

   $JOUR  = date("Y-m-d");
   $HEURE = date("H:i");

   $Subject = "Test Mail - $JOUR $HEURE";

   $mail_Data = "";
   $mail_Data .= " \n";
   $mail_Data .= " \n";
   $mail_Data .= " \n";
   $mail_Data .= " \n";
   $mail_Data .= " \n";

   $mail_Data .= "Mail HTML simple  :  $Subject    
 \n";
   $mail_Data .= "
 \n";
   $mail_Data .= "bla bla bla bla 
 \n";
   $mail_Data .= "Etc.
 \n";
   $mail_Data .= " \n";
   $mail_Data .= " \n";

   $headers  = "MIME-Version: 1.0 \n";
   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
   $headers .= "From: $from  \n";
   $headers .= "Disposition-Notification-To: $from  \n";

   // Message de Priorité haute
   // -------------------------
   $headers .= "X-Priority: 1  \n";
   $headers .= "X-MSMail-Priority: High \n";

   $CR_Mail = TRUE;

   $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);
 
   if ($CR_Mail === FALSE)   echo " ### CR_Mail=$CR_Mail - Erreur envoi mail 
 \n";
   else                      echo " *** CR_Mail=$CR_Mail - Mail envoyé
 \n";  

?>
