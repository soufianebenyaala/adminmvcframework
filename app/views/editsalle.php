<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; ?>

<div class="content-container">
    <?php require "include/navbar.php";
    ?>
    <div class="container-fluid">

        <div class="row">
            <div class="content-block">
                <div class="block-title">from</div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-block">
                    <?php foreach( $data['getdata'] as $tab){ ?>
                        <form class="form-vertical" method="POST" action="<?=URLROOT; ?>GestionSalles/editsalle/<?= $tab->id_salle; ?>" enctype="multipart/form-data">
                            <div class="block-content">
                                

                                <div class="form-group">
                                    <label for="exampleInputEmail1">title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                        value="<?= $tab->titre; ?>">
                                    <?php 
                                  if(!empty($data['titleEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['titleEORRE']."
                                </p>";}
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">description</label>
                                    <input type="text" class="form-control" name="description" id="exampleInputEmail1"
                                        value="<?= $tab->description; ?>">

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
                                        value="<?= $tab->addresse ?>">
                                    <?php 
                                  if(!empty($data['addressEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['addressEORRE']."
                                </p>";}
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">city</label>
                                    <input type="text" class="form-control" name="city" id="exampleInputEmail1"
                                        value="<?= $tab->ville ?>">
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
                                        value="<?= $tab->cp ?>">
                                    <?php 
                                  if(!empty($data['cpEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['cpEORRE']."
                                </p>";}
                                ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">capacity</label>
                                    <input type="text" class="form-control" name="capacity" id="exampleInputEmail1"
                                        value="<?= $tab->capacite ?>">
                                    <?php 
                                  if(!empty($data['capacityEORRE']))
                                 { echo"<p style='color:red;'>
                                   ".$data['capacityEORRE']."
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
                                <label for="exampleInputFile">category</label>
                                <select name="category" class="form-control">
                                    <option
                                        <?php if($tab->categorie == 'Conférence, Convention'){echo "selected";} ?>
                                        value="Conférence, Convention">Conférence, Convention</option>
                                    <option <?php if($tab->categorie == 'Réunion, Formation'){echo "selected";} ?>
                                        value="Réunion, Formation">Réunion, Formation</option>
                                    <option <?php if($tab->categorie == 'Soirée entreprise'){echo "selected";} ?>
                                        value="Soirée entreprise">Soirée d'entreprise</option>
                                    <option
                                        <?php if($tab->categorie == 'Séminaire résidentiel'){echo "selected";} ?>
                                        class="affix" value="Séminaire résidentiel">Séminaire résidentiel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile" name="photo_1" value="<?= $tab->photo_1 ?>" >
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
                                <input type="file" id="exampleInputFile" name="photo_2" value="<?= $tab->photo_2 ?>">
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
                                <input type="file" id="exampleInputFile" name="photo_3" value="<?= $tab->photo_3 ?>">
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
                                <input type="file" id="exampleInputFile" name="photo_4" value="<?= $tab->photo_4 ?>">
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
                    <?php }?>
                    <div class="block-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">edit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>