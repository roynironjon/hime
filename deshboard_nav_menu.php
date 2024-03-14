<?php include 'admin_header.php'; 
    include "dib_connect.php";

?> 
<section class="dashboard">
    <div class="row" style="margin-left: 0; margin-right: 0;">
       <?php include 'deshbord.php'; ?>
        <div class="col-md-10">
        <div class="row">
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white">nav menu section </h2>
                    </div>
                </div>
                <div class="row">
                    <form action="nav_menu_insert.php" method="POST">
                        <div class="row">
                        <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">nav menu content</label>
                                    <input type="text" class="form-control" name="nav_menu_content">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">nav menu url</label>
                                    <input type="text" class="form-control" name="nav_menu_url">
                                </div>
                            </div>
                        </div>              
                        <input type="submit" value="submit" class="btn btn-success my-2">
                    </form>
                </div>
                
                <div class="row">
                    <div class="col-md-10 mt-3">
                         <h2 class="bg-dark text-white">nav menu section edit</h2>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        $menu_sql = "SELECT * FROM `nav_menu`";
                        $menu_result = mysqli_query($conn, $menu_sql);
                    ?>                 
                        <?php while($menu_row = mysqli_fetch_assoc($menu_result)) {?> 
                            
                            <form action="nav_menu_insert_query.php?id=<?php echo $menu_row["id"]; ?>" method="POST" > 
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput"> menu btn</label>
                                        <input type="text" class="form-control" name="nav_menu_content" value="<?php echo $menu_row["nav_menu_content"]?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput"> menu btn url</label>
                                        <input type="text" class="form-control" name="nav_menu_url" value="<?php echo $menu_row["nav_menu_url"]?>">
                                    </div>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <input type="submit" value="submit" class="btn btn-success my-2">
                                    <a  class="btn btn-danger " href="nav_menu_delete_query.php?id=<?php echo $menu_row["id"]; ?>" onclick="return confirm('Are yoou sure ?')">Delete</a>
                                </div>
                                </div>  
                            </form>
                        <?php }?>
                    
                </div>
        </div>
    </div>
</section>
<?php include 'admin_footer.php'; ?>