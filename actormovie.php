#!/usr/bin/php
<?php
$actorid = $argv[1];
$movieid = $argv[2];
$username = "Siadmin";
$password = "imdb";

$db = new mysqli('localhost',$username,$password,'DVD_Project');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "attempting to insert actor and movie: $actorid $movieid".PHP_EOL;
$insertString = "INSERT INTO starredin(Actor_ID,Movie_ID) VALUES ('$actorid', '$movieid');";

echo "attempting to execute :".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = "select * from starredin;";
$results = $db->query($queryString);
if ($db->db->errno > 0)
{
	echo __FILE__.":".__LINE__."DB Error: ".$db->db->error.PHP_EOL;
}



while ($obj = $results->fetch_object())
{
    print_r($obj);
}
$db->close();
echo "Actor Added to movie  Succesfully".PHP_EOL;
?>
