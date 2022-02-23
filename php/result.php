<?php
//1-Appel de l'entête:
require 'header.php';
/*Raisonnement:
*1.l'utilisateur selectionne via l'option d'un select html un formulaire
*2.il valide son choix via une balise input qui est rattaché à sa balise parente form
*3.cette balise parente possede un attribut 'method' qui utilise 2 supers globales GET ou POST
*4.si GET est utilisé, alors la valeurs envoyées passent par l'url via une variable nommée par l'attrivut name de la balise select
*la valeur peut donc être modifiée dans l'url
*5.si POST est utilisé, alors la valeurs envoyées sont stokées en mémoire jusqu'a l'appel de la super global $_POST qui prend en paramatre la valeur
*de l'attribut name du select 
*6.ICI: $_POST['select']
*7.A ce niveau on ne sait pas ce que contien la variable select (select=X), il faut donc stocker la valeur dans une variable pour pouvoir l'utilser.
*/
$form=$_POST['select'];
$message= '';
/*ICI $form prend la valeur de la variable select=? 
*pour lire sa valeur on peut utiliser un echo '$form'; afin d'avoir le retour et si la valeur correspond à l'option selectionnée :Le test passe!
*8.Maintenant il faut afficher le comptenu demandé par l'utilisateur:
*On peut tester de manière simple dans une condition if() SI la variable existe et est strictement egal à 1 (select>option value= 1) ALORS
*on affiche le formulaire html via un echo.
*SINON on affiche un message 'Je ne peux pas afficher ce formulaire, car il n'existe pas'.
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
*A CE NIVEAU :le test passe on peut maitenant continuer le developpement:
*Creer une fonction affForm() qui permet d'afficher le formulaire selectionné.
*Cette fonction prendra en parametre la valeur passé dans $form et affichera le formulaire selectionné.
*Séparer le html du code php est une bonne pratique, il faut donc créer un dossier phpform qui contiendra 
*les formulaires ainsi que l'entête et le pied de page associé
*/
function affForm($form,$message){
    /*Si l'utilisateur valide sans selectionner un formulaire il est redirigé sur l'index
    et on lui retourne un message*/
    if (isset($form) && ($form >= 0) && empty($message)) {
        $message='<pre>Veuillez selectionner un formulaire dans la zone prévue à cet effet</pre>';
        echo $message;
        echo '<form methode="post" action="../index.php">
                <label name="retour">Pour selectionner à nouveau un formulaire, cliquez-ici :</label>
                <input type="submit" name="" value="Retour aux formulaires">
             </form>';
    }//test=ok  Formulaire-1
    if (isset($form) && ($form == 1)) {
        header('Location:./phpform/register.php');
    }//test formulaire-1 ok
    if (isset($form) && ($form == 2)) {
        header('Location:./phpform/connect.php');
    }//test formulaire-1 ok
    if (isset($form) && ($form == 3)) {
        header('Location:./phpform/message.php');
    }//test formulaire-1 ok
    if (isset($form) && ($form == 4)) {
        header('Location:./phpform/data.php');
    }//test formulaire-1 ok
    if (isset($form) && ($form == 5)) {
        header('Location:./phpform/search.php');
    }//test formulaire-1 ok
} return affForm($form, $message);
require 'footer.php';