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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <h3 class="title"> Crontab</h3>
                                </div>
                                <section>
                                    <?php
                                    if(isset($_POST['data'])) {
                                        $myFile = "./include/crontab";
                                        $fh = fopen($myFile, 'w');
                                        fwrite($fh, $_POST['data']."\n");
                                        $fh = fopen($myFile, 'r');
                                        $theData = fread($fh, filesize($myFile));
//                                        exec("sudo -u pi /usr/bin/crontab -r");
                                        exec("sudo -u pi /usr/bin/crontab -u pi /var/www/html/include/crontab");

                                    } else {
                                        $myFile = "./include/crontab";
                                        $fh = fopen($myFile, 'r');
                                        $theData = fread($fh, filesize($myFile));
                                    }
                                    fclose($fh);
                                    ?>

                                    <form name="test" method="post" action="">
                                        <textarea  rows="10" cols="20" class="form-control" name="data"><?php echo $theData; ?></textarea>
                                        <input class="btn btn-success" type="submit" name="submit" value="Update File" />
                                    </form>
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