<?php
require("db.php");

$search = $_POST['search'];
if(!empty($search)){
    $query = "SELECT * FROM cars WHERE carName LIKE '$search%'";
    $search_query = mysqli_query($connection,$query);
    if(!$search_query){
        die('QUERY FAILED'.mysqli_error($connection));
    }
    else{
        echo "<ul class='list-unstyled'>";
        while($row = mysqli_fetch_array($search_query)){
            $brand = $row["carName"];
            echo"<li> {$brand} in stock";
        }
        echo "<ul>";
    }
}

?>