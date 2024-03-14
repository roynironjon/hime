<?php 
    include 'dib_connect.php';

    $nav_menu_content = $_POST ['nav_menu_content'];
    $nav_menu_url = $_POST ['nav_menu_url'];

    $sql ="INSERT INTO `nav_menu`(`id`, `nav_menu_content`, `nav_menu_url`) VALUES ('NULL','$nav_menu_content','$nav_menu_url')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: deshboard_nav_menu.php");
    }else{
        echo 'wrong';
    }
    

?>