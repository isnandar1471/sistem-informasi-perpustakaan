@extends('../template-petugas')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Edit Data Peminjaman</h2>
		<form action="{{url('/peminjaman/'.$data['toEdit']['id'])}}" method="POST">
			@method('PATCH')
			@csrf
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="id_mahasiswa" class="col-form-label">id_mahasiswa</label>
				</div>
				<div class="col-auto w-50">
					<input disabled type="text" id="id_mahasiswa" name="id_mahasiswa" value="{{$data['toEdit']['id_mahasiswa']}}" class="form-control" aria-describedby="id_mahasiswaHelp">
					<span id="id_mahasiswaHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="id_buku" class="col-form-label">id_buku</label>
				</div>
				<div class="col-auto w-50">
					<input disabled type="text" id="id_buku" name="id_buku" value="{{$data['toEdit']['id_buku']}}" class="form-control" aria-describedby="id_bukuHelp" autofocus>
					<span id="id_bukuHelp" class="form-text">
						Harus Pilih Salah Satu
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="tanggal_peminjaman" class="col-form-label">tanggal_peminjaman</label>
				</div>
				<div class="col-auto w-50">
					<input disabled type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" value="{{$data['toEdit']['tanggal_peminjaman']}}" class="form-control" aria-describedby="tanggal_peminjamanHelp" autofocus>
					<span id="tanggal_peminjamanHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="tanggal_pengembalian" class="col-form-label">tanggal_pengembalian</label>
				</div>
				<div class="col-auto w-50">
					<input disabled type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" value="{{$data['toEdit']['tanggal_pengembalian']}}" class="form-control" aria-describedby="tanggal_pengembalianHelp" autofocus>
					<span id="tanggal_pengembalianHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="status" class="col-form-label">Status</label>
				</div>
				<div class="col-auto w-50">
					<select class="form-select" id="status" name="status" autofocus>
						<option selected>Choose...</option>
						@foreach($data['statusPeminjaman'] as $statusPeminjaman => $bg)
						<option value="{{$statusPeminjaman}}">{{$statusPeminjaman}}</option>
						@endforeach
					</select>
					<span id="statusHelp" class="form-text">

					</span>
				</div>
			</div>
			<input type="hidden" name="id_petugas" value="{{$data['user'][0]['id']}}">

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25"></div>
				<div class="col-auto w-50">
					<input type="submit" class="btn btn-primary" value="Edit Kategori">
				</div>
			</div>
		</form>
	</div>
</div>
@stop