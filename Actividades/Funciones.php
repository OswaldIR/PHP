<?php

function checkVote($nombre, $edad){
    if ($edad >= 18){
        echo $nombre.", puedes votar.";
    } else {
        echo $nombre.", aun no tienes la mayoria de edad";
    }
}

checkVote("Ashley", 14);

?>