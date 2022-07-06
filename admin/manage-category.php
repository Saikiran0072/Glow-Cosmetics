<?php 
include('partials/menu.php');?>

<div class ="main-content">
        <div class="wrapper">
        <h1>Manage Category</h1>
        <br/>
        <?php
        session_start();
        define('SITEURL','http://localhost/cosmetic%20website/');
        define('LOCALHOST', 'localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'cosmetic-website');
        
        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
        $db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error());


        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        ?>
           <a href="add category.php" class="btn-primary">Add Category</a>
        <br/> <br/>

        <table class="tbl-full">
                <tr>
                    <th>S.No.</th>
                    <th>title</th>
                    <th>featured</th>
                    
                </tr>

                <?php 
                     $sql = "SELECT * FROM category ";
                     $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                     if($res==TRUE){
                        $count = mysqli_num_rows($res);
                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $category_num =$rows['category_num'];
                                $title = $rows['title'];
                                $featured =$rows['featured'];
                                ?>
                                  <tr>
                                 <td><?php echo $category_num; ?></td>
                                 <td><?php echo $title; ?> </td>
                                 <td><?php echo $featured; ?> </td>
                                 <td>
                                     <br>
                               
                                 <br>   
                                 </td>
                                 </tr>
                                <?php

                            }
                        }
                        else{

                        }

                     }
            
                
                ?>

                <br/>
        
                
            </table>
        </div> 
    </div>
    <!-- main content section ends  -->


<?php
include('partials/footer.php');
?>


