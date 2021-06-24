@extends('../template-admin')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Tambah Data Admin</h2>
		<form action="{{url('/admin')}}" method="POST">
			@csrf
			<div class="ms-3 mb-3">
				<input type="reset" class="btn btn-outline-danger" value="Clear">
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="username" class="col-form-label">Username</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="username" name="username" class="form-control" aria-describedby="usernameHelp" autofocus>
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
				</div>
				<div class="col-auto w-50">
					<input type="submit" class="btn btn-primary" value="Create Admin">
				</div>
			</div>
		</form>
	</div>
</div>
@stop