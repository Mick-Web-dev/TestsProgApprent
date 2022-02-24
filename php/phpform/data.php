<?php
require_once 'header.php';

echo ' <div id="insertData" class="containerForm4">
            <button class="btn btn-warning bg-warning w-30"><a href="http://localhost:5789/index.php">retour menu</a></button>
            <br>
            <h1>Nouvelle data</h1>
            <p>Merci de compléter les champs, afin compléter la base de données.</p>
            <form method="POST" action="#">
                <label for="auteur">Auteur :</label>
                <input type="text" id="auteur" name="auteur"> 
                <br><br>
                <label for="date">Date :</label>
                <input type="date" id="auteur" name="auteur"> 
                <br><br>
                <label for="categorie">Catégorie :</label>
                <select name="categorie" id="categorie">
                    <option value="">-</option>
                    <option value="language">Language</option>
                    <option value="syntaxe">Syntaxe</option>
                    <option value="definition">Définition</option>
                </select>    
                <br><br>
                <label for="titre">Titre :</label>
                <input type="text" id="titre" name="titre">   
                <br><br>
                <label for="description">Description :</label>
                <textarea name="description" id="description" cols="10" rows="5"></textarea>  
                <br><br>
                <input type="submit" value="Envoyer" class="btn">
            </form>
        </div>
        ';     

require_once 'footer.php';
