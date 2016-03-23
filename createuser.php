#!/usr/bin/php
<?php
$username = $argv[1];
$password = $argv[2];
$privilegeLevel = $argv[3];
$displayName = $argv[4];
$db = new mysqli('localhost','root','1989','DVD_Project');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "attempting to insert record: $username $password $privilegeLevel $displayName".PHP_EOL;
$insertString = "insert into login(username, password, privilegeLevel, displayName) values ('$username', PASSWORD('$password'), '$privilegeLevel', '$displayName');";
echo "attempting to execute this SQL:".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = "select * from login;";
$results = $db->query($queryString);
print_r($results);
while ($obj = $results->fetch_object())
{
    print_r($obj);
}
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
