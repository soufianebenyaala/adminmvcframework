<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; ?>

<div class="content-container">
    <?php require "include/navbar.php"; ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col-xs-12">
                <span class="page-title">
                    <h4>Avis</h4>
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
                                    <th>id avis</th>
                                    <th>id membre</th>
                                    <th>id salle</th>
                                    <th>note</th>
                                    <th>note</th>
                                    <th>date</th>
                                    <th>message</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach( $data['getdata'] as $tab){
                                    echo '<tr>';
                                    echo '<td>'.$tab->id_avis .'</td>';
                                    echo '<td>'.$tab->id_membre.'</td>';
                                    echo '<td>'.$tab->id_salle.'</td>';
                                    echo '<td>'.$tab->note.'</td>';
                                    echo '<td>'.$tab->date.'</td>';
                                    echo '<td>'.$tab->messege.'</td>';
                                    echo "<td><button class='main-btn'><i class='fa fa-trash' style='font-size:24px;'></i></button></td>";
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
    </div>
</div>