<?php
// $_GET['age'] = (int) $_GET['age'];

if ($_GET['age'] > 18 && $_GET['age'] < 130 ){
    echo  $_GET['name'] .' '. $_GET['username'].' '. intval($_GET['age']);
} else{
    echo 'L\'age n\'est pas correct';
}

?>
