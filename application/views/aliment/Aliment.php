<div class="row justify-content-around">
    <div class="card col-md-5">
        <div class="card-body py-3">
            <h4>Insertion regime:</h4>

            <form class="row g-3" method="post" action="<?php echo base_url('aliment/inserer') ;?>">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Nom:</label>
                    <input type="text" name="nom" class="form-control" id="inputtextEmail4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Prix:</label>
                    <input type="number" name="prix" step="0.01" class="form-control" id="inputPassword4">
                </div>
               
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Inserer</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card col-md-5 " >
        <div class="card-body">
            <h4>Modifier des aliments:</h4>
            <form class="row g-3" method="post" action="<?php echo base_url('aliment/modifier') ;?>">
            <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Id:</label>
                    <input type="number" name="nombre" class="form-control" id="inputtextEmail4">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Nom:</label>
                    <input type="text" name="nom" class="form-control" id="inputtextEmail4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Prix:</label>
                    <input type="number" name="prix" step="0.01" class="form-control" id="inputPassword4">
                </div>
               
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Inserer</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
<hr>
<div class="row">
    <div class="card col-md-12">
        <div class="card-body" style="text-align:center;">
            <h4>Liste des aliments:</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach( $listAll as $listes){ ?>
                        <tr>
                            <th scope="row"><?php echo $listes['id']; ?></th>
                            <td><?php echo $listes['nom']; ?></td>
                            <td><?php echo $listes['prix']; ?></td>
                            
                            <td><a href="<?php echo base_url('aliment/supprimer');?>?nombre=<?php echo $listes['id']; ?>" class="btn btn-danger">Effacer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
