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
    // condition 1- si l'utilisateur valide sans selectionner un formulaire il est redirigé sur l'index
    //et on lui retourne un message
    if (isset($form) && ($form == 0)) {
        echo 'Vous devez choisir un formulaire !';
        header('Location:../index.php');
    }//test=ok

    //Formulaire-1
    if (isset($form) && ($form == 1)) {
        echo '
        <div class="containerForm">
            <div id="register" class="containerForm1">
                <h1>Formulaire de contact</h1>
                <p>Merci de renseigner les champs suivant afin de vous enregistrer.</p>
                <form method="POST" action="#">
                    <label for="pseudo">Votre speudo :</label>
                    <input type="text" id="pseudo" name="pseudo" required pattern="[a-zA-Z0-9]{4,8}">       
                    <br><br>
                    <label for="mail">Votre mail :</label>
                    <input type="email" id="mail" name="mail"required>
                    <br><br>
                    <label for="mp">Votre mot de passe :</label>
                    <input type="password" id="mp" name="mp" required>
                    <br><br>
                    <input type="submit" value="Soumettre" class="btn btn-primary">
                </form>
            </div>
        </div>
        ';     
    }//test formulaire-1 ok
     
} return affForm($form);

require 'footer.php';