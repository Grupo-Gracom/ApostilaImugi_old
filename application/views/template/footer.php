<div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p> &copy; 2019 Imugi Tecnologia e Educação. todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- jquery
		============================================ -->
    
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/datepicker/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/form-validation/jquery.form.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/form-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/form-validation/form-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <!-- <script src="<?php echo base_url();?>assets/js/tawk-chat.js"></script> -->

    <script>
        var unidade = $(".blog-details-inner h3").attr("data-unidade");
        var item = $(".blog-details-inner h3").attr("data-item");
        
        $('.sidebar-nav li a[data-unidade="'+unidade+'"]').attr("aria-expanded",true);
        $('.sidebar-nav li a[data-unidade="'+unidade+'"] + ul').attr("aria-expanded",true).addClass("show");
        $('.sidebar-nav li[data-unidade="'+unidade+'"] > a').addClass("active");

        $('.sidebar-nav li a[data-unidade="'+unidade+'"].active + ul li a[data-item="'+item+'"]').css({"color":"white", "background":"#7dc242"})

        $('.sidebar-nav li').click(function(){
          $('.sidebar-nav li > a').removeClass("active");
          $(this).addClass("active");
        })

    </script>
</body>

</html>