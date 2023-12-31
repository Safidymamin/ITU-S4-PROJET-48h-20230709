<!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox@1.2.4/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@6.8.1/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Groovin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
            <?php if (isset($success) && !empty($success)) { ?>
                  <li><a class="nav-link scrollto" id="success-message" style="color : green"><?php echo $success; ?></a></li>
              <?php } ?>
  
              <?php if (isset($error) && !empty($error)) { ?>
                  <li><a class="nav-link scrollto" id="error-message" style="color : orange"><?php echo $error; ?></a></li>
              <?php } ?>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <li><a class="nav-link scrollto" id="showFormButton">Ajout info santé</a></li>
          <li class="dropdown"><a href="#"><span>Objectif</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#perte">Perte de poids</a></li>
              <li><a href="#gain">Gain de poids</a></li>
              <li><a href="#maintient">Maintient de forme</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#new_code">Ajout code</a></li>
          <li><a href=<?php echo base_url('user/deconnection') ?>>Deconnexion</a></li>
          <li><a class="getstarted scrollto" href="#about"><?php echo $user->username ?> -> <?php echo number_format($user->argent, 0, ',', ' ') ?> Euro</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        document.getElementById('showFormButton').addEventListener('click', function() {
            Swal.fire({
                title: 'Formulaire',
                html: `
                    <form id="myForm" method="POST" action="<?php echo base_url('Etat_user_controller/index'); ?>" >
                      <div>
                          <label for="taille">Taille :</label>
                          <input type="text" name="taille" id="taille" placeholder=" votre taille" required>
                      </div>
                      <div>
                          <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'] ?>"  required>
                      </div>
                      <div>
                          <label for="poids">Poids :</label>
                          <input type="text" name="poids" id="poids" placeholder="votre poids" required>
                      </div>
                    </form>
                `,
                showCancelButton: true,
                confirmButtonText: 'Valider',
                preConfirm: () => {
                    // Soumission du formulaire
                    document.getElementById('myForm').submit();
                }
            });
        });
    </script>

    </div>
  </header>