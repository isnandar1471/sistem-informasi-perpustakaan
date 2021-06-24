@extends('../template-petugas')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Edit Data Buku</h2>
		<form action="{{url('/buku/'.$data['toEdit']['id'])}}" method="POST">
			@method('PATCH')
			@csrf
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="judul" class="col-form-label">Judul</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="judul" name="judul" value="{{$data['toEdit']['judul']}}" class="form-control" aria-describedby="judulHelp" autofocus>
					<span id="judulHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="pengarang" class="col-form-label">Pengarang</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="pengarang" name="pengarang" value="{{$data['toEdit']['pengarang']}}" class="form-control" aria-describedby="pengarangHelp">
					<span id="pengarangHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="penerbit" class="col-form-label">Penerbit</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="penerbit" name="penerbit" value="{{$data['toEdit']['penerbit']}}" class="form-control" aria-describedby="penerbitHelp">
					<span id="penerbitHelp" class="form-text">

					</span>
				</div>
			</div>

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="tahun_terbit" class="col-form-label">Tahun Terbit</label>
				</div>
				<div class="col-auto w-50">
					<input type="number" id="tahun_terbit" name="tahun_terbit" value="{{$data['toEdit']['tahun_terbit']}}" class="form-control" aria-describedby="tahun_terbitHelp">
					<span id="tahun_terbitHelp" class="form-text">
						Harus Nomor
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="tempat_terbit" class="col-form-label">Tempat Terbit</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="tempat_terbit" name="tempat_terbit" value="{{$data['toEdit']['tempat_terbit']}}" class="form-control" aria-describedby="tempat_terbitHelp">
					<span id="tempat_terbitHelp" class="form-text">

					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="cetakan" class="col-form-label">Cetakan</label>
				</div>
				<div class="col-auto w-50">
					<input type="number" id="cetakan" name="cetakan" value="{{$data['toEdit']['cetakan']}}" class="form-control" aria-describedby="cetakanHelp">
					<span id="cetakanHelp" class="form-text">
						Harus Nomor
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="tebal" class="col-form-label">Tebal (Lembar)</label>
				</div>
				<div class="col-auto w-50">
					<input type="number" id="tebal" name="tebal" value="{{$data['toEdit']['tebal']}}" class="form-control" aria-describedby="tebalHelp">
					<span id="tebalHelp" class="form-text">
						Harus Nomor
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="harga" class="col-form-label">Harga (Rupiah)</label>
				</div>
				<div class="col-auto w-50">
					<input type="number" id="harga" name="harga" value="{{$data['toEdit']['harga']}}" class="form-control" aria-describedby="hargaHelp">
					<span id="hargaHelp" class="form-text">
						Harus Nomor
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="stok" class="col-form-label">Stok (Biji)</label>
				</div>
				<div class="col-auto w-50">
					<input type="number" id="stok" name="stok" value="{{$data['toEdit']['stok']}}" class="form-control" aria-describedby="stokHelp">
					<span id="stokHelp" class="form-text">
						Harus Nomor
					</span>
				</div>
			</div>
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="kategori" class="col-form-label">Kategori</label>
				</div>
				<div class="col-auto w-50">
					<select class="form-select" id="kategori" name="kategori">
						<option selected>Choose...</option>
						@foreach($data['listKategori'] as $kategori)
						<option value="{{$kategori['nama']}}">{{$kategori['nama']}}</option>
						@endforeach
					</select>
					<span id="kategoriHelp" class="form-text">
						Harus Pilih Salah Satu
					</span>
				</div>
			</div>

			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25"></div>
				<div class="col-auto w-50">
					<input type="submit" class="btn btn-primary" value="Edit Buku">
				</div>
			</div>
		</form>
	</div>
</div>
@stop