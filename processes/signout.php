<?php
require_once "../config/dbConn.php";


if(isset($_SESSION["control"])){
    unset($_SESSION["control"]);
    header("location: ../signIn.php");

}
?>