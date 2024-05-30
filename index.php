<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<?php 
    include 'views/template/header.php';
?>

    <body class="hold-transition sidebar-mini layout-footer-fixed">
        <div class="wrapper">
            <?php 
                include 'views/template/navbar.php';
            ?>
            <?php 
                include 'views/template/menu.php';
            ?>
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                    <?php  $page = isset($_GET['page']) ? $_GET['page'] : 'index'; ?>
                    <?php      
                       
                        if($page == "index"){
                            include "views/dashboard/index.php";
                        }
                        elseif($page == "calendar"){
                            include "views/calendar/index.php";
                        }
                        elseif($page == "chart"){
                            include "views/chart/index.php";
                        }
                        elseif($page == "form"){
                            include "views/form/index.php";
                        }
                        elseif($page == "invoice"){
                            include "views/invoice/index.php";
                        }
                        elseif($page == "profil"){
                            include "views/profil/index.php";
                        }
                        elseif($page == "sweetalert"){
                            include "views/sweetalert/index.php";
                        }
                        elseif($page == "datatables"){
                            include "views/datatables/index.php";
                        }
                        else {
                            include "views/404.php";
                        }
                        
                    ?>
                    </div>
                </div> 
            </div>
            <?php 
                include 'views/template/footer.php';
            ?>
        </div>
    </body>
</html>
