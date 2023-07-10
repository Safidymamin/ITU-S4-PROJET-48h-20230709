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
            <button>Log In</button>
        <div class="social">
          <div class="go"> <a href=<?php echo base_url('authentification/inscription') ?>>Sing in</a> </div>
          <!-- <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div> -->
        </div>
    </form>
</body>
</html>
<!-- id="username" -->