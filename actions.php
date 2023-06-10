<?php
    //system untuk mengubah value/nilai relay pada database 0=mati 1=nyala
    if(isset($_GET['device']) && isset($_GET['state'])){
        include 'layouts/config.php';
        $state = $_GET['state'];
        $device = $_GET['device'];

        if($device == '1'){
            mysqli_query($link, "UPDATE controler SET lampu1='$state'");
        }else if($device == '2'){
            mysqli_query($link, "UPDATE controler SET lampu2='$state'");
        }else if($device == '3'){
            mysqli_query($link, "UPDATE controler SET kipas='$state'");
        }else if($device == '4'){
            mysqli_query($link, "UPDATE controler SET televisi='$state'");
        }

        header('location: manage-device.php');
        exit;
    }
?>