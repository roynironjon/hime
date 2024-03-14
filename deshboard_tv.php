<?php include 'admin_header.php'; 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `kabel_tv` ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc( $result);


?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0; margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10">
            <div class="row">
            <div class="row">
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white">tv section</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="tv_insert_query.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">content heading</label>
                                    <input type="text" class="form-control" name="content_heading">
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">content</label>
                                    <input type="text" class="form-control" name="contnet">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">tv kabel btn</label>
                                    <input type="text" class="form-control" name="tv_btn">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">tv kable url</label>
                                    <input type="text" class="form-control" name="tv_url">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">left column photo</label>
                                    <input type="file" class="form-control" name="left_image">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">right column photo</label>
                                    <input type="file" class="form-control" name="right_image">
                                </div>
                            </div>
                        </div>                   
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
                        <div class="col-md-10 mt-3">
                            <h2 class="bg-dark text-white">tv section show :</h2>
                            <table class="table">
                                <tr>
                                    <th>id</th>
                                    <th>content heading</th>
                                    <th>content</th>
                                    <th>tv btn </th>
                                    <th>tv url</th>
                                    <th> left column image</th>
                                    <th> right column image</th>
                                </tr>
                                    <tr>
                                        <td><?php echo $row ['id']; ?></td>
                                        <td><?php echo $row ['content_heading']; ?></td>
                                        <td><?php echo $row ['contnet']; ?></td>
                                        <td><?php echo $row ['tv_btn']; ?></td>
                                        <td><?php echo $row ['tv_url']; ?></td>
                                        <td> <!--<img src="">--> <?php echo $row ['left_image']; ?></td>
                                        <td><img src="<?php echo $row ['right_image']; ?>"></td>
                                        
                                    </tr>
                            </table>
                        </div>                   
                        <div class="row">
                                <div class="col-md-10 mt-3">
                                    <h2 class="bg-dark text-white">tv section edit</h2>
                                </div>
                        </div>                       
                          <form action="tv_edit.php?id=<?php echo $row ['id']; ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">content heading</label>
                                            <input type="text" class="form-control" name="content_heading" value="<?php echo $row ['content_heading']; ?>">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">content</label>
                                            <input type="text" class="form-control" name="contnet" value="<?php echo $row ['contnet']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">tv kabel btn</label>
                                            <input type="text" class="form-control" name="tv_btn" value="<?php echo $row ['tv_btn']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">tv kable url</label>
                                            <input type="text" class="form-control" name="tv_url" value="<?php echo $row ['tv_url']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">left column photo</label>
                                            <input type="file" class="form-control" name="left_image" value="<?php echo $row ['left_image']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">right column photo</label>
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