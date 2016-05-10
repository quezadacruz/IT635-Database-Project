!/usr/bin/php
<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","Siadmin","imdb","DVD_Project") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from newmovies";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

 $fp = fopen('newmovies.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
exec("mongoimport -h ds017862.mlab.com:17862 -d it635 -c newmovies -u siadmin -p 1989 --file newmovies.json --jsonArray ");

    //close the db connection
    mysqli_close($connection);


?>

