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
		<!-- Fim Cabeçaçho e Barra de Navegação -->
		
		<!-- Conteúdo Página -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Matéria Prima</h4>
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
								<a href="#">Matéria Prima</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Todos</a>
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
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Matéria Prima</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addMPModal">
											<i class="fa fa-plus"></i>
											Novo
										</button>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Matéria Prima</th>
													<th><center>Quantidade em Estoque</center></th>
													<th><center>Ações</center></th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Matéria Prima</th>
													<th><center>Quantidade em Estoque</center></th>
													<th><center>Ações</center></th>
												</tr>
											</tfoot>
											<tbody>
												<?php
												foreach ($rs_materia_prima as $materia_prima)
												{
													$button_edit ='
													<button type="button" data-toggle="modal" data-target="#editMPModal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar '.mb_convert_case($materia_prima['descricao_mp'],  MB_CASE_TITLE).'" data-idmp="'.$materia_prima['id_mp_pk'].'" 
													data-descricaomp="'.$materia_prima['descricao_mp'].'" data-idtipomp="'.$materia_prima['id_tipo_fk'].'" data-qtdestoque="'.$materia_prima['estoque_mp'].'">
														<i class="fa fa-edit"></i>
													</button>';
													
													$button_more ='
													<button type="button" data-toggle="modal" data-target="#updMoreModal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Adicionar '.mb_convert_case($materia_prima['descricao_mp'],  MB_CASE_TITLE).'" data-idmp="'.$materia_prima['id_mp_pk'].'"
													data-descricaomp="'.$materia_prima['descricao_mp'].'">
														<i class="fas fa-plus"></i>
													</button>';
													
													if($materia_prima['id_tipo_fk'] == 1 || $materia_prima['id_tipo_fk'] == 2){
														$button_edit ='
														<button type="button" title="" class="btn btn-link btn-info btn-lg" data-original-title="Não é possível alterar estes ingredientes">
															<i class="fa fa-edit"></i>
														</button>';
													}
																										
													echo '<tr>';
													echo '<td>'.$materia_prima['descricao_mp'].'</td>';
													echo '<td><center>'.$materia_prima['estoque_mp'].' ml</center></td>';
													echo '<td><center>'.$button_edit.$button_more.'</center></td>';
													echo '</tr>';
												}
												?>
											</tbody>
										</table>
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
		
		<!-- Modal -->
		<div class="modal fade" id="addMPModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header no-bd">
						<h5 class="modal-title">
							<span class="fw-mediumbold">
							Nova</span> 
							<span class="fw-light">
							Matéria Prima
							</span>
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="small" id="infonew">Crie um novo registro de matéria prima usando este formulário, certifique-se de preencher todos os campos sinalizados com *</p>
						<div class="alert alert-danger alert-dismissible fade show" id="erro_insert" role="alert">
							<strong>Erro na Validação!</strong> Por favor verifique todos os campos obrigatórios.
						</div>
						<?php echo form_open('crud/cadastro_mp', 'name="cad_mp" id="cad_mp"')?>
							<div class="row">
								<div class="col-md-8 pr-0">
									<div class="form-group form-group-default">
										<label>Nome matéria prima <span class="align-text-bottom text-danger">*</span></label>
										<input id="addNome" name="addNome" type="text" class="form-control" placeholder="entre com o nome da matéria prima">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-group-default">
										<label>Estoque Inicial <span class="align-text-bottom text-danger">*</span></label>
										<input id="addQtdEstoque" name="addQtdEstoque" type="number" class="form-control" placeholder="Quantidade ml">
									</div>
								</div>
							</div>
						<?php echo form_close()?>
					</div>
					<div class="modal-footer no-bd">
						<button type="button" id="addRowButton" class="btn btn-primary" onClick="validarCadastro();">Cadastrar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="editMPModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header no-bd">
						<h5 class="modal-title">
							<span class="fw-mediumbold">
							Editar</span> 
							<span class="fw-light">
							Matéria Prima
							</span>
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="small" id="infoupd">Editar registro do matéria prima, certifique-se de preencher todos os campos sinalizados com *</p>
						<div class="alert alert-danger alert-dismissible fade show" id="erro_update" role="alert">
							<strong>Erro na Validação!</strong> Por favor verifique todos os campos obrigatórios.
						</div>
						<?php echo form_open('crud/atualiza_mp', 'name="edit_mp" id="edit_mp"')?>
						<input id="updId" name="updId" type="hidden">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-group-default">
										<label>Nome matéria prima <span class="align-text-bottom text-danger">*</span></label>
										<input id="updNome" name="updNome" type="text" class="form-control" placeholder="entre com o nome da matéria prima">
									</div>
								</div>
							</div>
						<?php echo form_close()?>
					</div>
					<div class="modal-footer no-bd">
						<button type="button" id="updRowButton" class="btn btn-primary" onClick="validarAtualizacao();">Atualizar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="updMoreModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header no-bd">
						<h5 class="modal-title">
							<span class="fw-mediumbold">
							Mais</span> 
							<span class="fw-light">
							Matéria Prima
							</span>
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="small" id="infomore">Usando este formulário você irá adicionar mais matéria prima ao seu estoque, certifique-se de preencher todos os campos sinalizados com *</p>
						<div class="alert alert-danger alert-dismissible fade show" id="erro_more" role="alert">
							<strong>Erro na Validação!</strong> Por favor verifique todos os campos obrigatórios.
						</div>
						<?php echo form_open('crud/adiciona_mais_mp', 'name="cad_moremp" id="cad_moremp"')?>
						<input id="updIdMore" name="updIdMore" type="hidden">
							<div class="row">
								<div class="col-md-6 pr-0">
									<div class="form-group form-group-default">
										<label>Matéria Prima <span class="align-text-bottom text-danger">*</span></label>
										<input id="material" name="material" type="text" class="form-control" disabled>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Quantidade (em ml) <span class="align-text-bottom text-danger">*</span></label>
										<input id="addMoreMP" name="addMoreMP" type="number" class="form-control" placeholder="quantidade em ml">
									</div>
								</div>
							</div>
						<?php echo form_close()?>
					</div>
					<div class="modal-footer no-bd">
						<button type="button" id="addRowButton" class="btn btn-primary" onClick="validarAdicao();">Cadastrar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
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
		
		//Entrar com as mensagens ocultas
		$('#erro_insert').hide();
		$('#erro_update').hide();
		$('#erro_more').hide();
		
		//Executa o select2
		$('.sel2').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
			//language: "pt-BR"
			language: {
			  // You can find all of the options in the language files provided in the
			  // build. They all must be functions that return the string that should be
			  // displayed.
			  errorLoading: function () {
				return "Os resultados não puderam ser carregados...";
			  },
			  noResults: function () {
				return "Nenhum resultado encontrado...";
			  }
			}
		});
		
		//Função para validar o preenchimento dos campos (utiliza funções de validações do js/validation_form.js)
		function validarCadastro(){
			var erro = 0;
			var addNome = validar_nulo("addNome");
			var addQtdEstoque = validar_nulo("addQtdEstoque");

			if(!addQtdEstoque || !addNome){
				erro++;
			}
			
			if(erro == 0){
				document.cad_mp.submit();
			}else{
				$('#infonew').hide();
				$('#erro_insert').show();
			}
		}
		
		//Função para validar o preenchimento dos campos (utiliza funções de validações do js/validation_form.js)
		function validarAtualizacao(){
			var uerro = 0
			var updNome = validar_nulo("updNome")

			if(!updNome){
				uerro++
			}
			
			if(uerro == 0){
				document.edit_mp.submit()
			}else{
				$('#infoupd').hide()
				$('#erro_update').show()
			}
		}
		
		//Função para validar o preenchimento dos campos (utiliza funções de validações do js/validation_form.js)
		function validarAdicao(){
			var merro = 0;
			var updMoreMateria = validar_nulo("addMoreMP");

			if(!updMoreMateria){
				merro++;
			}
			
			if(merro == 0){
				document.cad_moremp.submit()
			}else{
				$('#infomore').hide();
				$('#erro_more').show()
			}
		}
		
		$(document).ready(function() {
			//Executa o plugin do datagrid para a tabela com DataTable
			$('#basic-datatables').DataTable({
				"pageLength": 10,
				"order": [],
				//"order": [[ 0, "asc" ]],
				//responsive: true 
				"oLanguage": {
					"sProcessing": "Aguarde enquanto os dados são carregados ...",
					"sLengthMenu": "Mostrar _MENU_ registros por página",
					"sZeroRecords": "Nenhum registro correspondente ao critério encontrado",
					"sInfoEmpty": "Exibindo 0 a 0 de 0 registros",
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
		
		//Recupera dados do botão e os atualiza no modal
		$('#editMPModal').on('show.bs.modal', function (event){
			var button = $(event.relatedTarget)	// A propriedade event.relatedTarget retorna qual elemento está sendo inserido
			var idRegistro = button.data('idmp') //Recupera os dados do atributo data-*
			var descricaomp = button.data('descricaomp') //Recupera os dados do atributo data-*
			
			var modal = $(this)
			
			//modal.find('.modal-title').text('EDITAR ' + siglasetor)
			modal.find('#updId').val(idRegistro)
			modal.find('#updNome').val(descricaomp)
		});
		
		//Recupera dados do botão e os atualiza no modal
		$('#updMoreModal').on('show.bs.modal', function (event){
			var button = $(event.relatedTarget)	// A propriedade event.relatedTarget retorna qual elemento está sendo inserido
			var idRegistro = button.data('idmp') //Recupera os dados do atributo data-*
			var descricaomp = button.data('descricaomp') //Recupera os dados do atributo data-*
			
			var modal = $(this)
			
			//modal.find('.modal-title').text('EDITAR ' + siglasetor)
			modal.find('#updIdMore').val(idRegistro)
			modal.find('#material').val(descricaomp)
		});
	</script>
</body>
</html>