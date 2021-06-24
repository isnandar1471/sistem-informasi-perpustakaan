@extends('../template-petugas')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Tambah Data Petugas</h2>
		<form action="{{url('/petugas')}}" method="POST">
			@csrf
			<div class="ms-3 mb-3">
				<input type="reset" class="btn btn-outline-danger" value="Clear">
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="nama" class="col-form-label">Nama</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="nama" name="nama" class="form-control" aria-describedby="namaHelp" autofocus>
					<span id="namaHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="username" class="col-form-label">Username</label>
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
				<div class="col-auto d-flex w-25">
					<label for="telepon" class="col-form-label">telepon</label>
				</div>
				<div class="col-auto w-50">
					<input type="number" id="telepon" name="telepon" class="form-control" aria-describedby="teleponHelp">
					<span id="teleponHelp" class="form-text">
						Harus Nomor
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="alamat" class="col-form-label">alamat</label>
				</div>
				<div class="col-auto w-50">
					<textarea id="alamat" name="alamat" class="form-control" aria-describedby="alamatHelp"></textarea>
					<span id="alamatHelp" class="form-text">

					</span>
				</div>
			</div>

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25"></div>
				<div class="col-auto w-50">
					<input type="submit" class="btn btn-primary" value="Create Petugas">
				</div>
			</div>
		</form>
	</div>
</div>
@stop