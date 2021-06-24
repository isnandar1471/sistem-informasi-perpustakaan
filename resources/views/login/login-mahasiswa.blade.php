@extends('../template-login')

@section('header-login')
<div class="container-lg d-flex align-items-end flex-column">
	<span class="m-3"><a href="/login/petugas">Login sebagai Petugas</a></span>
</div>
@stop

@section('content')
<form action="/login-mahasiswa" method="POST" class="d-flex card text-center w-50 mx-auto my-5">
	@csrf
	<div class="card-header">
		<h5>Login</h5>
		<h2>Mahasiswa</h2>
	</div>
	<div class="card-body">
		<div class="mb-4">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control" id="username" name="username" autofocus>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
	</div>
	<div class="card-footer">
		<button type="reset" class="btn btn-outline-warning">Reset</button>
		<button type="submit" class="btn btn-primary ms-5">Submit</button>
	</div>
</form>
@stop

@section('footer')
tes
@stop