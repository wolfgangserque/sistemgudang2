<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistem Gudang </div>
    </a>



    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-1 d-none d-lg-inline text-gray-white small"><?php echo $_SESSION['nama'].' | '.$_SESSION['level'];?></span> 
        </a>
    </li>

    <?php if ($_SESSION['level']=='superadmin'){
        include('menu/superadmin.php');
      } else {
        include('menu/operator.php');}
    ?>


</ul>