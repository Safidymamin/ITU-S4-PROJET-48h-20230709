<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Style_login.css') ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


    <title>Login</title>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action=<?php echo base_url('authentification/verifyLogin') ?> method="post">
        <h3>Login Here</h3>
            <label for="username">Username</label>
            <input type="text" name="email" placeholder="Username"  value="anthony@gmail.com" required>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" id="password" value="anthony" required>
            <?php if(isset($message)) {?>
                <div class="alert alert-danger" role="alert" id="alert-message">
                    <p style="color : orange"><?php echo $message ?></p>
                </div>
            <?php } ?>
            <script>
            // Attendre 3 secondes puis masquer l'alerte
                setTimeout(function() {
                    var alertMessage = document.getElementById('alert-message');
                    if (alertMessage) {
                        alertMessage.style.display = 'none';
                    }
                }, 3000);
        </script>
            <button>Log In</button>
        <div class="social">
          <div class="go"> <a href=<?php echo base_url('authentification/inscription') ?>>Sing in</a> </div>
          <!-- <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div> -->
        </div>
    </form>
</body>
</html>
<!-- id="username" -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->