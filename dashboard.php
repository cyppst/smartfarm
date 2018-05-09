<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" id="theme-style" href="css/app.css">
    <link rel="stylesheet" id="theme-style" href="css/custom.css">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the piechart package.
        google.charts.load('current', {'packages': ['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(cm_chart);

        function cm_chart() {
            var jsonData = $.ajax({
                url: 'data1.php',
                dataType: "json",
                async: false,
                success: function (jsonData) {
                    var options =
                        {
                            legend: 'none',
                            hAxis: {minValue: 0, maxValue: 10, format: 'Y-m-d h:i:sa'},
                            pointSize: 10,
                            dataOpacity: 0.3,
                            height: 400,
                        };
                    var data = new google.visualization.arrayToDataTable(jsonData);
                    var chart = new google.visualization.LineChart(document.getElementById('cm_chart'));
                    chart.draw(data, options);

                }
            }).responseText;

        }
    </script>

    <script type="text/javascript">

        // Load the Visualization API and the piechart package.
        google.charts.load('current', {'packages': ['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(litre_chart);

        function litre_chart() {
            var jsonData = $.ajax({
                url: 'data2.php',
                dataType: "json",
                async: false,
                success: function (jsonData) {
                    var options =
                        {
                            legend: 'none',
                            hAxis: {minValue: 0, maxValue: 10, format: 'Y-m-d h:i:sa'},
                            pointSize: 10,
                            dataOpacity: 0.3,
                            height: 400,
                        };
                    var data = new google.visualization.arrayToDataTable(jsonData);
                    var chart = new google.visualization.LineChart(document.getElementById('litre_chart'));
                    chart.draw(data, options);

                }
            }).responseText;

        }
    </script>
</head>
<body>
<div class="main-wrapper">
    <div class="app" id="app">
        <?php include('include/layout.php'); ?>
        <article class="content dashboard-page">
            <div class="title-block">
                <h1 class="title"> Static Tables </h1>
                <p class="title-description"> When blocks aren't enough </p>
            </div>
            <section class="section">
                <div class="col col-12 col-sm-12 col-md-12 col-xl-12 history-col">
                    <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                        <div class="card-header card-header-sm bordered">
                            <div class="header-block">
                                <h3 class="title">Dashboard</h3>
                            </div>
                            <ul class="nav nav-tabs pull-right" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#cm" role="tab" data-toggle="tab">cm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#litre" role="tab" data-toggle="tab">litre</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade show" id="cm">
                                    <p class="title-description"> กราฟแสดงข้อมูลล่าสุดจาก Sensor </p>
                                    <div id="cm_chart"></div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="litre">
                                    <p class="title-description"> กราฟแสดงข้อมูลล่าสุดจาก Sensor </p>
                                    <div id="litre_chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <?php include('include/footer.php'); ?>
    </div>
</div>
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div id="data1_div">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="js/vendor.js"></script>
<script src="js/app.js"></script>


</body>
</html>

