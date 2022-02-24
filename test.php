<?php

//Comprehension fonctionnement de php 

//----------require './php/phpform/register.php'; Aucun sens !!! appeler un fichier php qui contien du code html ?
//debut---->|----------php execute--------------->[fin] l'utilisation du require est incohérente
//si l'on suit l'execution dans le terminal via le serveur interne de php sur ce fichier : php -S localhost:5789 test.php
//on voit comment le code est executé!!
require './php/phpform/register.php';
//ici même résultat, pourquoi ?
//on est dans un fichier .php, ce fichier contient une fonction echo contenant du code html, le serveur interne de php envoi au navigateur du code html qui peut interprêter!

// un require est une fonction nécessaire pour l'appel d'un fichier contenant du code php qui a une utilité
// on l'utilise pour appeler des fonctions, des classes, ou des objets regroupées dans un fichier pour un sujet précis (CRUD / SQL)

//Dans l'application le require appelé dans le fichier result.php devrait servir appeler une fonction qui parcours un dossier ou serait contenu les formulaires et recherche par son nom le formulaire appelé par l'utilisateur. 

/**
 * function rechForm(argument){
 *      intructions
 * }
 * -> argument = 1 variable qui serait un tableau  ? au départ se tableau serait vide !
 * -> instruction1 = recherche de dossier dans le répertoire pour un nom de rep donné
 * -> instruction2 = recherche de fichier a l'interieur du dossier
 * -> instruction3 = stocker le resultat dans l'argument
 * -> instruction4 = lecture du tableau
 * -> instruction5 = recherche de données commençant par un suite de lettre précise
 * -> instruction6 = condition déterminant l'action a executer si la correspondance est trouvée.
 * ???s
 */

