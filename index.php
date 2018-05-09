<?php require_once('include/auth.php') ?>
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
</head>
<body>
<div class="auth">
    <div class="auth-container">
        <div class="card">
            <header class="auth-header">
                <h1 class="auth-title">
                    <div class="logo">
                        <span class="l l1"></span>
                        <span class="l l2"></span>
                        <span class="l l3"></span>
                        <span class="l l4"></span>
                        <span class="l l5"></span>
                    </div>
                    ModularAdmin
                </h1>
            </header>
            <div class="auth-content">
                <form id="login-form" action="<?php $_PHP_SELF ?>" method="POST" novalidate="">
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control underlined" name="name" id="name"
                               placeholder="ป้อนชื่อผู้ใช้" required></div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control underlined" name="pass" id="pass"
                               placeholder="ป้อนรหัสผ่าน" required></div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="js/vendor.js"></script>
<script src="js/app.js"></script>
</body>
</html>
