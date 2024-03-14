
<?php 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `footer` ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc( $result);

?>


<section class="footer-section">
        <div class="container">
            <div class="main-col">
                <div class="left-col">
                    <ul>
                        <li>
                            <a href="#"><img src="<?php echo $row ['left_image']; ?>"></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo $row ['right_image']; ?>"></a>
                        </li>
                    </ul>
                </div>
                <div class="right-col">
                    
                       <a href="#"><img src="image/dwnldlogo.svg"></a>
                        <p> <?php echo $row ['right_heading_content']; ?></p>
                  
                </div>
            </div>
            <div class="upper-section">
                <div class="left-col">
                    <ul>
                        <li><a href="#"><?php echo $row ['left_contnet']; ?></a></li>
                        <li><a href="#"><?php echo $row ['left_right_content']; ?></a></li> <br>
                        <li><?php echo $row ['tv_content']; ?></li>
                        <li><?php echo $row ['laget_content']; ?></li>
                    </ul>
                </div>
                <div class="right-col">
                    <button class="btn2"><a href="<?php echo $row ['footer_btn_url']; ?>"><?php echo $row ['footer_btn']; ?></a></button>
                </div>
            </div>
        </div>
    </section>
    <!--footer section end-->
  
    
    <script>
        // script.js

        function toggleAnswer(questionNumber) {
        var answerId = "answer" + questionNumber;
        var answerElement = document.getElementById(answerId);

        if (answerElement.style.display === 'block') {
            answerElement.style.display = 'none';
        } else {
            answerElement.style.display = 'block';
        }
}
    </script>
    
     <!--jquery min js-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--jecuery cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js" integrity="sha512-FmCXNJaXWw1fc3G8zO3WdwR2N23YTWDFDTM3uretxVIbZ7lvnjHkciW4zy6JGvnrgjkcNEk8UNtdGTLs2GExAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $(function(){
            $('#menu').slicknav();
        });
    </script>  


</body>
</html>