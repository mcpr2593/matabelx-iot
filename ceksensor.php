<?php
    include 'layouts/config.php';


    $sql = mysqli_query($link, "SELECT * FROM controler");
    $data = mysqli_fetch_assoc($sql);
    $value = $data["pir_sensor"];


    if ( $value == 1 ){
        $value = "<b>Ada Orang di Ruangan</b>";
    } else {
        $value = "<b>Ruangan Kosong</b>";
    }
    echo $value;
?>