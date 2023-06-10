<?php
    include 'layouts/config.php';// meminta data koneksi pada database


    $sql = mysqli_query($link, "SELECT * FROM controler"); // meminta data dari tabel controler
    $data = mysqli_fetch_assoc($sql);
    $value = $data["pir_sensor"]; //mengabil data colum pir_sensor dari tabel controler 


    if ( $value == 1 ){
        $value = "<b>Ada Orang di Ruangan</b>"; //menampilkan text jika value sensor 1
    } else {
        $value = "<b>Ruangan Kosong</b>"; //menampilkan text jika value sensor 0
    }
    echo $value;
?>