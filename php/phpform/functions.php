<?php
//Affiche le contenu de la variable $message lorsqu'elle est appelée.
function getMess($message){

    if (!empty($message)) {

    echo $message;
    }
}
return getMess($message);