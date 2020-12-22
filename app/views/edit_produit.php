<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; ?>

<div class="content-container">
    <?php require "include/navbar.php"; ?>
    <div class="container-fluid">

        <div class="row">
            <div class="content-block">
                <div class="block-title">from</div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-block">
                    <?php  foreach( $data['getproduit'] as $dataa){ ?>
                        <form class="form-vertical" method="POST"
                            action="<?=URLROOT; ?>GestionProduits/editproduit">
                            <div class="block-content">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">date de depart</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" name="date_depart"
                                        placeholder="Enter title" value="<?= $dataa->date_depart ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">date d'arrivée</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1"
                                        name="date_arrivee" placeholder="description" value="<?= $dataa->date_arrivee ?>">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <br>
                    <div class="content-block">
                        <div class="form-group">

                            <div class="form-group">
                                <label for="exampleInputFile">salle</label>
                                <select name="id_salle" class="form-control">

                                    <?php 
                                foreach( $data['getsalledata'] as $tab){
                                    echo "<option value='$tab->id_salle' ";
                                    if($dataa->id_salle == $tab->id_salle){echo 'selected';}
                                    echo">";
                                    echo $tab->id_salle." - ".$tab->titre." || ".$tab->addresse." || ".$tab->categorie." || capacite : ".$tab->capacite;
                                    echo '</option>';
                                }
                                ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">prix</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="prix"
                                    placeholder="Enter capacity" value="<?= $dataa->prix?>">
                            </div>

                        </div>
                    </div>
                    <?php  }?>
                    <div class="block-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>