
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href=""><img class="main-logo" src="<?php echo base_url();?>assets/img/logo/logo.png" alt="" /></a>
                <strong><a href=""><img src="<?php echo base_url();?>assets/img/logo/icone-img.png" alt="" /></a></strong>
            </div>
            <div >
            <nav class="sidebar-nav left-sidebar-menu-pro scrolPerson">
                    <ul class="metismenu" id="menu1">
                    <?php for ($i = 1; $i <= $quantUnidades; $i++) {?>
                                                    
                                    

                                    <!-- unidade abaixo -->

                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false">
                                    <span class="educate-icon educate-course icon-wrap">
                                       
                                    </span><?php echo "unidade$i"; ?>                                  

                                    <span class="mini-click-non"></span>
                                </a>                                    
                                <ul class="submenu-angle" aria-expanded="false">
                                
                                    <!-- //  if (isset($menu->children)) { -->
                                        <?php for ($ii = 1; $ii <= $quantMenus; $ii++) { ?>
                                        <li>
                                            <a title="All Courses" href="">
                                                <span class="mini-sub-pro"><?php $indices -> $ii ?></span>
                                            </a>
                                        </li>
                                     <?php  
                                         }
                                     ?>
                                    
                                </ul>
                            </li>
                                        <?php }
                                        ?>
                                
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <div style="height: 70px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                    <?php
                                     if (isset($menu->children)) {
                                     foreach ($menu->children as $child) { ?>
                                        <li>
                                            <a title="All Courses" href="<?= base_url().$child->rota; ?>">
                                                <span class="mini-sub-pro"><?= $child->indice ?></span>
                                            </a>
                                        </li>
                                     <?php  }
                                         }
                                     ?>
                                        
                                        
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">User <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Registrar</a>
                                                </li>                                                
                                                <li><a href="password-recovery.html">Recuperar Login</a>
                                                </li>                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->