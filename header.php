
<?php 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `top_header`";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc( $result);


    $sql = "SELECT * FROM `menuber`";
    $result = mysqli_query($conn, $sql);
    $manu = mysqli_fetch_assoc( $result);

    $sql = "SELECT * FROM `nav_menu`";
    $result = mysqli_query($conn, $sql);
  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--slick nav cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css" integrity="sha512-heyoieAHmpAL3BdaQMsbIOhVvGb4+pl4aGCZqWzX/f1BChRArrBy/XUZDHW9WVi5p6pf92pX4yjkfmdaIYa2QQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--fontawesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!--css link-->
    <link rel="stylesheet" href="style.css">
    
    <title>Hime</title>
</head>
<body>
    <section class="header-section">
        <div class="container">
            <div class="main-col">
                <div class="left-col">
                    <p><?php echo $row ['left_content']; ?></p>
                </div>
                <div class="right-col">
                    <ul>
                        <li><a href="#"><i class="fa-regular fa-user"></i></a></li>
                        <li><?php echo $row ['right_content']; ?></li>
                    </ul>
            </div>
        </div>
    </section>
    <!--header section end-->

    <section class="menu-section">
        <div class="container">
            <div class="main-col">
                <div class="left-col">
                    <a href="#">
                        <img src="<?php echo $manu ['menu_image']; ?> ">
                    </a>
                </div>
                <div class="center-col">                  
                        <ul id="menu">
                           <?php while( $nav = mysqli_fetch_assoc( $result)) { ?> 
                                <li><a href="#"><?php echo $nav ['nav_menu_content']; ?></a></li>
                            <?php } ?>

                            <li class="heder-button"><a href="<?php echo $manu ['menu_btn_url']; ?>"><?php echo $manu ['menu_btn']; ?> <img src="image/Export.svg"></a></li>
                        </ul>
                </div>
            </div>
        </div>
    </section>
    <!--manu secton end-->
