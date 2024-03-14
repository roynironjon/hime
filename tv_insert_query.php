<?php 
    include 'dib_connect.php';

    $content_heading = $_POST ['content_heading'];
    $contnet = $_POST ['contnet'];
    $tv_btn = $_POST ['tv_btn'];
    $tv_url = $_POST ['tv_url'];
    
    $random = rand(1111, 9999);

    $left_image ='upload/' .$random .$_FILES['left_image']['name'];
    move_uploaded_file( $_FILES['left_image']['tmp_name'], $left_image);

    $right_image ='upload/' .$random .$_FILES['right_image']['name'];
    move_uploaded_file( $_FILES['right_image']['tmp_name'], $right_image);


    $sql ="INSERT INTO `kabel_tv`(`id`, `content_heading`, `contnet`, `tv_btn`, `tv_url`, `left_image`, `right_image`) 
    VALUES ('NULL','$content_heading','$contnet','$tv_btn',' $tv_url',' $left_image','$right_image ')";

    $result = mysqli_query($conn, $sql);

        
    if($result){
    header("Location: deshboard_tv.php");
    }else{
        echo 'wrong';
    }

?>