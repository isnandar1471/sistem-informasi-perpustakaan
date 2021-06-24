@extends('../template-admin')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data Mahasiswa</h2>
		<a href="/mahasiswa/create" type="button" class="btn btn-primary m-3">Tambah Data Mahasiswa</a>
		<table class="table table-striped px-0 mx-1">
			<caption>Daftar Mahasiswa</caption>
			<thead class="table-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">nama</th>
					<th scope="col">email</th>
					<th scope="col">username</th>
					<th scope="col">password</th>
					<th scope="col">aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0;
				$jumlahKolom = 6; ?>
				@if(count($data['records']))
				@foreach($data['records'] as $value)
				<tr>
					<th scope="row">{{$value['id']}}</th>
					<td>{{$value['nama']}}</td>
					<td>{{$value['email']}}</td>
					<td>{{$value['username']}}</td>
					<td>{{$value['password']}}</td>
					<td>
						<a href="{{ url( '/mahasiswa/edit/'.$value['id'] ) }}" class="btn btn-warning">Edit</a>
						<form class="d-inline" action="{{ url( '/mahasiswa/'.$value['id'] )}}" method="POST">
							@method('DELETE')
							@csrf
							<?php $alertDeleteMessage = 'Apakah Anda yakin ingin menghapus Mahasiswa ini ?\n    nama : ' . $value['nama'] ?>
							<input type="submit" onclick="return confirm('{{$alertDeleteMessage}}')" class="btn btn-outline-danger" value="Delete">
						</form>
					</td>
				</tr>
				<?php $total = $loop->count ?>
				@endforeach
				@else
				<tr>
					<td colspan="{{$jumlahKolom}}" class="text-center py-5">
						<h4>Data Mahasiswa Kosong</h4>
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