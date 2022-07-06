<?php  include('partials/menu.php');
       
?>


    <!-- main content section starts  -->
    <div class ="main-content">
        <div class="wrapper">
        <h1>DASHBOARD</h1>

        <?php
            if(isset($_SESSION['login'])){
                echo $_SESSIO['login'];
                unset($SESSION['login']);
    }
    ?>
    <br><br>

            <div class="col-4">
                <h1>5</h1>
                <br/>
                categories
                
            </div>
            <div class="col-4">
                <h1>5</h1>
                <br/>
                categories
                
            </div>
            <div class="col-4">
                <h1>5</h1>
                <br/>
                categories
                
            </div>
            <div class="col-4">
                <h1>5</h1>
                <br/>
                categories
            
            </div>
            <div class="clear-fix"></div>
        </div> 
    </div>
    <!-- main content section ends  -->
   
 <?php  include('partials/footer.php');?>
