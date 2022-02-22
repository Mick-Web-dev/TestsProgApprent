<?php
$pseudo = $_POST['pseudo'];
$mail = $_POST['mail'];
$mp = $_POST['mp'];


function afficher($pseudo, $mail, $mp){
    if(isset($pseudo, $mail, $mp)){
        echo'les variables exites ';
    }
    return $result = afficher();
}
echo $result;