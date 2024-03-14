<?php 
    include_once 'dib_connect.php';

    $id = $_GET ['id'];

    $left_content = $_POST ['left_content'];
    $right_content = $_POST ['right_content'];

    $sql ="UPDATE `top_header` SET `left_content`='$left_content',`right_content`='$right_content' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    
   if($result){
    header("Location: index.php");
    }else{
        echo 'wrong';
    }
?>