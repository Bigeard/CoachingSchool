<?php

$from = "cronoses.b@gmail.com";

$to = "robin.bigeard@ynov.com";

$subject = "Vérification PHP mail";

$message = "PHP mail marche";

$headers = "From:" . $from;

mail($to,$subject,$message,$headers);

if(mail($to,$subject,$message,$headers)){
    echo "envoyé";
}else{
    echo "erreur";
}

?>