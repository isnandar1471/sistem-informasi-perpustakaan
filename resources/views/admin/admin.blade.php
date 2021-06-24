@extends( '../template-admin' )

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data Admin</h2>
		<a href="/admin/create" type="button" class="btn btn-primary m-3">Tambah Data Admin</a>
		<table class="table table-striped px-0 mx-1">
			<caption>Daftar Admin</caption>
			<thead class="table-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">username</th>
					<th scope="col">password</th>
					<th scope="col">aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0;
				$jumlahKolom = 4; ?>
				@if(count($data['records']))
				@foreach($data['records'] as $value)
				<tr>
					<th scope="row">{{$value['id']}}</th>
					<td>{{$value['username']}}</td>
					<td>{{$value['password']}}</td>
					<td>
						<a href="{{ url( '/admin/edit/'.$value['id'] ) }}" class="btn btn-warning">Edit</a>
						<form class="d-inline" action="{{ url( '/admin/'.$value['id'] )}}" method="POST">
							@method('DELETE')
							@csrf
							<?php $alertDeleteMessage = 'Apakah Anda yakin ingin menghapus Admin ini ?\n    username : ' . $value['username'] ?>
							<input type="submit" onclick="return confirm('{{$alertDeleteMessage}}')" class="btn btn-outline-danger" value="Delete">
						</form>
					</td>
				</tr>
				<?php $total = $loop->count ?>
				@endforeach
				@else
				<tr>
					<td colspan="{{$jumlahKolom}}" class="text-center py-5">
						<h4>Data Admin Kosong</h4>
					</td>
				</tr>
				@endif
			</tbody>
			<tfoot>
				<tr>
					<th scope="row" colspan="{{$jumlahKolom}}" class="text-end">Total Data : {{$total}}</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
@stop