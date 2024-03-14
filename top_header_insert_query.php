<?php 
    include_once 'dib_connect.php';

    $left_content = $_POST ['left_content'];
    $right_content = $_POST ['right_content'];

    $sql ="INSERT INTO `top_header`(`id`, `left_content`, `right_content`) 
    VALUES ('NULL','$left_content','$right_content')";

    $result = mysqli_query($conn, $sql);

    
   if($result){
    header("Location: deshboard_top_header.php");
    }else{
        echo 'wrong';
    }
?>