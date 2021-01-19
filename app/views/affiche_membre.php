<?php require "include/top_header.php"; ?>
<?php require "include/header.php";
?>

<div class="content-container">
    <?php require "include/navbar.php"; ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col-xs-12">
                <span class="page-title">
                    <h4>Membre</h4>
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
                                    <th>id membre</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>pseudo</th>
                                    <th>email</th>
                                    <th>addresse</th>
                                    <th>zip code</th>
                                    <th>country</th>
                                    <th>city</th>
                                    <th>phone</th>
                                    <th>sexe</th>
                                    <th>verify account</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach( $data['getdata'] as $tab){
                                    echo '<tr>';
                                    echo '<td>'.$tab->id_membre.'</td>';
                                    echo '<td>'.$tab->first_name.'</td>';
                                    echo '<td>'.$tab->last_name.'</td>';
                                    echo '<td>'.$tab->pseudo.'</td>';
                                    echo '<td>'.$tab->email.'</td>';
                                    echo '<td>'.$tab->addresse.'</td>';
                                    echo '<td>'.$tab->zip_code.'</td>';
                                    echo '<td>'.$tab->pays .'</td>';
                                    echo '<td>'.$tab->ville.'</td>';
                                    echo '<td>'.$tab->telephone.'</td>';
                                    if($tab->sexe == 'H'){echo '<td>Homme</td>';}else{echo '<td>Femme</td>';}
                                    echo '<td>'.$tab->verifyAccount.'</td>';
                                    echo "<td><a href='".URLROOT."GestionMembres/deletemembre/$tab->id_membre'><button class='main-btn'><i class='fa fa-trash' style='font-size:24px;'></i></button></a></td>";
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

