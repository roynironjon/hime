<?php include 'admin_header.php'; 

        include 'dib_connect.php';

        $sql = "SELECT * FROM `vanlige` ";
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
                         <h2 class="bg-dark text-white">vanlige section</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="vanlige_insert_query.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">sub heading</label>
                                    <input type="text" class="form-control" name="sub_heading">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">heading</label>
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
                                    <label for="formGroupExampleInput2">vanlige btn</label>
                                    <input type="text" class="form-control" name="vanlige_btn">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">vanlige btn url</label>
                                    <input type="text" class="form-control" name="vanlige_url">
                                </div>
                            </div>
                        </div>                  
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
                        <div class="col-md-10 mt-3">
                            <h2 class="bg-dark text-white">vanlige section show :</h2>
                            <table class="table">
                                <tr>
                                    <th>id</th>
                                    <th>sub heading</th>
                                    <th>heading</th>
                                    <th>content</th>
                                    <th>vanlige btn </th>
                                    <th>vanlige btn url</th>
                                </tr>
                                    <tr>
                                        <td><?php echo $row ['id']; ?></td>                                       
                                        <td><?php echo $row ['sub_heading']; ?></td>                                       
                                        <td><?php echo $row ['heading']; ?></td>                                       
                                        <td><?php echo $row ['contnet']; ?></td>                                       
                                        <td><?php echo $row ['vanlige_btn']; ?></td>                                       
                                        <td><?php echo $row ['vanlige_url']; ?></td>                                       
                                                                              
                                    </tr>
                            </table>
                        </div>
                            <div class="col-md-10 mt-3">
                                <h2 class="bg-dark text-white">vanlige section edit</h2>
                            </div>
                            <form action="vanlige_edit.php?id=<?php echo $row ['id']; ?>" method="POST" >
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">sub heading</label>
                                            <input type="text" class="form-control" name="sub_heading" value="<?php echo $row ['sub_heading']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2"> heading</label>
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
                                            <label for="formGroupExampleInput2">tv kabel btn</label>
                                            <input type="text" class="form-control" name="vanlige_btn" value="<?php echo $row ['vanlige_btn']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">vanlige btn url</label>
                                            <input type="text" class="form-control" name="vanlige_url" value="<?php echo $row ['vanlige_url']; ?>">
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