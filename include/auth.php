<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF'], ".php");

if (isset($_GET['logout'])) {
    unset($_SESSION['ID']);
    unset($_SESSION['USERNAME']);
    header("Location:index.php");

}
if (isset($_POST["name"])) {

    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('include/auth.db');
        }
    }

    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    }
    $sql = 'SELECT ID,USERNAME from USERS where USERNAME="' . $_POST["name"] . '" and PASSWORD="' . $_POST["pass"] . '"  ;';

    $id = '';

    $ret = $db->query($sql);
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        $id = $row['ID'] !== null ? $row['ID'] : false;
        if ($row['ID'] !== null) {
            session_start();
            $ID = $row['ID'];
            $USERNAME = $row['USERNAME'];

        } else {
            false;
        }
    }


    if ($id != "") {
        session_start();
        $_SESSION['ID'] = $ID;
        $_SESSION['USERNAME'] = $USERNAME;
        header("Location:dashboard.php");

    } else {
        echo "User not exist, please try again";
    }


    exit();

}

if ($current_page == 'index' && isset($_SESSION['ID'])) {
    header("Location:dashboard.php");

} else {
    false;
}


?>