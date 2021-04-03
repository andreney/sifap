<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?>
<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="<?php echo base_url('assets/images/ico_erro.png'); ?>">
		<title>404 Página Não Encontrada</title>

		<!-- Folhas de Estilo - CSS -->
		<!--
		* Bootstrap v4.3.1 (https://getbootstrap.com/)
		* Copyright 2011-2019 The Bootstrap Authors
		* Copyright 2011-2019 Twitter, Inc.
		* Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
		 -->
		<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
	  
			/* Custom page CSS
			-------------------------------------------------- */
			/* Not required for template or sticky footer method. */

			.container {
				width: auto;
				max-width: 680px;
				padding: 0 15px;
			}

			.footer {
				background-color: #f5f5f5;
			}
			
			*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			}
			body, html{
			width: 100%;
			height: 100%;
			/*font-family: sans-serif;
			font-size:22px;
			line-height: 1.3;*/
			}
			.bg_video{
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
			width: auto;
			height: auto;
			z-index: -1000;
			background: url(images/torre.jpg) no-repeat;
			background-size: cover;
			}
		</style>
	</head>
  <body class="d-flex flex-column h-100">
	<video autoplay muted loop class="bg_video" id="myVideo">
		<source src="<?php echo base_url('assets/video/background_engrenagem.webm')?>" type="video/webm">
		<source src="<?php echo base_url('assets/video/background_engrenagem.mp4')?>" type="video/mp4">
	</video>
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5"><?php echo $heading; ?></h1>
    <p class="lead"><?php echo $message; ?>.</p>
    <p class="font-weight-lighter">Para retornar a página principal <a href="<?php echo site_url('home')?>">clique aqui</a>.</p>
  </div>
</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Infelizmente não podemos localizar a página solicitada.</span>
  </div>
</footer>
</body>
</html>
