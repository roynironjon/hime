<?php include 'admin_header.php'; 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `kabel` ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc( $result);

?> 


<section class="dashboard">
    <div class="row" style="margin-left: 0;margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10">
            <div class="row">
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white">kabel section</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="kabel_insert_query.php" method="POST" enctype="multipart/form-data">
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
                                    <label for="formGroupExampleInput2">left content_headint</label>
                                    <input type="text" class="form-control" name="left_cotent_heading">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">left content</label>
                                    <input type="text" class="form-control" name="left_content">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">right column image</label>
                                    <input type="file" class="form-control" name="right_column_image">
                                </div>
                            </div>
                        </div>              
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>                   
                        <div class="col-md-10 mt-3">
                            <h2 class="bg-dark text-white">kabel section show :</h2>
                            <table class="table">
                                <tr>
                                    <th>id</th>
                                    <th>sub heading</th>
                                    <th>heading</th>
                                    <th>content</th>
                                    <th>left conteint heading</th>
                                    <th>left content</th>
                                    <th>right column photo </th>
                                </tr>
                                <tr>
                                    <td><?php echo $row ['id']; ?></td>
                                    <td><?php echo $row ['sub_heading']; ?></td>
                                    <td><?php echo $row ['heading']; ?></td>
                                    <td><?php echo $row ['contnet']; ?></td>
                                    <td><?php echo $row ['left_cotent_heading']; ?></td>
                                    <td><?php echo $row ['left_content']; ?></td>
                                    <td><!--<img src="#">--><?php echo $row ['right_column_image']; ?></td>                                                              
                                </tr>
                            </table>
                        </div>                   
                </div>
            </div>
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white">kabel section edit</h2>
                    </div>
                </div>
                    <form action="kabel_edit.php?id=<?php echo $row ['id']; ?>" method="POST" enctype="multipart/form-data">
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
                                    <label for="formGroupExampleInput2">left content_headint</label>
                                    <input type="text" class="form-control" name="left_cotent_heading" value="<?php echo $row ['left_cotent_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">left content</label>
                                    <input type="text" class="form-control" name="left_content" value="<?php echo $row ['left_content']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">right column image</label>
                                    <input type="file" class="form-control" name="right_column_image" value="<?php echo $row ['right_column_image']; ?>">
                                </div>
                            </div>
                        </div>              
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
        </div>
    </div>
</section>
<?php include 'admin_footer.php'; ?>
