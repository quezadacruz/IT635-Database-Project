#!/usr/bin/php
<?php
$fname = $argv[1];
$lname = $argv[2];
$username = "Siadmin";
$password = "imdb";


$db = new mysqli('localhost',$username,$password,'DVD_Project');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "attempting to insert actor and movie: $fname $lname".PHP_EOL;
$insertString = "select First_Name,Last_Name,Movie_Title FROM ((actors join starredin on actors.Actor_ID = starredin.Actor_ID) join newmovies on starredin.Movie_ID = newmovies.Movie_ID) where First_Name = '$fname' ;";

echo "attempting to execute :".PHP_EOL;


$results = $db->query($insertString);
if ($db->db->errno > 0)
{
	echo __FILE__.":".__LINE__."DB Error: ".$db->db->error.PHP_EOL;
}



while ($obj = $results->fetch_object())

{

    print_r($obj);

}
$db->close();
?>

