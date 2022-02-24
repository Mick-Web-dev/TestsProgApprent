<?php
require_once 'header.php';

echo ' <div id="search" class="containerForm5">
            <button class="btn btn-warning bg-warning w-30"><a href="http://localhost:5789/index.php">retour menu</a></button>
            <br>
            <h1>Recherche de datas</h1>
            <p>Selectionner un type de donnée, afin d\'obtenir les résultats de votre recherche.</p>
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
                </select>    
                <br><br>
                <input type="submit" value="Envoyer" class="btn">
            </form>
        </div>
        ';     

require_once 'footer.php';
