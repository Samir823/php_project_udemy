<div class="col-md-4">
<?php
    
  
    
    
    if(isset($_POST['submit'])){ 
        
       $search = $_POST['search'];

        
        $quary = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
        
        echo $query;
        $search_query = mysqli_query($connection,$query);
       
        if(!$search_query) {
            die("QUERY FAILED " . mysqli_error($connection));
        }
        
        $count = mysqli_num_rows($search_query);
        
        if($count == 0){ 
        echo "<h1>NO RESULTS</h1>";
        }else{
            
            echo "SOME RESULT";
        }
        
    
        
           }
    
    

    
    
    
    
    
?>
    
    
    
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="" method= "post">
                        <div class="input-group">
                            <input name="search" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button name="submit" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    </form><!--search for-->
                    <!-- /.input-group -->
                </div>

    
    
    
    
    
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                      <!-- Side Widget Well -->