<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Page de accueil</h3>
    <?php foreach ($result as $row) : ?>
        <h1>Bienvenue, <?= $row->username; ?></h1>
    <?php endforeach; ?>
    <div>
        <a href=<?php echo base_url('user/deconnection') ?>>Deconnection</a>
    </div>
    <div>
        <a href=<?php echo base_url('user/ajoutCode') ?>>Ajout code</a>
    </div>
    
    
</body>
</html>