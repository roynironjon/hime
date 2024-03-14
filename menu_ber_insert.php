<?php 
    include 'dib_connect.php';

   
    $menu_btn = $_POST ['menu_btn'];
    $menu_btn_url = $_POST ['menu_btn_url'];

    $random = rand(1111, 9999);

    $menu_image ='upload/' .$random .$_FILES['menu_image']['name'];
    move_uploaded_file( $_FILES['menu_image']['tmp_name'], $menu_image);

    $sql ="INSERT INTO `menuber`(`id`, `menu_btn`, `menu_btn_url`, `menu_image`) VALUES ('NULL','$menu_btn ','$menu_btn_url','$menu_image ')";

    $result = mysqli_query($conn, $sql);

    
    if($result){
     header("Location: deshboard_menueber.php");
    }else{
        echo 'wrong';
    };
?>