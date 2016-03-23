#!/usr/bin/php
<?php

$title = $argv[1];

$actor = $argv[2];



$username = "Siadmin";
$password = "imdb";

$db = new mysqli('localhost',$username,$password,'DVD_Project');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "attempting to Add $actor to  $title Remember to include Movie name before Actor_Name".PHP_EOL;
$insertString = "update newmovies set Actor='$actor' where Movie_Title='$title';";

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
echo "Actor Added to Movie ".PHP_EOL;
?>


