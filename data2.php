<?php

require_once('include/piDB.php');

$db = new PiDB();
if (!$db) {
    echo $db->lastErrorMsg();
}

$sql = <<<EOF
      SELECT * from LITRE;
EOF;

$ret = $db->query($sql);

$data[] = array('DATETIME', 'LITRE');

while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    $data[] = array($row['DATETIME'], (int)$row['LITRE']);
}
$db->close();
echo json_encode($data);








