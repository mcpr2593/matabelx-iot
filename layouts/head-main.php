<?php
// include language configuration file based on selected language
$lang = "id";
if (isset($_GET['lang'])) {
   $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
}
if( isset( $_SESSION['lang'] ) ) {
    $lang = $_SESSION['lang'];
}else {
    $lang = "id";
}
require_once ("./assets/lang/" . $lang . ".php");

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<?php
$n_apps = "MatabelX";
$n_creator = "Midnight Studio";
$descweb = "Memantau Barang Elektronik Jarak Jauh";
?>