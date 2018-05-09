<?php

require_once('include/piDB.php');

$db = new PiDB();
if (!$db) {
    echo $db->lastErrorMsg();
}

$sql = <<<EOF
      SELECT * from CM;
EOF;

$ret = $db->query($sql);

$data[] = array('DATETIME', 'CM');

while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    $data[] = array($row['DATETIME'], (int)$row['CM']);
}
$db->close();
echo json_encode($data);








