<?php include "includes/admin_header.php" ?>
        <!-- Navigation -->
        


        <div id="page-wrapper">
<?php include "includes/admin_navigation.php" ?>






            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>
                        
                        <div class = "col-xs-6">
                            
                            
                            
                            <?php  insert_categories() 
                            
                            ?>
                            
                
                                 <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                
                                </div>
                
                            </form>
                            
                           
                            <?php //UPDATE AND INCLUDE QUERY
                            
                            if(isset($_GET['edit'])){
                                
                                $cat_id = $_GET['edit'];
                                
                                include "includes/update_categories.php";
                                
                            }
                            
                            
                            ?>
                            
                            
                            
                            
                            
                        
                        </div>
                        
                        <div class="col-xs-6">
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                    <?php //FIND ALL CATEGORIES QUERY
                                    
                    $query = "SELECT * FROM categories";
                    $select_all_categories = mysqli_query($connection, $query);
                                    
                                    
                    while($row = mysqli_fetch_assoc($select_all_categories)){
                        $cat_id =$row['cat_id'];
                        $cat_title =$row['cat_title'];
                    echo "<tr>";
                    echo "<td>{$cat_id}</td>";
                    echo "<td>{$cat_title}</td>";
                    echo "<td><a href = 'categories.php?delete={$cat_id}'>DELETE</a></td>";
                    echo "<td><a href = 'categories.php?edit={$cat_id}'>EDIT</a></td>";


                    echo "<tr>";

                    }

                    ?>
                    
                    <?php //DELETE QUERY
                                    
                    if(isset($_GET['delete'])){
                        $the_cat_id = $_GET['delete'];
                        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                        $delete_query = mysqli_query($connection,$query);
                        header("Location:categories.php");
                        
                    }                
                                    
                                    
                                    
                    ?>           
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        
      
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>


