<?php 
    include 'dib_connect.php';

    $right_heading_content = $_POST ['right_heading_content'];
    $footer_btn = $_POST ['footer_btn'];
    $footer_btn_url = $_POST ['footer_btn_url'];
    $left_contnet = $_POST ['left_contnet'];
    $left_right_content = $_POST ['left_right_content'];
    $tv_content = $_POST ['tv_content'];
    $laget_content = $_POST ['laget_content'];
   
    $random = rand(1111, 9999);

    $left_image ='upload/' .$random .$_FILES['left_image']['name'];
    move_uploaded_file( $_FILES['left_image']['tmp_name'], $left_image);

    $right_image ='upload/' .$random .$_FILES['right_image']['name'];
    move_uploaded_file( $_FILES['right_image']['tmp_name'], $right_image);

    $sql ="INSERT INTO `footer`(`id`, `right_heading_content`, `footer_btn`, `footer_btn_url`, `left_contnet`, `left_right_content`, `tv_content`, `laget_content`, `left_image`, `right_image`) VALUES ('NULL','$right_heading_content','$footer_btn ',' $footer_btn_url','$left_contnet','$left_right_content',' $tv_content','$laget_content','$left_image ','$right_image')";

    $result = mysqli_query($conn, $sql);

    
    if($result){
     header("Location: deshboard_footer.php");
    }else{
        echo 'wrong';
    }
    

?>