<?php
//Connect To Database
$hostname='siliconstocusers.db.9312677.hostedresource.com';
$username='siliconstocusers';
$password='your password';
$dbname='siliconstocusers';
$usertable='your_tablename';
$yourfield = 'your_field';

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

$query = 'SELECT * FROM ' . $usertable;
$result = mysql_query($query);
if($result) {
    while($row = mysql_fetch_array($result)){
        $name = $row[$yourfield];
        echo 'Name: ' . $name;
    }
}
?>
