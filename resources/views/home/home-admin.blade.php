@extends('../template-admin')

@section('content')
<div class="card mb-3">
	<div class="card-body">
		<h2 class="card-title">Profil Admin</h2>
		<dl class="row mx-2">
			@foreach($data['user'] as $row)
			<dt class="col-sm-3">Username</dt>
			<dd class="col-sm-9">{{$row['username']}}</dd>
			<dt class="col-sm-3">Password</dt>
			<dd class="col-sm-9">{{$row['password']}}</dd>
			@endforeach
		</dl>
	</div>
</div>
@stop