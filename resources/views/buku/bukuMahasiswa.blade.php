@extends('../template-mahasiswa')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data Buku</h2>
		<table class="table table-striped px-0 mx-1">
			<caption>Daftar Buku</caption>
			<thead class="table-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">Judul</th>
					<th scope="col">Pengarang</th>
					<th scope="col">Penerbit</th>
					<th scope="col">Tahun Terbit</th>
					<th scope="col">Tempat Terbit</th>
					<th scope="col">Cetakan</th>
					<th scope="col">Tebal</th>
					<th scope="col">Harga</th>
					<th scope="col">Stok</th>
					<th scope="col">Kategori</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0;
				$jumlahKolom =  11; ?>
				@if(count($data['records']))
				@foreach($data['records'] as $value)
				<tr>
					<th scope="row">{{$value['id']}}</th>
					<td>{{$value['judul']}}</td>
					<td>{{$value['pengarang']}}</td>
					<td>{{$value['penerbit']}}</td>
					<td>{{$value['tahun_terbit']}}</td>
					<td>{{$value['tempat_terbit']}}</td>
					<td>{{$value['cetakan']}}</td>
					<td>{{$value['tebal']}}</td>
					<td>{{$value['harga']}}</td>
					<td>{{$value['stok']}}</td>
					<td>{{$value['kategori']}}</td>
				</tr>
				<?php $total = $loop->count ?>
				@endforeach
				@else
				<tr>
					<td colspan="{{$jumlahKolom}}" class="text-center py-5">
						<h4>Data Buku Kosong</h4>
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