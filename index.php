<?php include 'header.php'; 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `slider`";
    $result = mysqli_query($conn, $sql);
    $slider = mysqli_fetch_assoc( $result);

    $sql = "SELECT * FROM `internett` ";
    $result = mysqli_query($conn, $sql);
    $internett = mysqli_fetch_assoc( $result);

    $sql = "SELECT * FROM `kabel` ";
    $result = mysqli_query($conn, $sql);
    $kabel = mysqli_fetch_assoc( $result);

    $sql = "SELECT * FROM `kabel_tv` ";
    $result = mysqli_query($conn, $sql);
    $tv = mysqli_fetch_assoc( $result);

    $sql = "SELECT * FROM `vanlige` ";
    $result = mysqli_query($conn, $sql);
    $vanlige = mysqli_fetch_assoc( $result);


?>

    <section class="banner-section">
        <div class="container">
            <div class="main-col">
                <div class="left-col">
                    <h5><?php echo $slider ['sub_heading']; ?></h5>
                    <h2><?php echo $slider ['heading']; ?></h2>
                    <p><?php echo $slider ['content']; ?></p>
                    <a class="btn-1"  href="<?php echo $slider ['bestill_url']; ?>"><?php echo $slider ['bestill_btn']; ?><img src="image/Export.svg"> </a>
                   <a class="btn-2" href="<?php echo $slider ['tjenester_url']; ?>"><?php echo $slider ['tjenester_btn']; ?><i class="fa-solid fa-angle-right"></i> </a>
                </div>
                <div class="right-col">
                    <div class="img-col">
                        <img src="<?php echo $slider ['slider_image']; ?>">
                        <div class="img">
                            <img src="<?php echo $slider ['slider_logo_image']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner section end-->

    <section class="internet-section" id="tv-internet">
        <div class="container">
            <div class="top-section">
                <h5><?php echo $internett ['sub_heading']; ?></h5>
                <h2><?php echo $internett ['heading']; ?></h2>
            </div>
            <div class="main-col">
                <div class="flex-col">
                    <div class="left-col">
                        <img src="<?php echo $internett ['left_image']; ?>">
                    </div>
                    <div class="right-col">
                    <h4><?php echo $internett ['left_cotent_heading']; ?></h4>
                    <p><?php echo $internett ['contnet']; ?></p>
                    <a href="<?php echo $internett ['internett_url']; ?>"><?php echo $internett ['internett_btn']; ?> <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="flex-col">
                    <div class="left-col">
                        <img src="<?php echo $internett ['right_image']; ?>">
                    </div>
                    <div class="right-col">
                    <h4><?php echo $internett ['right_content_heading']; ?></h4>
                    <p><?php echo $internett ['contnet']; ?></p>
                    <a href="<?php echo $internett ['internett_url']; ?>"><?php echo $internett ['internett_btn']; ?> <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="btn">
                <a href="#"><?php echo $slider ['bestill_btn']; ?> <img src="image/Export.svg"></a>
            </div>
        </div>
    </section>
    <!--interner section end-->

    <section class="kabel-section">
        <div class="container">
            <div class="top-section">
                <h5><?php echo $kabel ['sub_heading']; ?></h5>
                <h2><?php echo $kabel ['heading']; ?></h2>
                <p><?php echo $kabel ['contnet']; ?></p>
            </div>
            <div class="main-col">
                <div class="left-col">
                    <h2><?php echo $kabel ['left_cotent_heading']; ?></h2>
                    <p><?php echo $kabel ['left_content']; ?></p>
                    <a class="btn-1" href="#"><?php echo $slider ['bestill_btn']; ?> <img src="image/Export.svg"></a>
                </div>
                <div class="right-col">
                    <img src="<?php echo $kabel ['right_column_image']; ?>">
                </div>
            </div>                      
        </div>
    </section>
    <!--kabel section end-->
    <section class="tv-section">
        <div class="container">
            <div class="main-tv">
                <div class="main-column">
                    <div class="left-col">
                        <img src="<?php echo $tv ['left_image']; ?>">
                    </div>
                    <div class="right-col">
                        <h2><?php echo $tv ['content_heading']; ?></h2>
                        <p><?php echo $tv ['contnet']; ?></p>
                        <button class="btn1"><a href="<?php echo $tv ['tv_url']; ?>"><?php echo $tv ['tv_btn']; ?></a></button>
                    </div>
                </div>
                <div class="man-icon">
                    <img src="<?php echo $tv ['right_image']; ?>">
                </div>
            </div>
        </div>
    </section>
    <!--kabel section end-->

    <section class="vanlige-section">
        <div class="container">
            <div class="main-col">
                <div class="top-head">
                    <h4><?php echo $vanlige ['sub_heading']; ?></h4>
                    <h2><?php echo $vanlige ['heading']; ?></h2>
                </div>
                <div class="ofte-col">
                    <div class="ofte-cap">
                        <div class="ofte-cap1">
                            <h3>Ofte stilt spørsmål?</h3>
                            <P><?php echo $vanlige ['contnet']; ?></P>
                        </div>
                        <div class="ofte" style="text-align: right;">
                            <a href="#"><i class="fa-solid fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ofte-cap">
                        <div class="ofte-cap2">
                            <h3>Ofte stilt spørsmål?</h3>
                        </div>
                        <div class="ofte-cap3">
                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="ofte-cap">
                        <div class="ofte-cap2">
                            <h3>Ofte stilt spørsmål?</h3>
                        </div>
                        <div class="ofte-cap3">
                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="ofte-cap">
                        <div class="ofte-cap2">
                            <h3>Ofte stilt spørsmål?</h3>
                        </div>
                        <div class="ofte-cap3">
                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="ofte-cap">
                        <div class="ofte-cap2">
                            <h3>Ofte stilt spørsmål?</h3>
                        </div>
                        <div class="ofte-cap3">
                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="ofte-cap">
                        <div class="ofte-cap2">
                            <h3>Ofte stilt spørsmål?</h3>
                        </div>
                        <div class="ofte-cap3">
                            <a href="#"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="button">
                    <button class="btn1"><a href="<?php echo $vanlige ['vanlige_url']; ?>"><?php echo $vanlige ['vanlige_btn']; ?></a></button>
                </div>
            </div>
        </div>
    </section>
    <!--vanlige section end-->
    <section class="kontakt-section">
        <div class="container">
            <div class="main-col">
                <div class="left-col">
                    <div class="left-top">
                    <h4>Contact</h4>
                    <h2>Ta gjerne kontakt med oss</h2>
                    <p class="pra-1">Phone: <a href="#">32 78 46 40</a> <br>
                        E-post alle henvendelser: <a href="#">post@mkrn.no</a> <br>
                        E-post faktura henvendelser: <a href="#">faktura@mkrn.no</a>
                    </p>
                    <p class="pra-2">
                        Adrress: <a href="#">Eikerveien 33, 3340 Åmot</a> <br>
                        ostadresse: <a href="#">Eikerveien 33, 3340 Åmot</a>
                    </p>
                    </div>
                    <div class="left-up">
                        <img src="image/Group 1153.svg"> 
                    </div>                 
                </div>
                <div class="right-col">
                    <form action="#">
                        <div class="right-cap1">
                            <h2>Contact info*</h2>
                            <input type="text" placeholder="Full name" name="full_name">
                            <input type="number" placeholder="phone" name="phone"> 
                            <input type="email" placeholder="Email" name="email"> 
                        </div>
                        <div class="right-cap2">
                            <h2>Massage info*</h2>
                            <textarea placeholder="massage"></textarea><br>   
                        </div>
                        <div class="right-cap">
                            <input type="checkbox">
                            <label>Jeg godtar at Hime AS kan kontakte meg ved utfylling og innsendelse av dette skjema.</label>
                        </div>
                    </form>
                    <div class="btn">
                        <input type="submit" value="Send" class="btn1">
                    </div>
                </div>
                <div class="div">
                    <img src="image/Group 1153.svg">
                </div>
            </div>
        </div>
    </section>
    <!--kontakt section end-->
   <?php include 'footer.php' ?>