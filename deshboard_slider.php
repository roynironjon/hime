<?php include 'admin_header.php'; 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `slider`";
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
                         <h2 class="bg-dark text-white">slider section</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="slider_insert_query.php" method="POST" enctype="multipart/form-data">
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
                                    <label for="formGroupExampleInput2">content</label>
                                    <input type="text" class="form-control" name="content">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Bestill btn</label>
                                    <input type="text" class="form-control" name="bestill_btn">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Bestill url</label>
                                    <input type="text" class="form-control" name="bestill_url">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">tjenester btn</label>
                                    <input type="text" class="form-control" name="tjenester_btn">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">tjenester url</label>
                                    <input type="text" class="form-control" name="tjenester_url">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">right column photo</label>
                                    <input type="file" class="form-control" name="slider_image">
                                </div>
                            </div>
                            <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">right column logo photo</label>
                                        <input type="file" class="form-control" name="slider_logo_image">
                                    </div>
                                </div>
                        </div>                   
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
                </div>
                    <div class="row">
                        <div class="col-md-10 mt-3">
                            <h2 class="bg-dark text-white">slider section</h2>
                        </div>                              
                        <form action="slider_edit.php?id=<?php echo $row ['id']; ?>" method="POST" enctype="multipart/form-data">
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
                                        <label for="formGroupExampleInput2">content</label>
                                        <input type="text" class="form-control" name="content" value="<?php echo $row ['content']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Bestill btn</label>
                                        <input type="text" class="form-control" name="bestill_btn" value="<?php echo $row ['bestill_btn']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Bestill url</label>
                                        <input type="text" class="form-control" name="bestill_url" value="<?php echo $row ['bestill_url']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">tjenester btn</label>
                                        <input type="text" class="form-control" name="tjenester_btn" value="<?php echo $row ['tjenester_btn']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">tjenester url</label>
                                        <input type="text" class="form-control" name="tjenester_url" value="<?php echo $row ['tjenester_url']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">right column photo</label>
                                        <input type="file" class="form-control" name="slider_image" valu="<?php echo $row ['slider_image']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">right column logo photo</label>
                                        <input type="file" class="form-control" name="slider_logo_image" valu="">
                                    </div>
                                </div>
                            </div>                   
                            <input type="submit" value="submit" class="btn btn-success my-2">
                        </form>
                    </div>               
                <div class="row">
                    <div class="col-md-10 mt-3">
                        <h2 class="bg-dark text-white">Top header section show :</h2>
                        <table class="table">
                            <tr>
                                <th>id</th>
                                <th>sub heading</th>
                                <th>heading</th>
                                <th>content</th>
                                <th>Bestill btn</th>
                                <th>Bestill url</th>
                                <th>tjenester btn</th>
                                <th>tjenester url</th>
                                <th>right column image</th>
                                <th>right column logo image</th>
                            </tr>
                                <tr>
                                    <td><?php echo $row ['id']; ?></td>
                                    <td><?php echo $row ['sub_heading']; ?></td>
                                    <td><?php echo $row ['heading']; ?></td>
                                    <td><?php echo $row ['content']; ?></td>
                                    <td><?php echo $row ['bestill_btn']; ?></td>
                                    <td><?php echo $row ['bestill_url']; ?></td>
                                    <td><?php echo $row ['tjenester_btn']; ?></td>
                                    <td><?php echo $row ['tjenester_url']; ?></td>
                                    <td><!--<img src="">--><?php echo $row ['slider_image']; ?></td>
                                    <td><?php echo $row ['slider_logo_image']; ?></td>
                                </tr>
                        </table>
                    </div>
                </div>                  
            </div> 
        </div>
    </div>
</section>
<?php include 'admin_footer.php'; ?>