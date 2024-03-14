<?php 
    include 'dib_connect.php';

    $id = $_GET ['id'];

    $sub_heading = $_POST ['sub_heading'];
    $heading = $_POST ['heading'];
    $content = $_POST ['content'];
    $bestill_btn = $_POST ['bestill_btn'];
    $bestill_url = $_POST ['bestill_url'];
    $tjenester_btn = $_POST ['tjenester_btn'];
    $tjenester_url = $_POST ['tjenester_url'];

    
    $random = rand(1111, 9999);

    $slider_image ='upload/' .$random .$_FILES['slider_image']['name'];
    move_uploaded_file( $_FILES['slider_image']['tmp_name'], $slider_image);

    $slider_logo_image ='upload/' .$random .$_FILES['slider_logo_image']['name'];
    move_uploaded_file( $_FILES['slider_logo_image']['tmp_name'], $slider_logo_image);

    $sql ="UPDATE `slider` SET `sub_heading`='$sub_heading',`heading`='$heading',`content`='$content',`bestill_btn`='$bestill_btn',`bestill_url`='$bestill_url',`tjenester_btn`=' $tjenester_btn',`tjenester_url`=' $tjenester_url',`slider_image`='$slider_image',`slider_logo_image`='$slider_logo_image' WHERE id='$id'";
    
    $result = mysqli_query($conn, $sql);

    
   if($result){
    header("Location: index.php");
    }else{
        echo 'wrong';
    }

?>