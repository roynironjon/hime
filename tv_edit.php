<?php 
    include 'dib_connect.php';

    $id = $_GET ['id'];

    $content_heading = $_POST ['content_heading'];
    $contnet = $_POST ['contnet'];
    $tv_btn = $_POST ['tv_btn'];
    $tv_url = $_POST ['tv_url'];
    
    $random = rand(1111, 9999);

    $left_image ='upload/' .$random .$_FILES['left_image']['name'];
    move_uploaded_file( $_FILES['left_image']['tmp_name'], $left_image);

    $right_image ='upload/' .$random .$_FILES['right_image']['name'];
    move_uploaded_file( $_FILES['right_image']['tmp_name'], $right_image);


    $sql ="UPDATE `kabel_tv` SET `content_heading`=' $content_heading',`contnet`='$contnet',`tv_btn`='$tv_btn',`tv_url`='$tv_url',`left_image`='$left_image',`right_image`='  $right_image' WHERE id='$id'";


    $result = mysqli_query($conn, $sql);

    
    if($result){
     header("Location: index.php");
    }else{
        echo 'wrong';
    }

?>