<?php
    include 'layouts/config.php';

    $sql = mysqli_query($link, "SELECT * FROM controler");
    $query = mysqli_num_rows($sql);

    $data= mysqli_fetch_assoc($sql);
    $res = json_encode($data);
    echo $res;
?>