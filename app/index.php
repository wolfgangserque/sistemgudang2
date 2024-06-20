<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">


<?php session_start(); 
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
} ?>

<?php include('../config/config.php');?>
<?php include('header.php');?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php include('sidebar.php');?>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            <?php include('navbar.php'); ?>
            <!-- End of Topbar -->


            <!-- /.container-fluid -->

            <?php 

            if (isset($_GET['page'])){
                if ($_GET['page']=='dashboard'){
                include('dashboard.php');
                }
            
                else if ($_GET['page']=='data-stok-aktif'){
                include('data-stok-aktif.php');
                }
            
                else if ($_GET['page']=='data-stok-gudang'){
                include('data-stok-gudang.php');
                }
            
            
                
                else if ($_GET['page']=='edit-data'){
                include('edit/edit1.php');
                }
            
            
                else if ($_GET['page']=='edit-data-2'){
                    include('edit/edit2.php');
                    }
            
                // admin 
            
                else if ($_GET['page']=='data_gudang_a_admin'){
                include('admin/data_gudang_a.php');
                }
            
                else if ($_GET['page']=='data_gudang_b_admin'){
                    include('admin/data_gudang_b.php');
                    }
            
            
                    else if ($_GET['page']=='data_gudang_c_admin'){
                    include('admin/data_gudang_c.php');
                    }
            
            
            
                else{
                include('error404.php');
                }
            }
            else{
                include('dashboard.php');
            }
            ?>




<!-- 
            // if (isset($_GET['page'])){
            //     if ($_GET['page']=='dashboard'){
            //         include('dashboard.php');
            //         }

            //     else if ($_GET['page']=='data-stok-aktif'){
            //         include('data-stok-aktif.php');
            //         }

            //     else if ($_GET['page']=='data-stok-gudang'){
            //         include('data-stok-gudang.php');
            //         }
            // }
            //     else{
            //     include('error404.php');
            //     }
                

            // ?> -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include('scroll.php');?>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
    <?php include('footer.php');?>
</body>



</html>