<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; ?>

<div class="content-container">
    <?php require "include/navbar.php"; ?>
    <div class="container-fluid">

    <div class="row">
            <div class="col-xs-12">
                <span class="page-title">
                    <h4>Commande</h4>
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
                                    <th>id commande</th>
                                    <th>id membre</th>
                                    <th>date commande</th>
                                    <th>les produit par id</th>
                                    <th>montant</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach( $data['getdata'] as $tab){
                                    echo '<tr>';
                                    echo '<td>'.$tab->id_commande.'</td>';
                                    echo '<td>'.$tab->id_membre.'</td>';
                                    echo '<td>'.$tab->date_commande.'</td>';
                                    echo '<td>'.$tab->lesproduits.'</td>';
                                    echo '<td> $'.$tab->montant.'</td>';
                                  
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