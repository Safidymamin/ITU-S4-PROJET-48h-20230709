<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Projet S4</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
        document.getElementById('error-message').style.display = 'none';
    }, 3000); // Masquer les messages après 3 secondes
  </script>

</head>

<body>

  <!-- ======= Header ======= -->
  <!-- End Header -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

<div class="carousel-inner" role="listbox">


<div class="carousel-item active" style="background-image: url(<?php echo base_url("assets/img/360_F_112160681_f6CNoEx5p9i2PJ6QuTxaRfeigEFqat76.jpg") ?>);">
    <div class="carousel-container">
      <div class="carousel-content">
        <h2 class="animate__animated animate__fadeInDown">Objectif</h2>
        <p class="animate__animated animate__fadeInUp">Transformez votre vie avec notre application de remise en forme et de régime - atteignez vos objectifs de santé et de bien-être !</p>
        <div>
          
        </div>
      </div>
    </div>
  </div>


  <div class="carousel-item" style="background-image: url(<?php echo base_url("assets/img/1223541.jpg") ?>);">
    <div class="carousel-container">
      <div class="carousel-content">
        <h2 class="animate__animated animate__fadeInDown">Exercices journaliers à portée de main </h2>
        <p class="animate__animated animate__fadeInUp">Développez une routine d'exercices quotidienne efficace grâce à notre application - une séance d'entraînement accessible où que vous soyez !</p>
        <div>
          
        </div>
      </div>
    </div>
  </div>

Voici la suite du code HTML modifié :

```html
  <div class="carousel-item" style="background-image: url(assets/img/slide3.jpg);">
    <div class="carousel-container">
      <div class="carousel-content">
        <h2 class="animate__animated animate__fadeInDown">Une transformation à votre portée </h2>
        <p class="animate__animated animate__fadeInUp">Peu importe où vous en êtes, notre application vous guide vers une vie plus saine et équilibrée !</p>
        <div>
          
        </div>
      </div>
    </div>
  </div>

</div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>
  
  
   <!-- ======= perte Section ======= -->
  <section id="perte" class="perte">
      <div class="container">

        <div class="section-title">
          <h2>Perte de poids</h2>
          <p></p>
        </div>

        

        <div class="form">
            <form id="pertePoids" action="<?php echo base_url('user/getRegime') ?>" role="form" class="php-email-form" onsubmit="return validateForm1()">
                <input type="hidden" name="id_Objectif" value="1">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="number" name="avant1" class="form-control" id="avant1" placeholder="Poids actuel" data-msg="Entrer votre poids actuel" min="40" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="number" name="apres1" class="form-control" id="apres1" placeholder="Poids visée" data-msg="Entrer un nombre plus petit que votre poids actuel" min="40" required>
                    </div>
                </div>
                <div class="text-center"><button type="submit" id="validerCode">Soumettre</button></div>
            </form>

            <script>
                function validateForm1() {
                    var avant1 = parseFloat(document.getElementById('avant1').value);
                    var apres1 = parseFloat(document.getElementById('apres1').value);

                    if (avant1 <= apres1) {
                        alert("Le poids visé doit être inférieur au poids actuel !");
                        return false; // Annule l'événement de soumission du formulaire
                    }
                }
            </script>
        </div>



      </div>
    </section><!-- End perte Section -->
    <br>
    <hr class="gray-line">
            <br>

    <section id="gain" class="gain">
      <div class="container">

        <div class="section-title">
          <h2>Gain de poids</h2>
          <p></p>
        </div>

        

        <div class="form">
            <form id="gainPoids" action="<?php echo base_url('user/getRegime') ?>" role="form" class="php-email-form" onsubmit="return validateForm2()">
                <input type="hidden" name="id_Objectif" value="2">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="number" name="avant2" class="form-control" id="avant2" placeholder="Poids actuel" data-msg="Entrer votre poids actuel" min="40" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="number" name="apres2" class="form-control" id="apres2" placeholder="Poids visée" data-msg="Entrer un nombre plus petit que votre poids actuel" min="41" required>
                    </div>
                </div>
                <div class="text-center"><button type="submit" id="validerCode">Soumettre</button></div>
            </form>

            <script>
                function validateForm2() {
                    var avant2 = parseFloat(document.getElementById('avant2').value);
                    var apres2 = parseFloat(document.getElementById('apres2').value);

                    if (avant2 >= apres2) {
                        alert("Le poids visé doit être supérieur au poids actuel !");
                        return false; // Annule l'événement de soumission du formulaire
                    }
                }
            </script>
        </div>



      </div>
    </section><!-- End Gain Section -->

    <br>
            <hr class="gray-line">
            <br>
    <!-- ======= New_code Section ======= -->
  <section id="new_code" class="new_code">
      <div class="container">

        <div class="section-title">
          <h2>Code de recharge</h2>
          <p>Inserez ici votre code de recharge.</p>
        </div>

        <div class="row new_code-info">

          <div class="col-md-4">
            <div class="new_code-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Verification</h3>
              <address>Verifiez bien votre code avant d'insérer.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="new_code-phone">
              <i class="bi bi-phone"></i>
              <h3>Succes</h3>
              <p><a href="#">Vous recevrez un message en cas de succès.</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="new_code-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="#">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action=<?php echo base_url("user/insertCode") ?> method="post" role="form" class="php-email-form">
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="code" id="subject" placeholder="Code de recharge" required>
            </div>
            <?php if (isset($success) && !empty($success)) { ?>
                <div id="success-message" class="alert alert-success"><?php echo $success; ?></div>
            <?php } ?>

            <?php if (isset($error) && !empty($error)) { ?>
                <div id="error-message" class="alert alert-danger"><?php echo $error; ?></div>
            <?php } ?>

            <div class="text-center"><button type="submit" id="validerCode">Send Message</button></div>
          </form>
        </div>


      </div>
    </section><!-- End new_code Section -->
    

 
  <!-- ======= Footer ======= -->
  

</body>

</html>
