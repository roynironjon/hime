<?php include 'admin_header.php'; 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `internett` ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc( $result);
?> 

<section class="dashboard">
    <div class="row" style="margin-left: 0; margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10">
            <div class="row">
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white">internett section</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="internett_insert_query.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">sub heading</label>
                                    <input type="text" class="form-control" name="sub_heading">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">heading</label>
                                    <input type="text" class="form-control" name="heading">
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">left content_headint</label>
                                    <input type="text" class="form-control" name="left_cotent_heading">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">right content heading</label>
                                    <input type="text" class="form-control" name="right_content_heading">
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
                                    <label for="formGroupExampleInput2">internett btn</label>
                                    <input type="text" class="form-control" name="internett_btn">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">internett url</label>
                                    <input type="text" class="form-control" name="internett_url">
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
                </div>
                
                <div class="row">
                    <div class="col-md-10 mt-3">
                        <h2 class="bg-dark text-white">Top header section show :</h2>
                        <div class="row">
                            <table class="table">
                                <tr>
                                    <th>id</th>
                                    <th>sub heading</th>
                                    <th>heading</th>
                                    <th>left content heading</th>
                                    <th>right conteint heading</th>
                                    <th>content</th>
                                    <th>internett btn </th>
                                    <th>internett url</th>
                                    <th> left column image</th>
                                    <th> right column image</th>
                                </tr>
                                    <tr>
                                    <td><?php echo $row ['id']; ?></td>
                                    <td><?php echo $row ['sub_heading']; ?></td>
                                    <td><?php echo $row ['heading']; ?></td>
                                    <td><?php echo $row ['left_cotent_heading']; ?></td>
                                    <td><?php echo $row ['right_content_heading']; ?></td>
                                    <td><?php echo $row ['contnet']; ?></td>
                                    <td><?php echo $row ['internett_btn']; ?></td>
                                    <td><?php echo $row ['internett_url']; ?></td>
                                    <td><img src="<?php echo $row ['left_image']; ?>"></td>
                                    <td><img src="<?php echo $row ['right_image']; ?>"></td>
                                    
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="row">
                        <div class="col-md-10 mt-3">
                            <h2 class="bg-dark text-white">internett section edit</h2>
                        </div>
                    </div>
                <div class="row">
                    <form action="internett_edit.php?id=<?php echo $row ['id']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">sub heading</label>
                                    <input type="text" class="form-control" name="sub_heading" value="<?php echo $row ['sub_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">heading</label>
                                    <input type="text" class="form-control" name="heading" value="<?php echo $row ['heading']; ?>">
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">left content_headint</label>
                                    <input type="text" class="form-control" name="left_cotent_heading" value="<?php echo $row ['left_cotent_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">right content heading</label>
                                    <input type="text" class="form-control" name="right_content_heading" value="<?php echo $row ['right_content_heading']; ?>">
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
                                    <label for="formGroupExampleInput2">internett btn</label>
                                    <input type="text" class="form-control" name="internett_btn" value="<?php echo $row ['internett_btn']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">internett url</label>
                                    <input type="text" class="form-control" name="internett_url" value="<?php echo $row ['internett_url']; ?>">
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
    </div>
</section>
<?php include 'admin_footer.php'; ?>
