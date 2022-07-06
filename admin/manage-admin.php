<?php  include('partials/menu.php'); ?>
    <!-- main content section starts  -->
    <div class ="main-content">
        <div class="wrapper">
        <h1>Manage Admin</h1>
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
        
        <a href="add admin.php" class="btn-primary">Add Admin</a>
        <br/> <br/>
        
        
            <table class="tbl-full">
                <tr>
                    <th>S.No.</th>
                    <th>full name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                <?php 
                     $sql = "SELECT * FROM admin ";
                     $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                     if($res==TRUE){
                        $count = mysqli_num_rows($res);
                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $Id =$rows['Id'];
                                $full_name = $rows['full_name'];
                                $user_name =$rows['user_name'];
                                ?>
                                  <tr>
                                 <td><?php echo $Id; ?></td>
                                 <td><?php echo $full_name; ?> </td>
                                 <td><?php echo $user_name; ?> </td>
                                 <td>
                                     <br>
                                 <a href="a" class="btn-secondary1">Update Admin </a> 
                                 <a href="a" class="btn-secondary2">Delete Admin </a> 
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


<?php  include('partials/footer.php') ?>
