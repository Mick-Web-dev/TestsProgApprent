<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="containerForm">
        <div id="register" class="containerForm1">
                <h1>Formulaire de contact</h1>
                <p>Merci de renseigner les champs suivant afin de vous enregistrer.</p>
                <form action="result.php" method="post">
                    <label for="pseudo">Votre speudo :</label>
                    <input type="text" id="pseudo" name="pseudo" required >       //pattern="[A-Za-z][0-9]"
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
    
</body>
</html>