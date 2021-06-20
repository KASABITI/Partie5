<?php
    if (isset($_GET['serveur']) && isset($_GET['langage'])){
        echo htmlspecialchars($_GET['serveur']. ' et '. $_GET['langage']);
    }else{
        echo 'ERREUR !!!!';
    }
?>