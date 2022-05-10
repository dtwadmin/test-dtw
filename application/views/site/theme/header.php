<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111192846-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-111192846-1');
	</script>
    <!-- End Google Analytics -->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/site/images/logo/favicon.png" sizes="16x16 32x32 48x48" type="image/x-icon">
    
    <?php $page_title = "Ricardo Luis - Desenvolvedor Web"?>
	<meta name="robots" content="index, follow">
	<meta name="author" content="<?php echo base_url();?>">
	<meta name="reply-to" content="ricardoluis.contato@gmail.com">
	<meta name="description" content="Desenvolvimento Front-End de Sistemas Web, Websites e Customização CMS Wordpress.">
	<meta name="keywords" content="links patrocinados,criação de sites,desenvolvimento, sistema web, midias sociais,e-mail marketing,identidade visual,google adwords,brasilia,distrito federal,df">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:site_name" content="Dtecweb - Desenvolvimento de Tecnologia Web">
    <meta property="og:title" content="<?php if(isset($page_title) && !empty($page_title)){echo $page_title;}?>">
    <meta property="og:description" content="Desenvolvimento Front-End de Sistemas Web, Websites e Customização CMS Wordpress.">
    <meta property="og:url" content="<?php echo base_url();?>">
    <meta property="og:image" content="<?php echo base_url();?>assets/site/images/logo/logo-dtw-share.jpg">
    <meta property="og:type" content="website">

    <title><?php if(isset($page_title) && !empty($page_title)){echo $page_title;}?></title>   

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/libs/bootstrap/css/bootstrap.min.css");?>">
    <!-- FancyBox -->
    <link rel="stylesheet" href="<?php echo base_url("assets/plugins/fancybox-master/jquery.fancybox.min.css");?>">
    <!-- owl.carousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugins/OwlCarousel2-2.3.4/owl.carousel.min.css"); ?>">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugins/OwlCarousel2-2.3.4/owl.theme.default.min.css"); ?>">-->

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url("assets/libs/font-awesome/css/font-awesome.min.css");?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme styles for this template -->
    <link href="<?php echo base_url("assets/site/css/theme.min.css");?>" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <?php 
        if(!empty($file_css)){
			foreach ($file_css as $css)
			{
				echo '<link href="'.base_url().$css.'" rel="stylesheet">';
			}
		}
	?>
	
	<!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/site/css/custom.css");?>" rel="stylesheet">
	
</head>

<body id="page-top"> 
	<!-- SEO TAG -->
	<script type="application/ld+json">
	{
		"@context":"http://schema.org",
		"@type":"Organization",
		"name":"dtecweb.com.br",
		"url": "<?php echo(base_url()); ?>",
		"sameAs":[
			"https://www.facebook.com/ricardoluis.bs",
			"https://www.instagram.com/ricardoluis.bs/",
			"https://twitter.com/RicardoLuis31",
			"https://www.linkedin.com/in/ricardo-luis-front-end/"
		]
	}
	</script>
	<!-- END SEO TAG --> 
	
    <div id="to-top" class="to-top">
        <i class="fa fa-chevron-up"></i>
    </div>