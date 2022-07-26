<?php

// Je recupère mon fichier json des destinations :
$jsonDestinations = file_get_contents("../public/data/destinations.json");

// utilisation du paramètre true pour obtenir un tableau associatif
$arrayDestinations = json_decode($jsonDestinations, true);