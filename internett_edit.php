<?php 
    include 'dib_connect.php';

    $id = $_GET ['id'];

    $sub_heading = $_POST ['sub_heading'];
    $heading = $_POST ['heading'];
    $left_cotent_heading = $_POST ['left_cotent_heading'];
    $right_content_heading = $_POST ['right_content_heading'];
    $contnet = $_POST ['contnet'];
    $internett_btn = $_POST ['internett_btn'];
    $internett_url = $_POST ['internett_url'];

    $random = rand(1111, 9999);

    $left_image ='upload/' .$random .$_FILES['left_image']['name'];
    move_uploaded_file( $_FILES['left_image']['tmp_name'], $left_image);

    $right_image ='upload/' .$random .$_FILES['right_image']['name'];
    move_uploaded_file( $_FILES['right_image']['tmp_name'], $right_image);



    $sql ="UPDATE `internett` SET `sub_heading`='$sub_heading',`heading`='$heading',`left_cotent_heading`='$left_cotent_heading',`right_content_heading`='$right_content_heading',`contnet`='$contnet',`internett_btn`=' $internett_btn',`internett_url`='$internett_url',`left_image`='$left_image',`right_image`='$right_image' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    
   if($result){
    header("Location: index.php");
    }else{
        echo 'wrong';
    }


?>