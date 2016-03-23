#!/usr/bin/php
<?php
$actor = $argv[1];


$username = "Guest";
$password = "guest";

$db = new mysqli('localhost',$username,$password,'DVD_Project');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "searching Actor ....: ".PHP_EOL;

$insertString = "select * FROM newmovies where Actor like '$actor';";

echo "attempting to execute :".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = "select * FROM newmovies where Actor like '$actor';";
$results = $db->query($queryString);



while ($obj = $results->fetch_object())
{
    print_r($obj);
}
$db->close();
echo "Actor Added Succesfully".PHP_EOL;
?>



