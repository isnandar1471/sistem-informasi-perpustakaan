@extends('../template-petugas')

@section('content')
<div class="card mb-3">
	<div class="card-body">
		<h2 class="card-title">Profil petugas</h2>
		<dl class="row mx-2">
			@foreach($data['user'] as $row)
			<dt class="col-sm-3">Nama</dt>
			<dd class="col-sm-9">{{$row['nama']}}</dd>
			<dt class="col-sm-3">Username</dt>
			<dd class="col-sm-9">{{$row['username']}}</dd>
			<dt class="col-sm-3">Password</dt>
			<dd class="col-sm-9">{{$row['password']}}</dd>
			<dt class="col-sm-3">Telepon</dt>
			<dd class="col-sm-9">{{$row['telepon']}}</dd>
			<dt class="col-sm-3">Alamat</dt>
			<dd class="col-sm-9">{{$row['alamat']}}</dd>
			@endforeach
		</dl>
	</div>
</div>
@stop