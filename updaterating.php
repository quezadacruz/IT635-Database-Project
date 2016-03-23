#!/usr/bin/php
<?php

$title = $argv[1];

$rating = $argv[2];

$username = "Siadmin";
$password = "imdb";

$db = new mysqli('localhost',$username,$password,'DVD_Project');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "attempting to Edit Rating: $title $rating".PHP_EOL;
$insertString = "update newmovies set rating='$rating' where Movie_Title='$title';";

echo "attempting to execute :".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = "select * from newmovies;";
$results = $db->query($queryString);



while ($obj = $results->fetch_object())
{
    print_r($obj);
}
$db->close();
echo "User Rating modified".PHP_EOL;
?>


