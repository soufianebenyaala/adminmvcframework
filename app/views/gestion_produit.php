<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; ?>

<div class="content-container">
    <?php require "include/navbar.php"; ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col-xs-12">
                <span class="page-title">
                    <h4>Produit</h4>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="content-block">
                    <div class="block-title">Datatable</div>
                    <div class="block-content">
                        <table id="example" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>id produit</th>
                                    <th>date de depart</th>
                                    <th>date d'arrivée</th>
                                    <th>id salle</th>
                                    <th>prix</th>
                                    <th>etat</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach( $data['getproduitdata'] as $tab){
                                    echo '<tr>';
                                    echo '<td>'.$tab->id_produit .'</td>';
                                    echo '<td>'.$tab->date_depart.'</td>';
                                    echo '<td>'.$tab->date_arrivee.'</td>';
                                    echo '<td>'.$tab->id_salle.'</td>';
                                    echo '<td>'.$tab->prix.'</td>';
                                    echo '<td>'.$tab->etat.'</td>';
                                    echo "<td><a href='".URLROOT."GestionProduits/editproduit/$tab->id_produit'><button class='main-btn'><i class='fa fa-edit' style='font-size:24px;'></i></button></a></td>";
                                    echo "<td><a href='".URLROOT."GestionProduits/deleteproduit/$tab->id_produit'><button class='main-btn'><i class='fa fa-trash' style='font-size:24px;'></i></button></a></td>";
                                    echo '</tr>';
                                }
                                ?>
                            
                            </tbody>
                        </table>
                        <nav class="table-pagination">
                            <ul class="pagination">
                                <li class="disabled"><a href="#" aria-label="Previous"><span
                                            aria-hidden="true">«</span></a>
                                </li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="content-block">
            <div class="block-title">from</div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-block">

                        <form class="form-vertical"  method="POST" action="<?=URLROOT; ?>GestionProduits/gestionproduits">
                            <div class="block-content">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">date de depart</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" name="date_depart"
                                        placeholder="Enter title">
                                        <?php 
                                  if(!empty($data['date_departEORRE']))
                                 { echo"<div class='alert alert-danger' role='alert'>
                                   ".$data['date_departEORRE']."
                                </div>";}
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">date d'arrivée</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1" name="date_arrivee"
                                        placeholder="description">
                                        <?php 
                                  if(!empty($data['date_arriveeEORRE']))
                                 { echo"<div class='alert alert-danger' role='alert'>
                                   ".$data['date_arriveeEORRE']."
                                </div>";}
                                ?>
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
                                    echo "<option value='$tab->id_salle'>";
                                    echo $tab->id_salle." - ".$tab->titre." || ".$tab->addresse." || ".$tab->categorie." || capacite : ".$tab->capacite;
                                    echo '</option>';
                                }
                                ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">prix</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="prix"
                                    placeholder="Enter capacity">
                                    <?php 
                                  if(!empty($data['prixEORRE']))
                                 { echo"<div class='alert alert-danger' role='alert'>
                                   ".$data['prixEORRE']."
                                </div>";}
                                ?>
                            </div>

                        </div>
                    </div>

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