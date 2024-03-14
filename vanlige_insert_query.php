<?php 
    include 'dib_connect.php';

    $sub_heading = $_POST ['sub_heading'];
    $heading = $_POST ['heading'];
    $contnet = $_POST ['contnet'];
    $vanlige_btn = $_POST ['vanlige_btn'];
    $vanlige_url = $_POST ['vanlige_url'];

    $sql ="INSERT INTO `vanlige`(`id`, `sub_heading`, `heading`, `contnet`, `vanlige_btn`, `vanlige_url`) 
    VALUES ('NULL','$sub_heading','$heading','$contnet','$vanlige_btn','$vanlige_url')";

    $result = mysqli_query($conn, $sql);

        
    if($result){
    header("Location: deshboard_vanlige.php");
    }else{
        echo 'wrong';
    }
?>