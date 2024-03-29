// Chart.JS
$(function() {
    Chart.defaults.global.responsive = true;

    var ctx = $("#dashboard-order-chart").get(0).getContext("2d");
    var ctx2 = $("#dashboard-stat-chart").get(0).getContext("2d");
    var options = {
        bezierCurve: false,
        pointDotRadius: 8,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleFontColor: "#666",
        scaleLineColor: "rgba(0,0,0,0)",
        scaleShowVerticalLines: false,
        scaleShowGridLines: true,
        scaleOverride: false,
        scaleSteps: 10,
        pointDotStrokeWidth: 2,

    }

    var options2 = {
        percentageInnerCutout: 75,
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    }
    var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            fillColor: "rgba(0,177,106,0.3)",
            strokeColor: "rgba(0,177,106,1)",
            pointColor: "#FFF",
            pointStrokeColor: "rgba(0,177,106,1)",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        }]
    };

    var data2 = [{
            value: 1000,
            color: "#F64747",
            highlight: "#ed2323",
            label: "Commande"
        },
        {
            value: 0,
            color: "#ff9704",
            highlight: "#ff7200",
            label: "Membre"
        },
        {
            value: 20,
            color: "#00B16A",
            highlight: "#01a250",
            label: "Views"
        }
    ]

    var myLineChart = new Chart(ctx).Line(data, options);
    var myBarChart = new Chart(ctx2).Doughnut(data2, options2);
    var legend = myBarChart.generateLegend();
    $("#dashboard-stat-chart-legend").append(legend);
});