<?php

session_start();

session_destroy();


echo "Deconnexion...";

header('refresh:1; url=Connect/connexion.php');

?>