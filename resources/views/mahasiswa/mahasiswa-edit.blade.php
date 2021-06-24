@extends('../template-admin')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Edit Data Mahasiswa</h2>
		<form action="{{url('/mahasiswa/'.$data['toEdit']['id'])}}" method="POST">
			@method('PATCH')
			@csrf
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="nama" class="col-form-label">Nama</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="nama" name="nama" value="{{$data['toEdit']['nama']}}" class="form-control" aria-describedby="namaHelp" autofocus>
					<span id="namaHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="email" class="col-form-label">email</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="email" name="email" value="{{$data['toEdit']['email']}}" class="form-control" aria-describedby="emailHelp" autofocus>
					<span id="emailHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="username" class="col-form-label">username</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="username" name="username" value="{{$data['toEdit']['username']}}" class="form-control" aria-describedby="usernameHelp" autofocus>
					<span id="usernameHelp" class="form-text">
						Harus Unik
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="password" class="col-form-label">password</label>
				</div>
				<div class="col-auto w-50">
					<input type="password" id="password" name="password" value="{{$data['toEdit']['password']}}" class="form-control" aria-describedby="passwordHelp" autofocus>
					<span id="passwordHelp" class="form-text">
						Harus Unik
					</span>
				</div>
			</div>

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25"></div>
				<div class="col-auto w-50">
					<input type="submit" class="btn btn-primary" value="Edit Mahasiswa">
				</div>
			</div>
		</form>
	</div>
</div>
@stop