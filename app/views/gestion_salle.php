<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; ?>

<div class="content-container">
    <?php require "include/navbar.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <span class="page-title">
                    <h4>Salle</h4>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="content-block">
                <div class="block-title">Add salle</div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-block">

                        <form class="form-vertical" method="POST" action="<?=URLROOT; ?>GestionSalles/gestionsalle"
                            enctype="multipart/form-data">
                            <div class="block-content">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                        placeholder="Enter title">
                                    <?php 
                                  if(!empty($data['titleEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['titleEORRE']."
                                </p>";}
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">description</label>
                                    <textarea type="text" class="form-control" rows="5" name="description"
                                        id="exampleInputPassword1" placeholder="description"></textarea>
                                    <?php 
                                  if(!empty($data['descriptionEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['descriptionEORRE']."
                                </p>";}
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">address</label>
                                    <input type="text" class="form-control" name="address" id="exampleInputEmail1"
                                        placeholder="Enter address">
                                    <?php 
                                  if(!empty($data['addressEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['addressEORRE']."
                                </p>";}
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" id="exampleInputPassword1">country</label>
                                    <select name="country" class="form-control">
                                        <?php foreach ($data['country']  as $datta) {
                                            foreach ($datta  as $dattta) { ?>
                                        <option value="<?= $dattta ?>"><?= $dattta ?>
                                        </option>
                                        <?php }} ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">city</label>
                                    <input type="text" class="form-control" name="city" id="exampleInputEmail1"
                                        placeholder="Enter city">
                                    <?php 
                                  if(!empty($data['cityEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['cityEORRE']."
                                </p>";}
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">zip code</label>
                                    <input type="text" class="form-control" name="cp" id="exampleInputEmail1"
                                        placeholder="Enter zip code">
                                    <?php 
                                  if(!empty($data['cpEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['cpEORRE']."
                                </p>";}
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
                                <label for="exampleInputEmail1">capacity</label>
                                <input type="text" class="form-control" name="capacity" id="exampleInputEmail1"
                                    placeholder="Enter capacity">
                                <?php 
                                  if(!empty($data['capacityEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['capacityEORRE']."
                                </p>";}
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">category</label>
                                <select name="category" class="form-control">
                                    <option value="Conférence, Convention">Conférence, Convention</option>
                                    <option value="Réunion, Formation">Réunion, Formation</option>
                                    <option value="Soirée entreprise">Soirée d'entreprise</option>
                                    <option value="Séminaire résidentiel">Séminaire résidentiel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile" name="photo_1">
                                <p class="help-block">PNG 1200x675.</p>
                                <?php 
                                  if(!empty($data['photo_1EORRE']))
                                 { echo"<p style='color:red';>
                                   ".$data['photo_1EORRE']."
                                </p>";}
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile" name="photo_2">
                                <p class="help-block">PNG 1200x675.</p>
                                <?php 
                                  if(!empty($data['photo_2EORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['photo_2EORRE']."
                                </p>";}
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile" name="photo_3">
                                <p class="help-block">PNG 1200x675.</p>
                                <?php 
                                  if(!empty($data['photo_3EORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['photo_3EORRE']."
                                </p>";}
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile" name="photo_4">
                                <p class="help-block">PNG 1200x675.</p>
                                <?php 
                                  if(!empty($data['photo_4EORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['photo_4EORRE']."
                                </p>";}
                                
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="block-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">confirmer</button>
                        </div>
                    </div>
                    </form>
                </div>
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
                                    <th>id salle</th>
                                    <th>title</th>
                                    <th>pays</th>
                                    <th>ville</th>
                                    <th>zip code</th>
                                    <th>description</th>
                                    <th>capacity</th>
                                    <th>category</th>
                                    <th>address</th>
                                    <th style="width:100px;">avis</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach( $data['getdata'] as $tab){
                                    echo '<tr>';
                                    echo '<td>'.$tab->id_salle .'</td>';
                                    echo '<td>'.$tab->titre.'</td>';
                                    echo '<td>'.$tab->pays .'</td>';
                                    echo '<td>'.$tab->ville.'</td>';
                                    echo '<td>'.$tab->cp.'</td>';  
                                    echo '<td>'.$tab->description.'</td>';
                                    echo '<td>'.$tab->capacite .'</td>';
                                    echo '<td>'.$tab->categorie.'</td>';
                                    echo '<td>'.$tab->addresse .'</td>';
                                    echo '<td>';
                                    ?>
                                <div class="review-rating ">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star<?php  if($tab->avis == 1){echo '-o empty';}?>"></i>
                                    <i
                                        class="fa fa-star<?php  if($tab->avis == 1 OR $tab->avis == 2 ){echo '-o empty';}?>"></i>
                                    <i
                                        class="fa fa-star<?php  if($tab->avis == 1 OR $tab->avis == 2 OR $tab->avis == 3 ){echo '-o empty';} ?>"></i>
                                    <i
                                        class="fa fa-star<?php  if($tab->avis == 1 OR $tab->avis == 2 OR $tab->avis == 3  OR $tab->avis == 4 ){echo '-o empty';}?>"></i>
                                </div>

                                <?php echo '</td>';
                                    echo "<td><a href='".URLROOT."GestionSalles/gotoeditsallepage/$tab->id_salle'>
                                    <button type='button' class='main-btn' data-toggle='modal' data-target='#Modaleditsalle' data-whatever='@fat'>
                                    <i class='fa fa-edit d' style='font-size:24px;'></i>
                                    </button>
                                    </a></td>";
                                    echo "<td><a href='".URLROOT."GestionSalles/deletesalle/$tab->id_salle'><button class='main-btn'><i class='fa fa-trash' style='font-size:24px;'></i></button></a></td>";
                                    echo '</tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>