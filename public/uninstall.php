<?php 

try {

    require "config.php";

    $connection = new PDO("mysql:host=$host", $username, $password, $options);

    $sql = file_get_contents("../data/destroy.sql");
    $connection -> exec($sql);

    echo "Database and user table deleted successfully.";
}
catch(PDOException $error) {
    echo $sql . "<br/>" . $error->getMessage();
}

?>