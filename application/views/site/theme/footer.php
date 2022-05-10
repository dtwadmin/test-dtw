<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-8 text-left">
                    <span class="copyright">Copyright &copy; DtecWeb <?php echo(date('Y')); ?></span>
                </div>
                <div class="col-4">
                    <ul class="list-inline social-buttons float-right">
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/ricardo-luis-front-end/" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
                -->
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo base_url();?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/libs/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
     
    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url();?>assets/site/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/site/js/contact_me.js"></script>

    <!-- Theme scripts for this template -->
    <script src="<?php echo base_url();?>assets/site/js/theme.min.js"></script>
    
    <?php 
        if(!empty($file_js)){
		foreach ($file_js as $js)
		{
			echo '<script type="text/javascript" src="'.base_url().$js.'"></script>';
		}
	}?>
	
	<!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/site/js/custom.js"></script>
</body>

</html>