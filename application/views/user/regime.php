
<br><br>
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Regimes</h2>
          <p>Voici notre liste de regime qui vous etes adaptés.</p>
        </div>

        
        <div class="row">

        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
                <h2  style="color : white">Prix Total</h2>
                <h4><?php echo number_format($prix_total, 2) ?><sup> Euro</sup></h4>
                <ul>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
            </ul>
              <div class="btn-wrap">
                <a href="#?id_Objectif=<?php echo $id_Objectif ?>" class="btn-buy">Acheter</a>
              </div>
            </div>
        </div>
        <br><br><br>
        <?php foreach ($regimes as $regime): ?>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h2>Prix : </h2>
                  <h2><?php echo number_format($regime['prix_total'], 2); ?><sup> Euro </sup><span> </span></h2>
                  <ul>
                    <li> <strong>Objectif :</strong> <?php echo $regime['objectif']; ?></li>
                    <li> <strong>Jour :</strong> <?php echo $regime['jour']; ?></li>
                    <li> <strong>Repas matin :</strong> <?php echo $regime['Repas_matin']; ?></li>
                    <li> <strong>Repas midi :</strong> <?php echo $regime['repas_midi']; ?></li>
                    <li> <strong>Repas soir :</strong> <?php echo $regime['repas_soir']; ?></li>
                    <li> <strong>Régime :</strong> <?php echo $regime['regime']; ?></li>
                  </ul>
                </div>
              </div>
        <?php endforeach; ?>

          <br><br><br>

        </div>

      </div>
    </section><!-- End Pricing Section -->