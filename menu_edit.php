<?php 
    include 'dib_connect.php';

    $id = $_GET ['id'];

    $menu_btn = $_POST ['menu_btn'];
    $menu_btn_url = $_POST ['menu_btn_url'];

    $random = rand(1111, 9999);

    $menu_image ='upload/' .$random .$_FILES['menu_image']['name'];
    move_uploaded_file( $_FILES['menu_image']['tmp_name'], $menu_image);

    $sql ="UPDATE `menuber` SET `menu_btn`='$menu_btn ',`menu_btn_url`='$menu_btn_url',`menu_image`='$menu_image' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    
    if($result){
     header("Location: index.php");
    }else{
        echo 'wrong';
    };
?>