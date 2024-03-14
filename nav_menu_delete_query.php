<?php 

    include "dib_connect.php";

    $id = $_GET["id"];

    $main_nav_delete = "DELETE FROM `nav_menu` WHERE id='$id'";
    $result = mysqli_query($conn,  $main_nav_delete);

    if($result){
        header("Location: deshboard_nav_menu.php");
    }

?>