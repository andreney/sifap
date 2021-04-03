<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo $title?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	
	<!-- Fonts and icons -->
	<script src="<?php echo base_url("assets/js/plugin/webfont/webfont.min.js")?>"></script>

	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo base_url("assets/css/fonts.min.css")?>']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	 <!-- Favicons -->
	<link rel="apple-touch-icon" href="<?php echo base_url('assets/img/logosys.svg')?>" sizes="180x180">
	<link rel="icon" href="<?php echo base_url('assets/img/logosys.svg')?>" sizes="32x32" type="image/png">
	<link rel="icon" href="<?php echo base_url('assets/img/logosys.svg')?>" sizes="16x16" type="image/png">
	<link rel="icon" href="<?php echo base_url('assets/img/logosys.svg')?>" sizes="any" type="image/svg+xml">

	<!-- CSS Core -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/atlantis.min.css')?>">
	
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/siscam.css')?>">
	
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugin/select2/select2.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugin/select2/select2-bootstrap4.min.css')?>">
	
	<script src="<?php echo base_url('assets/js/validation_form.js')?>"></script>
</head>
<body>
	<div class="wrapper">
		<!-- Início Cabeçaçho e Barra de Navegação -->
		<?php
		$this->load->view('template/header-nav-page');
		?>
		<!-- End Sidebar -->
		
		<!-- Conteúdo Página -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Relatorios</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Perfumes</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Mais Vendidos</a>
							</li>
						</ul>
						<!--<div class="ml-md-auto py-2 py-md-0">
							<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
							<a href="#" class="btn btn-primary btn-round">Novo</a>
						</div>-->
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<!--<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Botão</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addPerfumeModal">
											<i class="fa fa-plus"></i>
											Ação
										</button>
									</div>
								</div>-->
								<div class="card-body">
									<div class="row">
										<div class="col-sm-12">
											<center><iframe id="filepdf" src="<?php echo site_url('report/'.$relatorio)?>" style="width:100%; height:600px;"frameborder="0"></iframe></center>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Início Rodapé -->
			<?php $this->load->view('template/footer-nav-page')?>
			<!-- Fim Rodapé -->
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url('assets/js/core/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/core/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/core/bootstrap.min.js')?>"></script>
	
	<!-- jQuery UI -->
	<script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')?>"></script>
	
	<!-- Bootstrap Notify -->
	<script src="<?php echo base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')?>"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="<?php echo base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')?>"></script>
	
	<!-- jQuery Mask v1.14.16 - Cria máscaras de entrada no input -->
	<script src="<?php echo base_url('assets/js/plugin/jQuery-Mask/jquery.mask.min.js')?>"></script>
	
	<!-- Datatables -->
	<script src="<?php echo base_url('assets/js/plugin/datatables/datatables.min.js')?>"></script>
	
	<!-- Atlantis JS -->
	<script src="<?php echo base_url('assets/js/atlantis.min.js')?>"></script>
	
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url('assets/js/setting-demo2.js')?>"></script>
	<script src="<?php echo base_url('assets/js/validation_form.js')?>"></script>
	
	<!-- Plugin Datepicker for Bootstrap -->
	<script src="<?php echo base_url('assets/js/plugin/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/bootstrap-datepicker/bootstrap-datepicker.pt-BR.min.js')?>" charset="UTF-8"></script>
	
	<!-- Plugin select2 for Bootstrap -->
	<script src="<?php echo base_url('assets/js/plugin/select2/select2.min.js')?>"></script>
	
	<!-- Bootstrap-Validate -->
	<script src="<?php echo base_url('assets/js/plugin/bootstrap-validate/bootstrap-validate.js')?>"></script>

	<script>
		<?php
		if($this->session->flashdata("cadastro_false") || $this->session->flashdata("atualiza_false") || $this->session->flashdata("cadastro_true") || $this->session->flashdata("atualiza_true")){
			if($this->session->flashdata("cadastro_true")){
				$mensagem[] = "Cadastro";
				$mensagem[] = $this->session->flashdata("cadastro_true");
				$mensagem[] = "success";
			}else if($this->session->flashdata("atualiza_true")){
				$mensagem[] = "Atualização";
				$mensagem[] = $this->session->flashdata("atualiza_true");
				$mensagem[] = "success";
			}
			else if($this->session->flashdata("cadastro_false")){
				$mensagem[] = "Cadastro";
				$mensagem[] = $this->session->flashdata("cadastro_false");
				$mensagem[] = "danger";
			}else if($this->session->flashdata("atualiza_false")){
				$mensagem[] = "Atualização";
				$mensagem[] = $this->session->flashdata("atualiza_false");
				$mensagem[] = "danger";
			}
			?>
				
			$.notify({
				// options
				icon: 'flaticon-alarm-1',
				title: '<strong><?php echo $mensagem[0] ?></strong>',
				message: '<?php echo $mensagem[1] ?>',
				//url: 'https://github.com/mouse0270/bootstrap-notify',
				target: '_blank'
			},{
				// settings
				element: 'body',
				position: null,
				type: '<?php echo $mensagem[2] ?>',
				allow_dismiss: true,
				newest_on_top: false,
				showProgressbar: false,
				placement: {
					from: "top",
					align: "right"
				},
				offset: 20,
				spacing: 10,
				z_index: 1031,
				delay: 6000,
				timer: 1000,
				url_target: '_blank',
				mouse_over: null,
				animate: {
					enter: 'animated fadeInDown',
					exit: 'animated fadeOutUp'
				},
				onShow: null,
				onShown: null,
				onClose: null,
				onClosed: null,
				icon_type: 'class',
				template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
					'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
					'<span data-notify="icon"></span> ' +
					'<span data-notify="title">{1}</span> ' +
					'<span data-notify="message">{2}</span>' +
					'<div class="progress" data-notify="progressbar">' +
						'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
					'</div>' +
					'<a href="{3}" target="{4}" data-notify="url"></a>' +
				'</div>' 
			});
		<?php
		}
		?>
		
		//Exibir tooltips
		$('[data-toggle="modal"]').tooltip();
	</script>
</body>
</html>