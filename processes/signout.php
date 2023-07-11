<?php
require "config/dbConn.php";


if(isset($_SESSION["control"])){
    unset($_SESSION["control"]);
    header("location:../");

}
?>