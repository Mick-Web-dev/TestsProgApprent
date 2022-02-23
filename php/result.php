<?php
require 'header.php';

//On recupère la valeur select et on le stock dans une variable $form
$form=$_POST['select'];
/*$form doit prendre la valeur de la variable select
// On test le retour avec un echo ou un var_dump
//var_dump($form);
//Puis ton test dans une condition if() si le retour est strictement egal à 1 (formulaire 1)
//sinon on affiche un message 'Je ne peux pas afficher ce formulaire, car il n'existe pas', dans un echo.

if (isset($form) && ($form == 1)) {
    echo '
    <div class="containerTab">
        <h1>Tableau utilisateurs</h1>
        <p>Liste de utilisateurs enregistrés.</p>
        <table class="table0" >
            <thead>
                <tr>
                    <th scope="col">Pseudo</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Mot de passe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.$pseudo.'</td>
                    <td>'.$mail.'</td>
                    <td>'.$mp.'</td>
                </tr>
            </tbody>
        </table>
    </div>';     
}else{
    echo'Je ne peux pas afficher ce formulaire, car il n\'existe pas';
}
// le test passe on peut maitenant continuer le developpement:
// Creer une fonction affForm() qui permet d'afficher le formulaire selectionné dans le select.
// Cette fonction prendra en parametre la valeur passé dans $form et affichera le formulaire selectionné.
*/

function affForm($form){
    
}

require 'footer.php';