<?php 
    include "dib_connect.php";

    $id = $_GET["id"];

    $nave_manu_content = $_POST["nav_menu_content"];
    $nave_manu_url = $_POST["nav_menu_url"];

    $main_nav_menu_update_query ="UPDATE `nav_menu` SET `nav_menu_content`='$nave_manu_content ',`nav_menu_url`='$nave_manu_url' WHERE id='$id'";

    $menu_result = mysqli_query($conn,  $main_nav_menu_update_query);

    if($menu_result){
        header("Location: index.php");
    }
?>