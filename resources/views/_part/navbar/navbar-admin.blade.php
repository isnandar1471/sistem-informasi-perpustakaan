<?php
$active = explode(":", $data['title']);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid container-lg">
		<a class="navbar-brand" href="/home">Sistem Informasi Perpustakaan</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item mx-2">
					<a class="nav-link {{($active[0]=='PagesController')?'active':''}}" href="/home-admin">Home</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link {{($active[0]=='MahasiswaController')?'active':''}}" href="/mahasiswa">Mahasiswa</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link {{($active[0]=='PetugasController')?'active':''}}" href="/petugas">Petugas</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link {{($active[0]=='AdminController')?'active':''}}" href="/admin">Admin</a>
				</li>
			</ul>
			<div class="d-flex">
				<div class="dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{$data['user'][0]['username']}}
					</a>
					<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item disabled">Admin</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="/logout">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>