<?php 
    include 'dib_connect.php';

    $id = $_GET ['id'];

    $sub_heading = $_POST ['sub_heading'];
    $heading = $_POST ['heading'];
    $contnet = $_POST ['contnet'];
    $vanlige_btn = $_POST ['vanlige_btn'];
    $vanlige_url = $_POST ['vanlige_url'];

    $sql ="UPDATE `vanlige` SET `sub_heading`='$sub_heading',`heading`='$heading',`contnet`='$contnet',`vanlige_btn`='$vanlige_btn',`vanlige_url`='$vanlige_url' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    
    if($result){
     header("Location: index.php");
    }else{
        echo 'wrong';
    }
?>