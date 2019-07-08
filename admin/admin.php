<?php include '../confirm.ini.php'?>
<?php
session_start();
if(empty($_SESSION['username'])){
 header("Location: login.php?errno=3");
 exit();
}
echo "Welcome to ".$SiteName." Admin";
?>
