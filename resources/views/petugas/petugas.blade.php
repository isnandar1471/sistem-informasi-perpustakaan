@extends('../template-admin')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data Petugas</h2>
		<a href="/petugas/create" type="button" class="btn btn-primary m-3">Tambah Data Petugas</a>
		<table class="table table-striped px-0 mx-1">
			<caption>Daftar Petugas</caption>
			<thead class="table-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">Nama</th>
					<th scope="col">Username</th>
					<th scope="col">Password</th>
					<th scope="col">Telepon</th>
					<th scope="col">Alamat</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0;
				$jumlahKolom = 7; ?>
				@if(count($data['records']))
				@foreach($data['records'] as $value)
				<tr>
					<th scope="row">{{$value['id']}}</th>
					<td>{{$value['nama']}}</td>
					<td>{{$value['username']}}</td>
					<td>{{$value['password']}}</td>
					<td>{{$value['telepon']}}</td>
					<td>{{$value['alamat']}}</td>
					<td>
						<a href="{{ url( '/petugas/edit/'.$value['id'] ) }}" class="btn btn-warning">Edit</a>
						<form class="d-inline" action="{{ url( '/petugas/'.$value['id'] )}}" method="POST">
							@method('DELETE')
							@csrf
							<?php $alertDeleteMessage = 'Apakah Anda yakin ingin menghapus Petugas ini ?\n    nama : ' . $value['nama'] ?>
							<input type="submit" onclick="return confirm('{{$alertDeleteMessage}}')" class="btn btn-outline-danger" value="Delete">
						</form>
					</td>
				</tr>
				<?php $total = $loop->count ?>
				@endforeach
				@else
				<tr>
					<td colspan="{{$jumlahKolom}}" class="text-center py-5">
						<h4>Data Petugas Kosong</h4>
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