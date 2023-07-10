<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Page de login</h3>
    <form action=<?php echo base_url('authentification/verifyLogin') ?> method="post">
        <div>
            <input type="email" name="email" placeholder="Votre email" id="email" value="anthony@gmail.com" required>
            <label for="email" name="email_check"></label>
        </div>
        <div>
            <input type="password" name="password" placeholder="Mot de passe" id="password" value="anthony" required>
            <label for="password" name="password_check"></label>
        </div>
        <div>
            <input type="submit" value="Connexion">
        </div>
    </form>
    <div>
        <p>Pas de compte? <a href=<?php echo base_url('authentification/inscription') ?>>Inscrivez-vous ici</a></p>
    </div>
</body>
</html>