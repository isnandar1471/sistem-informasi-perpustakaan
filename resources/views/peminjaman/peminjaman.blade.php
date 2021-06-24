@extends('../template-petugas')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data Peminjaman</h2>
		<table class="table table-striped px-0 mx-1">
			<caption>Daftar Peminjaman</caption>
			<thead class="table-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">[id] mahasiswa</th>
					<th scope="col">[id] buku</th>
					<th scope="col">tgl peminjaman</th>
					<th scope="col">tgl pengambilan</th>
					<th scope="col">status</th>
					<th scope="col">[id] petugas</th>
					<th scope="col">aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0;
				$jumlahKolom = 8; ?>
				@if(count($data['records']))
				@foreach($data['records'] as $value)
				<tr>
					<th scope="row">{{$value['id']}}</th>
					<td>@foreach($data['mahasiswa'] as $mhs)
						@if($value['id_mahasiswa'] == $mhs['id'])
						[{{$mhs['id']}}] {{$mhs['nama']}}
						@endif
						@endforeach
					</td>

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
					<td>
						<a href="{{ url( '/peminjaman/edit/'.$value['id'] ) }}" class="btn btn-warning">Edit</a>
						<form class="d-inline" action="{{ url( '/peminjaman/'.$value['id'] )}}" method="POST">
							@method('DELETE')
							@csrf
							<?php $alertDeleteMessage = 'Apakah Anda yakin ingin menghapus Peminjaman ini ?\n    id : ' . $value['id'] ?>
							<input type="submit" onclick="return confirm('{{$alertDeleteMessage}}')" class="btn btn-outline-danger" value="Delete">
						</form>
					</td>
				</tr>
				<?php $total = $loop->count ?>
				@endforeach
				@else
				<tr>
					<td colspan="{{$jumlahKolom}}" class="text-center py-5">
						<h4>Data Peminjaman Kosong</h4>
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