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
    <title>Inscription</title>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form class='f' action=<?php echo base_url('authentification/insertUser') ?> method="post">
            <h3>Login Here</h3>
            
            <label for="">Usename</label>
            <input type="text" name="username" placeholder="username" id="username" value="Shipu" required>
            <label for="">lastname</label>
            <input type="text" name="lastname" placeholder="Lastname" id="lastname" value="Uzumaki" required>
            <label for="">firstname</label>
            <input type="text" name="firstname" placeholder="FirstName" id="firstname" value="Naruto" required>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Email" id="email" value="naruto@gmail.com" required>
            <label for="">Phone number</label>
            <input type="text" name="phone" placeholder="Phone number" id="phone" value="435332" required>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password" id="password" value="naruto" required>
    
            <button>Log In</button>
            <div class="social">
          <div class="go"><a href=<?php echo base_url('authentification/login') ?>>Connexion</a> </div>
          <!-- <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div> -->
        </div>
    </form>
    <div>
        <p></p>
    </div>
</body>
</html>