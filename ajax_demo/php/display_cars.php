<?php

include("db.php");

$query = "SELECT * FROM cars";

$query_result = mysqli_query($connection,$query);

if(!$query_result){
    die('QUERY FAILED'.mysqli_error($connection));
}
else{
    while($row = mysqli_fetch_array($query_result)){
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['carName']}</td>";
        echo "</tr>";
        
    }
}
?>