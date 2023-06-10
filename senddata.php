<?php
    include 'layouts/config.php';

    $value = $_GET["sensor"];

    mysqli_query($link, "UPDATE controler SET pir_sensor='$value'");

?>