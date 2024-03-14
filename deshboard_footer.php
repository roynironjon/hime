<?php include 'admin_header.php'; 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `footer` ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc( $result);

?> 

<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10">
            <div class="row">
            <div class="row">
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white">footer section</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="footer_insert_query.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">right content</label>
                                    <input type="text" class="form-control" name="right_heading_content">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">footer btn</label>
                                    <input type="text" class="form-control" name="footer_btn">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">footer btn  url</label>
                                    <input type="text" class="form-control" name="footer_btn_url">
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column left content</label>
                                    <input type="text" class="form-control" name="left_contnet">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">left column right content</label>
                                    <input type="text" class="form-control" name="left_right_content">
                                </div>
                            </div>
                        </div>
                        <div class="row">                            
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column tv content</label>
                                    <input type="text" class="form-control" name="tv_content">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column laget content</label>
                                    <input type="text" class="form-control" name="laget_content">
                                </div>
                            </div>
                        </div>                       
                        <div class="row">                            
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column left image</label>
                                    <input type="file" class="form-control" name="left_image">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column right image</label>
                                    <input type="file" class="form-control" name="right_image">
                                </div>
                            </div>
                        </div>   
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
                        <div class="col-md-10 mt-3">
                            <h2 class="bg-dark text-white">footer section show :</h2>
                            <table class="table">
                                <tr>
                                    <th>id</th>
                                    <th>right column right content</th>
                                    <th>footer btn</th>
                                    <th>footer btn  url</th>
                                    <th>left column left content</th>
                                    <th>left column right content </th>
                                    <th>left column tv content</th>
                                    <th>left column laget content</th>
                                    <th>left column left image</th>
                                    <th>left column right imaget</th>
                                </tr>
                                    <tr>
                                        <td><?php echo $row ['id']; ?></td>                                         
                                        <td><?php echo $row ['right_heading_content']; ?></td>                                         
                                        <td><?php echo $row ['footer_btn']; ?></td>                                         
                                        <td><?php echo $row ['footer_btn_url']; ?></td>                                         
                                        <td><?php echo $row ['left_contnet']; ?></td>                                         
                                        <td><?php echo $row ['left_right_content']; ?></td>                                         
                                        <td><?php echo $row ['tv_content']; ?></td>                                         
                                        <td><?php echo $row ['laget_content']; ?></td>                                         
                                        <td><img src="<?php echo $row ['left_image']; ?>" alt=""></td>                                         
                                        <td><img src="<?php echo $row ['right_image']; ?>" alt=""></td>                                         
                                    </tr>
                            </table>
                        </div>
                            <div class="col-md-10 mt-3">
                                <h2 class="bg-dark text-white">footer section edit</h2>
                            </div>
                            <form action="footer_edit.php?id=<?php echo $row ['id']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">right content</label>
                                    <input type="text" class="form-control" name="right_heading_content" value="<?php echo $row ['right_heading_content']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">footer btn</label>
                                    <input type="text" class="form-control" name="footer_btn" value="<?php echo $row ['footer_btn']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">footer btn  url</label>
                                    <input type="text" class="form-control" name="footer_btn_url" value="<?php echo $row ['footer_btn_url']; ?>">
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column left content</label>
                                    <input type="text" class="form-control" name="left_contnet" value="<?php echo $row ['left_contnet']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">left column right content</label>
                                    <input type="text" class="form-control" name="left_right_content" value="<?php echo $row ['left_right_content']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">                            
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column tv content</label>
                                    <input type="text" class="form-control" name="tv_content" value="<?php echo $row ['tv_content']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column laget content</label>
                                    <input type="text" class="form-control" name="laget_content" value="<?php echo $row ['laget_content']; ?>">
                                </div>
                            </div>
                        </div>                       
                        <div class="row">                            
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column left image</label>
                                    <input type="file" class="form-control" name="left_image" value="<?php echo $row ['left_image']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column right image</label>
                                    <input type="file" class="form-control" name="right_image" value="<?php echo $row ['right_image']; ?>">
                                </div>
                            </div>
                        </div>   
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'admin_footer.php'; ?>
