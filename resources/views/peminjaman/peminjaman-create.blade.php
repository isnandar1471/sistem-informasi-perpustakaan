@extends('../template-mahasiswa')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Ajukan Peminjaman</h2>
		<form action="{{url('/mahasiswa-peminjaman')}}" method="POST">
			@csrf
			<div class="ms-3 mb-3">
				<input type="reset" class="btn btn-outline-danger" value="Clear">
			</div>
			<input type="hidden" id="id_mahasiswa" name="id_mahasiswa" value="{{$data['user'][0]['id']}}">

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="id_buku" class="col-form-label">Buku</label>
				</div>
				<div class="col-auto w-50">
					<select class="form-select" id="id_buku" name="id_buku" autofocus>
						<option selected>Choose . . . [id-buku] nama-buku</option>
						@foreach($data['buku'] as $key => $value)
						<option value="{{$value['id']}}">[{{$value['id']}}]-{{$value['judul']}}</option>
						@endforeach
					</select>
					<span id="id_bukuHelp" class="form-text">
						Harus Pilih Salah Satu
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="tanggal_peminjaman" class="col-form-label">Tanggal Peminjaman</label>
				</div>
				<div class="col-auto w-50">
					<input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" class="form-control" aria-describedby="tanggal_peminjamanHelp">
					<span id="tanggal_peminjamanHelp" class="form-text">
						Harus Format Tanggal DD/MM/YYYY
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="tanggal_pengembalian" class="col-form-label">Tanggal Pengembalian</label>
				</div>
				<div class="col-auto w-50">
					<input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" class="form-control" aria-describedby="tanggal_pengembalianHelp">
					<span id="tanggal_pengembalianHelp" class="form-text">
						Harus Format Tanggal DD/MM/YYYY
					</span>
				</div>
			</div>

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25"></div>
				<div class="col-auto w-50">
					<input type="submit" class="btn btn-primary" value="Create Peminjaman">
				</div>
			</div>
		</form>
	</div>
</div>
@stop