<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger no-navbar-shrink" href="#page-top"><img class="img-fluid" src="<?php echo base_url();?>assets/site/images/logo/logo-dtw-v2.png" alt="Desenvolvimento de Tecnologio Web"></a>
        <a class="navbar-brand js-scroll-trigger show-navbar-shrink" href="#page-top"><img class="img-fluid" src="<?php echo base_url();?>assets/site/images/logo/logo-dtw-white-v2.png" alt="Desenvolvimento de Tecnologio Web"></a>
        <?php if(isset($menu) && $menu == true){ ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
        <?php } ?>
    </div>
</nav>