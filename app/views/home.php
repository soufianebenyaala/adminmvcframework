<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; 

?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="content-container">
    <?php require "include/navbar.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <span class="page-title red">
                    <h2>Dashboard</h2>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">

                <ol class="breadcrumb">
                    <li><a href="<?=URLROOT; ?>home/home">Home</a>
                    </li>
                    <li class="active">Dashboard</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="#">
                    <div class="banner-block yellow">
                        <div class="block-content">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa fa-truck fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="banner-content">
                                <div class="title"><?= $data['nombre_de_commande'][0]->nombre_de_commande ?></div>
                                <div class="sub-title">Commande</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="#">
                    <div class="banner-block green">
                        <div class="block-content">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="banner-content">
                                <div class="title"><?= $data['nombre_de_views'] ?></div>
                                <div class="sub-title">Product View</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>

                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="#">
                    <div class="banner-block blue">
                        <div class="block-content">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa fa-user fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="banner-content">
                                <div class="title"><?= $data['nombre_de_membre'][0]->nombre_de_membre ?></div>
                                <div class="sub-title">Membre</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>

                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner-block white">
                    <div class="block-content">
                        <div class="block-title">Orders</div>
                        <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner-block white">
                    <div class="block-content">
                        <div class="block-title">Stats</div>
                        <div class="row">
                            <div id="donutchart" style="width: 900px; height: 500px;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-block white">
                <div class="block-content">
                  
                    <div id="chart_month" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<footer class="footer">
    <span><i class="fa fa-copyright"></i> Tui2Tone Labs, 2015</span>
</footer>
<script type="text/javascript">
google.charts.load("current", {
    packages: ["corechart"]
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],

        <?php
            echo "['Membre',".$data['nombre_de_membre'][0]->nombre_de_membre."],";
            echo "['Mail',0],";
            echo "['Commande',".$data['nombre_de_commande'][0]->nombre_de_commande."]," ;
            echo "['Product View',".$data['nombre_de_views']."]," ;
           
        ?>

    ]);

    var options = {
        title: 'My Daily Activities',
        pieHole: 0.6,
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
}
</script>

<script type="text/javascript">
google.charts.load('current', {
    'packages': ['bar']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var d = new Date();
    var n = d.getFullYear();
    var data = google.visualization.arrayToDataTable([
        ['' + n, 'commande', 'gagne', 'Produit'],

        <?php
            echo "['January',".$data[1][0]->nombreCommandeParMois.",".$data['mois1'][0]->montant.",".$data["produitparmois1"]."],";
            echo "['Feb',".$data[2][0]->nombreCommandeParMois.",".$data['mois2'][0]->montant.",".$data["produitparmois2"]."],";
            echo "['March',".$data[3][0]->nombreCommandeParMois.",".$data['mois3'][0]->montant.",".$data["produitparmois3"]."]," ;
            echo "['April',".$data[4][0]->nombreCommandeParMois.",".$data['mois4'][0]->montant.",".$data["produitparmois4"]."]," ;
            echo "['May',".$data[5][0]->nombreCommandeParMois.",".$data['mois5'][0]->montant.",".$data["produitparmois5"]."],";
            echo "['June',".$data[6][0]->nombreCommandeParMois.",".$data['mois6'][0]->montant.",".$data["produitparmois6"]."],";
            echo "['July',".$data[7][0]->nombreCommandeParMois.",".$data['mois7'][0]->montant.",".$data["produitparmois7"]."]," ;
            echo "['august',".$data[8][0]->nombreCommandeParMois.",".$data['mois8'][0]->montant.",".$data["produitparmois8"]."]," ;
            echo "['september',".$data[9][0]->nombreCommandeParMois.",".$data['mois9'][0]->montant.",".$data["produitparmois9"]."],";
            echo "['Octobre',".$data[10][0]->nombreCommandeParMois.",".$data['mois10'][0]->montant.",".$data["produitparmois10"]."],";
            echo "['November',".$data[11][0]->nombreCommandeParMois.",".$data['mois11'][0]->montant.",".$data["produitparmois11"]."]," ;
            echo "['December',".$data[12][0]->nombreCommandeParMois.",".$data['mois12'][0]->montant.",".$data["produitparmois12"]."]," ;
           
        ?>
    ]);


    var options = {
        chart: {
            title: 'E-shop Performance',
            subtitle: 'commande, gagne and Produit : ' + n,
        }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>

<script type="text/javascript">
//par month
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var d = new Date();
    var n = d.getFullYear();
    var data = google.visualization.arrayToDataTable([
        [''+n, 'Montant'],

        <?php
            echo "['January',".$data['montantParMonth1']."],";
            echo "['Feb',".$data['montantParMonth2']."],";
            echo "['March',".$data['montantParMonth3']."]," ;
            echo "['April',".$data['montantParMonth4']."]," ;
            echo "['May',".$data['montantParMonth5']."],";
            echo "['June',".$data['montantParMonth6']."],";
            echo "['July',".$data['montantParMonth7']."]," ;
            echo "['august',".$data['montantParMonth8']."]," ;
            echo "['september',".$data['montantParMonth9']."],";
            echo "['Octobre',".$data['montantParMonth10']."],";
            echo "['November',".$data['montantParMonth11']."]," ;
            echo "['December',".$data['montantParMonth12']."]," ;
           
        ?>
    ]);

    var options = {
        title: 'Company Performance',
        hAxis: {
            title: ''+n,
            titleTextStyle: {
                color: '#333'
            }
        },
        vAxis: {
            minValue: 0
        }
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart_month'));
    chart.draw(data, options);
}
</script>

</body>

</html>