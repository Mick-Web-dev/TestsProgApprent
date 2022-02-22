<?php
require 'header.php';

//On recupère la valeur select et on le stock dans une variable $form
$form=$_POST['select'];
//var_dump($form);
exit();


if ($form ==[1]) {
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
}

require 'footer.php';