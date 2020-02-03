<div class="left-sidebar-pro">
    <nav id="sidebar" class="sidebar-nav left-sidebar-menu-pro">
        <div class="sidebar-header">
            <a href=""><img class="main-logo" src="<?php echo base_url();?>assets/img/logo/logo.png" alt="" /></a>
            <strong><a href=""><img src="<?php echo base_url();?>assets/img/logo/icone-img.png" alt="" /></a></strong>
        </div>        
        <nav class="sidebar-nav left-sidebar-menu-pro"  style="overflow: auto; height: calc(100vh - 100px);">
            <ul class="metismenu" id="menu1">            
                <a class="" href="<?php echo base_url()."home/" ?>" aria-expanded="false">
                    <span class="educate-icon educate-course icon-wrap">                    
                    </span>Bem Vindo                
                </a> 
                <?php for ($i = 1; $i <= $quantUnidades; $i++) {?>
                <li data-unidade="<?php echo $i; ?>">                    
                    <a class="has-arrow" href="all-courses.html" data-unidade="<?php echo $i; ?>" aria-expanded="false">
                        <span class="educate-icon educate-course icon-wrap">                                
                        </span><?php echo "unidade 0$i"; ?>
                        <span class="mini-click-non"></span>
                    </a>                                    
                    <ul class="submenu-angle" aria-expanded="false">                     
                        <li>
                            <a title="All Courses" data-item="1" href="<?php  echo base_url()."conteudo/vocabulary/".$i?>">
                                <span class="mini-sub-pro">vocabulary</span>
                            </a>
                        </li>
                        <li>
                            <a title="All Courses" data-item="2" href="<?php  echo base_url()."conteudo/grammar/".$i?>">
                                <span class="mini-sub-pro">grammar</span>
                            </a>
                        </li>
                        <li>
                            <a title="All Courses" data-item="3" href="<?php  echo base_url()."conteudo/listening/".$i?>">
                                <span class="mini-sub-pro">listening</span>
                            </a>
                        </li>
                        <li>
                            <a title="All Courses" data-item="4" href="<?php  echo base_url()."conteudo/understanding/".$i?>">
                                <span class="mini-sub-pro">understanding</span>
                            </a>
                        </li>                 
                    </ul>
                </li>
                <?php }?>                       
            </ul>
        </nav>        
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
                                        <button type="button" id="" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                        </button>                                        
                                    </div>                                    
                                </div>
                                <!-- <button style="margin-left:900px;" type="button" id="" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn"> -->
                                    <a class="btn header-drl-controller-btn navbar-btn menu-switcher-pro btnVoltar">Versão Anterior</a>
                                <!-- </button> -->
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
                        <a class="btn header-drl-controller-btn navbar-btn btnVoltar">Versão Anterior</a>                                                
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
                                    <?php for ($i = 1; $i <= $quantUnidades; $i++) {?>
                                    <li data-unidade="<?php echo $i; ?>">                    
                                        <a class="has-arrow" href="all-courses.html" data-unidade="<?php echo $i; ?>" aria-expanded="false">
                                            <span class="educate-icon educate-course icon-wrap">                                
                                            </span><?php echo "unidade $i"; ?>
                                            <span class="mini-click-non"></span>
                                        </a>                                    
                                        <ul class="submenu-angle" aria-expanded="false">                     
                                            <li>
                                                <a title="All Courses" data-item="1" href="<?php  echo base_url()."conteudo/vocabulary/".$i?>">
                                                    <span class="mini-sub-pro">vocabulary</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="All Courses" data-item="2" href="<?php  echo base_url()."conteudo/grammar/".$i?>">
                                                    <span class="mini-sub-pro">grammar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="All Courses" data-item="3" href="<?php  echo base_url()."conteudo/listening/".$i?>">
                                                    <span class="mini-sub-pro">listening</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="All Courses" data-item="4" href="<?php  echo base_url()."conteudo/understanding/".$i?>">
                                                    <span class="mini-sub-pro">understanding</span>
                                                </a>
                                            </li>                 
                                        </ul>
                                    </li>
                                    <?php }?>                                                                       
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">User <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Sair</a>
                                            </li>                                            
                                            <!-- <li><a href="register.html">Registrar</a>
                                            </li>                                                
                                            <li><a href="password-recovery.html">Recuperar Login</a>
                                            </li>                                                 -->
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

            