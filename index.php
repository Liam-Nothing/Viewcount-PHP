<?php

//Add this script in your index
session_start();
if(file_exists('total_view.txt'))
{
        $compteur_f = fopen('total_view.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('total_view.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['total_view']))
{
        $_SESSION['total_view'] = 'ne_visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);

?>