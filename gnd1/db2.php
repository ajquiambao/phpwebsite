

<?php
$connection = mysql_connect('192.168.21.57', 'root', 'toroio');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('newregister');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>
