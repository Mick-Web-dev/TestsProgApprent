<?php
require_once 'header.php';

echo ' 
    <div id="login" class="containerForm2">
        <button class="btn btn-warning bg-warning w-25"><a href="http://localhost:5789/index.php">retour menu</a></button>
        <br>
        <h1>Fomulaire de Connexion</h1>
        <p>Merci de renseigner les champs suivant afin de vous connecter avec la communauté.</p>
        <form method="POST" action="#">
            <label for="pseudoConnect">Votre speudo :</label>
            <input type="text" id="pseudoConnect" name="pseudoConnect" required pattern="[A-Za-z][0-9]">       
            <br><br>
            <label for="mpConnect">Votre mot de passe :</label>
            <input type="password" id="mpConnect" name="mpConnect" required>
            <br><br>
            <input type="submit" value="Connexion" class="btn btn-success">
        </form>
    </div>
    ';     

require_once 'footer.php';
