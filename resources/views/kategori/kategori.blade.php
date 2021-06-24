@extends('../template-petugas')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data Kategori</h2>
		<a href="/kategori/create" type="button" class="btn btn-primary m-3">Tambah Data Kategori</a>
		<table class="table table-striped px-0 mx-1">
			<caption>Daftar Kategori</caption>
			<thead class="table-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">nama</th>
					<th scope="col">aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0;
				$jumlahKolom =  3; ?>
				@if(count($data['records']))
				@foreach($data['records'] as $value)
				<tr>
					<th scope="row">{{$value['id']}}</th>
					<td>{{$value['nama']}}</td>
					<td>
						<a href="{{ url( '/kategori/edit/'.$value['id'] ) }}" class="btn btn-warning">Edit</a>
						<form class="d-inline" action="{{ url( '/kategori/'.$value['id'] )}}" method="POST">
							@method('DELETE')
							@csrf
							<?php $alertDeleteMessage = 'Apakah Anda yakin ingin menghapus Kategori ini ?\n    kategori : ' . $value['nama'] ?>
							<input type="submit" onclick="return confirm('{{$alertDeleteMessage}}')" class="btn btn-outline-danger" value="Delete">
						</form>
					</td>
				</tr>
				<?php $total = $loop->count ?>
				@endforeach
				@else
				<tr>
					<td colspan="{{$jumlahKolom}}" class="text-center py-5">
						<h4>Data Kategori Kosong</h4>
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