<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
    <script>
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
            document.getElementById('error-message').style.display = 'none';
        }, 3000); // Masquer les messages après 3 secondes
    </script>
<body>
    <h3>Ajout de code</h3>
    
    <form action=<?php echo base_url("user/insertCode") ?> method="post">
        <input type="text" name="code">
        <input type="submit" value="Valider">
    </form>

    <?php if (isset($success) && !empty($success)) { ?>
        <div id="success-message" class="alert alert-success"><?php echo $success; ?></div>
    <?php } ?>

    <?php if (isset($error) && !empty($error)) { ?>
        <div id="error-message" class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>
    
</body>
</html>