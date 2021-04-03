<!DOCTYPE html>
<html lang="en">
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
	<link rel="stylesheet" href="<?php echo base_url('assets/css/sifap.css')?>">

</head>
<body>
	<div class="wrapper">
		<!-- Início Cabeçaçho e Barra de Navegação -->
		<?php
		$this->load->view('template/header-nav-page');
		?>
		<!-- Fim Cabeçaçho e Barra de Navegação -->
		
		<!-- Conteúdo Página -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Sobre</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<!--<i class="flaticon-home"></i>-->
									<i class="flaticon-round"></i>
								</a>
							</li>
							<!--<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Datatables</a>
							</li>-->
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Informações sobre o sistema</h4>
								</div>
								<div class="card-body">							
									<div class="jumbotron mt-3">
										<h1>SIFAP - Sistema de Fábrica de Perfumes</h1>
										<p class="lead">O SIFAP é um sistema WEB desenvolvido por Andreney, utilizando código aberto e ferramentas de alta produtividade, para mais informações entre em contato andreney@gmail.com.</p>
										<style>
										marquee{
										border-top: 2px ridge; green; border-bottom: 2px ridge; green;align: center; width: 400px; height: 300px; color: black; font-size: 12px;}
										</style>
										<marquee direction="down" scrollDelay=180>
										<img src="<?php echo base_url('assets/img/logosys.svg')?>" width="80" height="80" class="d-inline-block align-top" alt=""><br>
										<b>SIFAP - Sistema de Fábrica de Perfumes</b><br>
										Versão: beta 1.0.1<br>
										Lançado: 02/04/2021<br><br><br>

										<b>Desenvolvimento</b><br>
										* Desenvolvedor: Andreney Laranjeira<br>
										* Copyright 2021<br><br>

										<b>Framework Front-End</b><br>
										* Bootstrap v4.5.0 (https://getbootstrap.com/)<br>
										* Copyright 2011-2020 The Bootstrap Authors<br>
										* Copyright 2011-2020 Twitter, Inc.<br>
										* Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)<br>
										* Template: Atlantis Bootstrap 4 Admin Dashboard<br><br>

										<b>Framework Back-End</b><br>
										Página renderizada em <strong>{elapsed_time}</strong> segundos <br>
										<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Versão <strong>' . CI_VERSION . '</strong>' : '' ?><br>
										<b><i>Server Requirements</i></b><br>
										Recomendado PHP versão 5.6 ou posterior.<br>
										Este servidor está usando o PHP versão	<?php echo phpversion(); ?><br><br>

										<b>Bibliotecas e Plugins</b><br>
										* Font Awesome Free 5.8.1 by @fontawesome - https://fontawesome.com<br>
										* License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)<br><br>
										* Web Font Loader v1.6.16<br><br>
										* jQuery v3.5.1 | (c) JS Foundation and other contributors | jquery.org/license<br><br>
										* Select2 4.1.0-beta.1 | https://github.com/select2/select2/blob/master/LICENSE.md<br><br>
										* DataTables 1.10.16<br>
										* ©2008-2018 SpryMedia Ltd - datatables.net/license<br>
										* This source file is free software, available under the following license:<br>
										* MIT license - http://datatables.net/license<br><br>
										* Datetimepicker for Bootstrap 4, version : 4.17.47<br><br>
										* Datepicker for Bootstrap v1.9.0<br><br>
										* jQuery Mask Plugin v1.14.16<br>
										* github.com/igorescobar/jQuery-Mask-Plugin<br><br>
										* Sweetalert v.2.0<br><br>
										</marquee>
										<br>
										<a class="btn btn-lg btn-primary" href="#" role="button" data-toggle="modal" data-target="#ExemploModalCentralizado">Mais &raquo;</a>
									</div>
										  
									<!-- Modal -->
									<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="TituloModalCentralizado">Sobre o SIFAP</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<img src="<?php echo base_url('assets/img/logosys.svg')?>" width="80" height="80" class="d-inline-block align-top" alt=""><br>
													<b>SIFAP - Sistema de Fábrica de Perfumes</b><br>
													Versão: beta 1.0.1<br>
													Lançado: 02/04/2021<br><br><br>

													<b>Desenvolvimento</b><br>
													* Desenvolvedor: Andreney Laranjeira<br>
													* Copyright 2021<br><br>

													<b>Framework Front-End</b><br>
													* Bootstrap v4.5.0 (https://getbootstrap.com/)<br>
													* Copyright 2011-2020 The Bootstrap Authors<br>
													* Copyright 2011-2020 Twitter, Inc.<br>
													* Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)<br>
													* Template: Atlantis Bootstrap 4 Admin Dashboard<br><br>

													<b>Framework Back-End</b><br>
													Página renderizada em <strong>{elapsed_time}</strong> segundos <br>
													<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Versão <strong>' . CI_VERSION . '</strong>' : '' ?><br>
													<b><i>Server Requirements</i></b><br>
													Recomendado PHP versão 5.6 ou posterior.<br>
													Este servidor está usando o PHP versão <?php echo phpversion(); ?><br><br>
													
													<b>Bibliotecas e Plugins</b><br>
													* Font Awesome Free 5.8.1 by @fontawesome - https://fontawesome.com<br>
													* License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)<br><br>
													* Web Font Loader v1.6.16<br><br>
													* jQuery v3.5.1 | (c) JS Foundation and other contributors | jquery.org/license<br><br>
													* Select2 4.1.0-beta.1 | https://github.com/select2/select2/blob/master/LICENSE.md<br><br>
													* DataTables 1.10.16<br>
													* ©2008-2018 SpryMedia Ltd - datatables.net/license<br>
													* This source file is free software, available under the following license:<br>
													* MIT license - http://datatables.net/license<br><br>
													* Datetimepicker for Bootstrap 4, version : 4.17.47<br><br>
													* Datepicker for Bootstrap v1.9.0<br><br>
													* jQuery Mask Plugin v1.14.16<br>
													* github.com/igorescobar/jQuery-Mask-Plugin<br><br>
													* Sweetalert v.2.0<br><br>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
												</div>
											</div>
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
		
		<!-- Custom template | don't include it in your project! -->
		<!--<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>-->
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url('assets/js/core/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/core/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/core/bootstrap.min.js')?>"></script>
	
	<!-- jQuery UI -->
	<script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')?>"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="<?php echo base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')?>"></script>
	
	<!-- Datatables -->
	<script src="<?php echo base_url('assets/js/plugin/datatables/datatables.min.js')?>"></script>
	
	<!-- Atlantis JS -->
	<script src="<?php echo base_url('assets/js/atlantis.min.js')?>"></script>
	
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url('assets/js/setting-demo2.js')?>"></script>
	<script >
		$(document).ready(function() {
			//$('#basic-datatables').DataTable({
			//});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
			
			$('#basic-datatables').DataTable({
				"pageLength": 5,
				"columnDefs": [
					{ className: "dt-body-center", "targets": [ 1, 2, 3 ] }
				  ],
				"order": [[ 0, "asc" ]],
				//responsive: true 
				"oLanguage": {
					"sProcessing": "Aguarde enquanto os dados são carregados ...",
					"sLengthMenu": "Mostrar _MENU_ registros por página",
					"sZeroRecords": "Nenhum registro correspondente ao critério encontrado",
					"sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
					"sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
					"sInfoFiltered": "",
					"sSearch": "Procurar",
					"oPaginate": {
					   "sFirst":    "Primeiro",
					   "sPrevious": "Anterior",
					   "sNext":     "Próximo",
					   "sLast":     "Último"
					}
				},
				"drawCallback": function( oSettings ) {
					$('[data-toggle="modal"]').tooltip();
					$('[data-toggle="tooltip"]').tooltip();
				}
			});
		});
	</script>
</body>
</html>