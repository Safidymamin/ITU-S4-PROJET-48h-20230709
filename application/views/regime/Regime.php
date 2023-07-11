<div class="row justify-content-around">
    <div class="card col-md-5">
        <div class="card-body py-3">
            <h4>Insertion regime:</h4>

            <form class="row g-3" method="post" action="<?php echo base_url('regime/inserer') ;?>">
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
                    <label for="inputEmail4" class="form-label">Repas du matin:</label>
                    <select name="matin" class="form-control">
                        <?php foreach($listAll as $listeL){?>
                            <option class="form-control" value="<?php echo $listeL['id'];?>"><?php echo $listeL['nom']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Repas du midi:</label>
                    <select name="midi" class="form-control">
                        <?php foreach($listAll as $listeL){?>
                            <option class="form-control" value="<?php echo $listeL['id'];?>"><?php echo $listeL['nom']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Repas du soir:</label>
                    <select name="soir" class="form-control">
                        <?php foreach($listAll as $listeS){?>
                            <option class="form-control" value="<?php echo $listeS['id'];?>"><?php echo $listeS['nom']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Regime choix:</label>
                    <select name="regime" class="form-control">
                        <?php foreach($listeRegime as $listeV){?>
                            <option class="form-control" value="<?php echo $listeV['id_c'];?>"><?php echo $listeV['Nom']?></option>
                        <?php }?>
                    </select>
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Inserer</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card col-md-5 " >
        <div class="card-body">
            <h4>Modifier regimes:</h4>
            
            <form class="row g-3" method="post" action="<?php echo base_url('regime/modifier') ;?>">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Id:</label>
                    <input type="number" name="nombre" class="form-control">
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
                    <label for="inputEmail4" class="form-label">Repas du matin:</label>
                    <select name="matin" class="form-control">
                        <?php foreach($listAll as $listeL){?>
                            <option class="form-control" value="<?php echo $listeL['id'];?>"><?php echo $listeL['nom']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Repas du midi:</label>
                    <select name="midi" class="form-control">
                        <?php foreach($listAll as $listeL){?>
                            <option class="form-control" value="<?php echo $listeL['id'];?>"><?php echo $listeL['nom']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Repas du soir:</label>
                    <select name="soir" class="form-control">
                        <?php foreach($listAll as $listeS){?>
                            <option class="form-control" value="<?php echo $listeS['id'];?>"><?php echo $listeS['nom']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Regime choix:</label>
                    <select name="regime" class="form-control">
                        <?php foreach($listeRegime as $listeV){?>
                            <option class="form-control" value="<?php echo $listeV['id_c'];?>"><?php echo $listeV['Nom']?></option>
                        <?php }?>
                    </select>
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
                        <th scope="col">Repas_matin</th>
                        <th scope="col">Repas_midi</th>
                        <th scope="col">Repas_soir</th>
                        <th scope="col">Regime</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Pourcentage de poisson</th>
                        <th scope="col">Pourcentage de viande</th>
                        <th scope="col">Pourcentage de vollaile</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach( $listePro as $listesP){ ?>
                        <tr>
                            <th><?php echo $listesP['id_r']; ?></th>
                            <td><?php echo $listesP['objectif']; ?></td>
                            <td>Day <?php echo $listesP['jour']; ?></td>
                            <td><?php echo $listesP['Repas_matin']; ?></td>
                            <td><?php echo $listesP['repas_midi']; ?></td>
                            <td><?php echo $listesP['repas_soir']; ?></td>
                            <td><?php echo $listesP['regime']; ?></td>
                            <td><?php echo $listesP['prix_total']; ?> Euro</td>
                            <td><?php echo $listesP['pourcetage_poisson']; ?> %</td>
                            <td><?php echo $listesP['pourcentage_viande']; ?> %</td>
                            <td><?php echo $listesP['pourcentage_volaille']; ?> %</td>
                            <td><a href="<?php echo base_url('regime/supprimer');?>?nombre=<?php echo $listesP['id_r']; ?>" class="btn btn-danger">Effacer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
