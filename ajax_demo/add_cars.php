<?php
require("db.php");

if(isset($_POST['car_name'])){
    $brand = $_POST['car_name'];
    $query = "INSERT INTO cars(carName) VALUES('$brand')";
    $insert_query = mysqli_query($connection,$query);
    if(!$insert_query){
        die('QUERY FAILED'.mysqli_error($connection));
    }
    else{
        header("Location: index.html");
    }
}


?>