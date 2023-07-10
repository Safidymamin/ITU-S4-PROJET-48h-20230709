<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h3>Page d'inscription</h3>
    <form action=<?php echo base_url('authentification/insertUser') ?> method="post">
        <div>
            <input type="text" name="username" placeholder="Nom d'utilisateur" id="username" value="Shipu" required>
            <label for="username" name="username_check"></label>
        </div>
        <div>
            <input type="text" name="lastname" placeholder="Nom" id="lastname" value="Uzumaki" required>
            <label for="lastname" name="lastname_check"></label>
        </div>
        <div>
            <input type="text" name="firstname" placeholder="Prenom" id="firstname" value="Naruto" required>
            <label for="firstname" name="firstname_check"></label>
        </div>
        <div>
            <input type="email" name="email" placeholder="Votre email" id="email" value="naruto@gmail.com" required>
            <label for="email" name="email_check"></label>
        </div>
        <div>
            <input type="text" name="phone" placeholder="Telephone" id="phone" value="435332" required>
            <label for="phone" name="phone_check"></label>
        </div>
        <div>
            <input type="password" name="password" placeholder="Mot de passe" id="password" value="naruto" required>
            <label for="password" name="password_check"></label>
        </div>
        <div>
            <input type="submit" value="Inscription">
        </div>
    </form>
    <div>
        <p><a href=<?php echo base_url('authentification/login') ?>>Connexion</a></p>
    </div>
</body>
</html>