<?php
	$pagina_v = array("home_sys_v", "perfume_v", "materia_v", "pedido_v", "relatorio_v", "sobre_v");
	foreach ($pagina_v as $value) {
		$link_current[] = $value == $pagina ? "<span class='sr-only'>(current)</span>" : "";
		$link_active[] = $value == $pagina ? "active" : "";
		$collapseShow[] = $value == $pagina ? "show" : "";
	}
?>
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="<?php echo site_url('home')?>" class="logo">
					<img src="<?php echo base_url('assets/img/logo_sifap.svg')?>" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?php echo base_url("assets/img/profile/profile1.png")?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?php echo base_url("assets/img/profile/profile1.png")?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Usuário</h4>
												<p class="text-muted">Operacional</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#perfilModal" data-toggle="modal">Meu Perfil</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo base_url("assets/img/profile/profile1.png")?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<span class="user-level">Usuário</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#">
											<span class="link-collapse">Meu Perfil</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="link-collapse">Editar Perfil</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item <?php echo $link_active[0] ?>">
							<a href="<?php echo site_url('home')?>">
								<i class="fas fa-home"></i>
								<p>Principal</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">DADOS DO SISTEMA</h4>
						</li>
						<li class="nav-item <?php echo $link_active[1] ?>">
							<a href="<?php echo site_url('home/perfume')?>">
								<i class="fas fa-spray-can"></i>
								<p>Perfumes</p>
							</a>
						</li>
						<li class="nav-item <?php echo $link_active[2] ?>">
							<a href="<?php echo site_url('home/materia')?>">
								<i class="fas fa-dolly"></i>
								<p>Matéria Prima</p>
							</a>
						</li>
						<li class="nav-item <?php echo $link_active[3] ?>">
							<a href="<?php echo site_url('home/pedido')?>">
								<i class="fas fa-cogs"></i>
								<p>Pedidos</p>
							</a>
						</li>
						<li class="nav-item active submenu">
						<li class="nav-item">
							<a data-toggle="collapse" href="#relatorio">
								<i class="fas fa-file-pdf"></i>
								<p>Relatório</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="relatorio">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('report/relatorio_perfume')?>" target="_blank">
											<span class="sub-item">Relatorio 1</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('report/relatorio_fragrancia')?>" target="_blank">
											<span class="sub-item">Relatorio 2</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>