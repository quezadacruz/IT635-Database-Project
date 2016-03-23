#!/usr/bin/php
<?php
$firstname = $argv[1];
$lastname = $argv[2];
$username = "Siadmin";
$password = "imdb";

$db = new mysqli('localhost',$username,$password,'DVD_Project');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "attempting to insert actor: $firstname $lastname".PHP_EOL;
$insertString = "INSERT INTO actors(First_Name,Last_Name) VALUES ('$firstname', '$lastname');";

echo "attempting to execute :".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = "select * from actors;";
$results = $db->query($queryString);



while ($obj = $results->fetch_object())
{
    print_r($obj);
}
$db->close();
echo "Actor Added Succesfully".PHP_EOL;
?>



