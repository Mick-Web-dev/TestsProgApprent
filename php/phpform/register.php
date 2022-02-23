<?php
require_once 'header.php';

echo ' <div class="containerForm">
            <div id="register" class="containerForm1">
                <button class="btn btn-warning bg-warning w-25"><a href="http://localhost:5789/index.php">retour menu</a></button>
                <h1>Formulaire d\'inscription</h1>
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

require_once 'footer.php';
