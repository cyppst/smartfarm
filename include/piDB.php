<?php

class PiDB extends SQLite3
{
    function __construct()
    {
        $this->open('include/smartfarm.db');
    }
}


$db = new PiDB();
if (!$db) {
    echo $db->lastErrorMsg();
}