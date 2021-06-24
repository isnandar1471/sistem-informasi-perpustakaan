@extends('../template-admin')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Tambah Data Mahasiswa</h2>
		<form action="{{url('/mahasiswa')}}" method="POST">
			@csrf
			<div class="ms-3 mb-3">
				<input type="reset" class="btn btn-outline-danger" value="Clear">
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="nama" class="col-form-label">nama</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="nama" name="nama" class="form-control" aria-describedby="namaHelp" autofocus>
					<span id="namaHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="email" class="col-form-label">email</label>
				</div>
				<div class="col-auto w-50">
					<input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp">
					<span id="emailHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="username" class="col-form-label">username</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="username" name="username" class="form-control" aria-describedby="usernameHelp">
					<span id="usernameHelp" class="form-text">
						Harus Unik
					</span>
				</div>
			</div>

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="password" class="col-form-label">Password</label>
				</div>
				<div class="col-auto w-50">
					<input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelp">
					<span id="passwordHelp" class="form-text">
						Harus Unik
					</span>
				</div>
			</div>

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25"></div>
				<div class="col-auto w-50">
					<input type="submit" class="btn btn-primary" value="Create Mahasiswa">
				</div>
			</div>
		</form>
	</div>
</div>
@stop