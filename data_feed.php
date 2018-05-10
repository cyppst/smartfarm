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
</head>
<body>
<div class="main-wrapper">
    <div class="app" id="app">
        <?php include('include/layout.php'); ?>

        <article class="content static-tables-page">
            <div class="title-block">
                <h1 class="title"> Static Tables </h1>
                <p class="title-description"> When blocks aren't enough </p>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <h3 class="title"> ข้อมูล FEED </h3>
                                </div>
                                <section>
                                    <?php require('include/piDB.php'); ?>


                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>วันที่ / เวลา</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = 'SELECT * from FEED ORDER BY DATETIME DESC;';
                                        $ret = $db->query($sql);
                                        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                            ?>
                                            <tr>
                                                <td><?= $row['DATETIME'] ?></td>
                                            </tr>
                                            <?php
                                        }
                                        $db->close();
                                        ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <?php include('include/footer.php'); ?>
    </div>
</div>
<script src="js/vendor.js"></script>
<script src="js/app.js"></script>
</body>
</html>