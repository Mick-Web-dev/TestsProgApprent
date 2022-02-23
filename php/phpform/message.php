<?php
require_once 'header.php';

echo ' <div id="mess" class="containerForm3">
        <button class="btn btn-warning bg-warning w-25"><a href="http://localhost:5789/index.php">retour menu</a></button>
        <br>
        <h1>Formulaire de Messagerie</h1>
        <p>Merci de renseigner les champs suivant afin de vous connecter avec la communauté.</p>
        <form method="POST" action="#">
            <label for="contactMail">Votre mail :</label>
            <input type="email" id="contactMail" name="contactMail"required>     
            <br><br>
            <label for="contactMess">Votre message :</label>
            <textarea name="contactMess" id="contactMess" cols="10" rows="5" required></textarea>    
            <br><br>
            <input type="submit" value="Envoyer" class="btn">
        </form>
        </div>
        ';     

require_once 'footer.php';
