<?php
ob_start();
?>
<?php
session_start();
if ($_SESSION['business-username']) {
    session_destroy();
    header("location:business-login.php");
} else if ($_SESSION['investor-username']) {
    session_destroy();
    header("location:investor-login.php");
}