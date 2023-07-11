<div class="row justify-content-around">
    <div class="card col-md-5">
        <div class="card-body py-3">
            <script>            
                setTimeout(function() {
                    document.getElementById('success-message').style.display = 'none';
                    document.getElementById('error-message').style.display = 'none';
                }, 3000); // Masquer les messages après 3 secondes
            </script>
            <h4>Insertion code:</h4>

            <form class="row g-3" method="post" action=<?php echo base_url('code/save') ?>>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Code:</label>
                    <input type="text" name="code" class="form-control" id="inputtextEmail4" minlength="6" required>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Valeur:</label>
                    <input type="number" name="valeur" step="0.01" class="form-control" id="inputPassword4" required>
                </div>
                
                    <?php if (isset($success) && !empty($success)) { ?>
                        <div id="success-message" class="alert alert-success"><?php echo $success; ?></div>
                    <?php } ?>

                    <?php if (isset($error) && !empty($error)) { ?>
                        <div id="error-message" class="alert alert-danger"><?php echo $error; ?></div>
                    <?php } ?>
               
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Inserer</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card col-md-5 " >
        <div class="card-body">
            <h4>Liste des codes:</h4>

            <?php foreach( $codes as $code){ ?>
                <div class="col-md-12">
                    <strong><?php echo $code->code ?> : </strong> <?php echo $code->valeur ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div> 