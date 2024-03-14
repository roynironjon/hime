<?php 
    include 'dib_connect.php';

    $sub_heading = $_POST ['sub_heading'];
    $heading = $_POST ['heading'];
    $contnet = $_POST ['contnet'];
    $left_cotent_heading = $_POST ['left_cotent_heading'];
    $left_content = $_POST ['left_content'];
    
    $random = rand(1111, 9999);

    $right_column_image ='upload/' .$random .$_FILES['right_column_image']['name'];
    move_uploaded_file( $_FILES['right_column_image']['tmp_name'], $right_column_image);

    $sql ="INSERT INTO `kabel`(`id`, `sub_heading`, `heading`, `contnet`, `left_cotent_heading`, `left_content`, `right_column_image`) 
    VALUES ('NULL',' $sub_heading','$heading',' $contnet','$left_cotent_heading','$left_content','$right_column_image ')";

    $result = mysqli_query($conn, $sql);

        
    if($result){
    header("Location: deashboard_kabel.php");
    }else{
        echo 'wrong';
    }

?>