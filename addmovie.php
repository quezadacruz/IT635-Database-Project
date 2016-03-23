#!/usr/bin/php
<?php
$title = $argv[1];
$year = $argv[2];
$rating = $argv[3];
$username = "Siadmin";
$password = "imdb";

$db = new mysqli('localhost',$username,$password,'DVD_Project');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "attempting to Create Entry: $title $year $rating remember please use_to include space in movie name".PHP_EOL;
$insertString = "INSERT INTO newmovies(Movie_Title,Released,rating) VALUES ('$title', '$year', '$rating');";

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
echo "Movie Created Succesfully".PHP_EOL;
?>


