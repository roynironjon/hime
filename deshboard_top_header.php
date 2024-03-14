<?php include 'admin_header.php'; 

    include 'dib_connect.php';

    $sql = "SELECT * FROM `top_header`";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc( $result)

?> 

<section class="dashboard ">
    <div class="row" style="margin-left: 0; margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10">
            <div class="row">
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white">top header section</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="top_header_insert_query.php" method="POST">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">left content</label>
                                    <input type="text" class="form-control" name="left_content">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">right content</label>
                                    <input type="text" class="form-control" name="right_content">
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
                            <th> left content</th>
                            <th> right content</th>
                        </tr>
                            <tr>
                                <td><?php echo $row ['id']; ?></td>
                                <td><?php echo $row ['left_content']; ?></td>
                                <td><?php echo $row ['right_content']; ?></td>
                            </tr>
                    </table>
                </div>                  
            </div> 
            <div class="row">
                <div class="col-md-10">
                    <h2 class="bg-dark text-white">Top header section edit </h2>
                    <form action="top_header_edit.php?id=<?php echo $row['id']; ?>" method="POST">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">left content</label>
                                    <input type="text" class="form-control" name="left_content" value="<?php echo $row ['left_content']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">right content</label>
                                    <input type="text" class="form-control" name="right_content" value="<?php echo $row ['right_content']; ?>">
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
