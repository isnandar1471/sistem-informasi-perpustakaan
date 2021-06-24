@extends('../template-mahasiswa')

@section('content')
<div class="card mb-3">
	<div class="card-body">
		<h2 class="card-title">Profil Mahasiswa</h2>
		<dl class="row mx-2">
			@foreach($data['user'] as $row)
			<dt class="col-sm-3">Nama</dt>
			<dd class="col-sm-9">{{$row['nama']}}</dd>
			<dt class="col-sm-3">Email</dt>
			<dd class="col-sm-9">{{$row['email']}}</dd>
			<dt class="col-sm-3">Username</dt>
			<dd class="col-sm-9">{{$row['username']}}</dd>
			<dt class="col-sm-3">Password</dt>
			<dd class="col-sm-9">{{$row['password']}}</dd>
			@endforeach
		</dl>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data Peminjaman Pengguna</h2>
		<a href="/mahasiswa-peminjaman" type="button" class="btn btn-primary m-3">Ajukan Peminjaman</a>
		<table class="table table-striped px-0 mx-1">
			<caption>Daftar Peminjaman Pengguna</caption>
			<thead class="table-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">[id] Buku</th>
					<th scope="col">Tanggal Peminjaman</th>
					<th scope="col">Tanggal Pengembalian</th>
					<th scope="col">Status</th>
					<th scope="col">[id] Petugas</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0;
				$jumlahKolom =  7; ?>
				@if(count($data['records']))
				@foreach($data['records'] as $value)
				<tr>
					<th scope="row">{{$value['id']}}</th>
					<td>@foreach($data['buku'] as $buku)
						@if($value['id_buku'] == $buku['id'])
						[{{$buku['id']}}] {{$buku['judul']}}
						@endif
						@endforeach
					</td>
					<td>{{$value['tanggal_peminjaman']}}</td>
					<td>{{$value['tanggal_pengembalian']}}</td>
					<td>
						<span class="badge 
						@foreach($data['statusPeminjaman'] as $statusPeminjaman => $bg)
						@if($value['status']==$statusPeminjaman)
						{{$bg}}
						@endif
						@endforeach
					">{{$value['status']}}</span>
					</td>
					<td>@foreach($data['petugas'] as $ptgs)
						@if($value['id_petugas'] == $ptgs['id'])
						[{{$ptgs['id']}}] {{$ptgs['nama']}}
						@endif
						@endforeach
					</td>
				</tr>
				<?php $total = $loop->count ?>
				@endforeach
				@else
				<tr>
					<td colspan="{{$jumlahKolom}}" class="text-center py-5">
						<h4>Data Peminjaman Pengguna Kosong</h4>
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