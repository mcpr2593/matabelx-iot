<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: auth-login.php");
    exit;
}
?>

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
