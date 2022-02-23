<?php
require_once './php/header.php';
?>

    <div class="containerForm">
        <div id="register" class="containerForm1">
                <h1>Selection d'un formulaire</h1>
                <p>En choisissant un formulaire si dessous vous pourrez tester le formulaire de votre choix et afficher le code.</p>
                <form action="./php/result.php" method="post">
                    <label for="name">Choisissez un formulaire  </label>
                    <select name="select" id="name">
                        <option value="0"> - </option>
                        <option value="1">Formulaire d'inscription</option>
                        <option value="2">Formulaire de contact</option>
                        <option value="3">Formulaire de connexion</option>
                        <option value="4">Formulaire de message</option>
                        <option value="5">Formulaire d'enregistrement de données</option>
                    </select>  
                    <br><br>
                    <input type="submit" value="Valider" class="btn btn-primary">
                </form>
        </div>
    </div>
    
<?php
require_once './php/footer.php';
?>