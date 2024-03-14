<?php include 'admin_header.php'; 

    
    include 'dib_connect.php';

    $sql = "SELECT * FROM `menuber`";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc( $result)


?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0; margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10">
        <div class="row">
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white"> menu section btn logo</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="menu_ber_insert.php" method="POST"  enctype="multipart/form-data">
                      <!--  <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> menu content</label>
                                    <input type="text" class="form-control" name="menu_content">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> menu url</label>
                                    <input type="text" class="form-control" name="menu_url">
                                </div>
                            </div>
                            
                        </div>--> 
                        <div class="row">
                        <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> menu btn</label>
                                    <input type="text" class="form-control" name="menu_btn">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> menu btn url</label>
                                    <input type="text" class="form-control" name="menu_btn_url">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">menu logo</label>
                                        <input type="file" class="form-control" name="menu_image">
                                    </div>
                                </div>
                            </div>
                        </div>              
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-10 mt-3">
                        <h2 class="bg-dark text-white">menu section show :</h2>
                        <table class="table">
                            <tr>
                                <th>id</th>
                                <th> menu btn</th>
                                <th> menu btn url</th>
                                <th> menu logo</th>
                            </tr>
                                <tr>
                                    <td><?php echo $row ['id']; ?></td>
                                    <td><?php echo $row ['menu_btn']; ?></td>
                                    <td><?php echo $row ['menu_btn_url']; ?></td>                               
                                    <td><img src="<?php echo $row ['menu_image']; ?>" alt=""></td>
                                </tr>
                        </table>
                    </div>                  
                </div>
               
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white"> menu section edit</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="menu_edit.php?id=<?php echo $row ['id']; ?>" method="POST"  enctype="multipart/form-data"> 
                        <div class="row">
                        <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> menu btn</label>
                                    <input type="text" class="form-control" name="menu_btn" value="<?php echo $row ['menu_btn']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> menu btn url</label>
                                    <input type="text" class="form-control" name="menu_btn_url" value="<?php echo $row ['menu_btn_url']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">menu logo</label>
                                        <input type="file" class="form-control" name="menu_image" value="<?php echo $row ['menu_image']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>              
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
                </div>
        </div>
    </div>
</section>
<?php include 'admin_footer.php'; ?>