 <div class="col-lg-3 ">
     <nav class="navbar navbar-expand-lg bg-light rounded-3 border mt-2">
         <div class="container-fluid">

             <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px">
                 <div class="offcanvas-header">
                     <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                 </div>
                 <div class="offcanvas-body">
                     <ul class="nav nav-pills flex-column justify-content-end flex-grow-1">

                         <li>

                             <a href="dashboard" class="nav-link <?php echo ((isset($_GET['x']) && $_GET['x'] == "dashboard") || !isset($_GET['x'])) ? "active link-light" : "link-dark" ?>">
                                 <i class="bi bi-speedometer2 me-2"></i>
                                 Dashboard
                             </a>


                         </li>
                         <li>
                             <a href="menu" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "menu") ? "active link-light" : "link-dark" ?>">
                                 <i class="bi bi-cart4 me-2"></i>
                                 Daftar Menu
                             </a>
                         </li>
                         <li>
                             <a href="orders" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "orders") ? "active link-light" : "link-dark" ?>">
                                 <i class="bi bi-cart4 me-2"></i>
                                 Orders
                             </a>
                         </li>
                         <li>
                             <a href="customers" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "customers") ? "active link-light" : "link-dark" ?>">
                                 <i class="bi bi-person-circle me-2"></i>
                                 Customers
                             </a>
                         </li>
                         <?php if($hasil['level']==1){?>
                         <li>
                             <a href="users" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "users") ? "active link-light" : "link-dark" ?>">
                                 <i class="bi bi-table me-2"></i>
                                 users
                             </a>
                         </li>

                         <li>
                             <a href="reports" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "reports") ? "active link-light" : "link-dark" ?>">
                                 <i class="bi bi-envelope-paper me-2"></i>
                                 Reports
                             </a>
                         </li>
                         <?php
                         }
                         ?>
                     </ul>

                 </div>
             </div>
         </div>
     </nav>
 </div>