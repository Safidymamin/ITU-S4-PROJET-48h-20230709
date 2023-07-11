<div class="row justify-content-around">
    <div class="card col-md-5">
        <div class="card-body py-3">
            <h4>Insertion activiter:</h4>

            <form class="row g-3" method="post" action="<?php echo base_url('activier_sport/inserer') ;?>">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Objectif:</label>
                    <select name="objectif" class="form-control">
                        <?php foreach($listeObjectif as $listeO){?>
                            <option class="form-control" value="<?php echo $listeO['id_Objectif'];?>"><?php echo $listeO['nomCategories']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Jour:</label>
                    <input type="number" name="jour" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Activite:</label>
                    <input type="text" name="activiter" class="form-control" id="inputPassword4">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Inserer</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card col-md-5 ">
        <div class="card-body">
            <h4>Modifier Activite:</h4>
            
            <form class="row g-3" method="post" action="<?php echo base_url('Activite_sport/modifier') ;?>">
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Id:</label>
                    <input type="number" name="nombre" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Objectif:</label>
                    <select name="objectif" class="form-control">
                        <?php foreach($listeObjectif as $listeO){?>
                            <option class="form-control" value="<?php echo $listeO['id_Objectif'];?>"><?php echo $listeO['nomCategories']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Jour:</label>
                    <input type="number" name="jour" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Activite:</label>
                    <input type="text" name="activiter" class="form-control" id="inputPassword4">
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
            <h4>Plan des regimes:</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Objectif</th>
                        <th scope="col">Jour</th>
                        <th scope="col">Activite</th>    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach( $listePro as $listesP){ ?>
                        <tr>
                            <th><?php echo $listesP['id_A']; ?></th>
                            <td><?php echo $listesP['objectif']; ?></td>
                            <td><?php echo $listesP['jour']; ?></td>
                            <td><?php echo $listesP['activite']; ?></td>
                            
                            <td><a href="<?php echo base_url('activite_sport/supprimer');?>?nombre=<?php echo $listesP['id_A']; ?>" class="btn btn-danger">Effacer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
