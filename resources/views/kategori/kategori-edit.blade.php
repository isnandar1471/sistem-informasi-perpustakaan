@extends('../template-petugas')

@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Edit Data Kategori</h2>
		<form action="{{url('/kategori/'.$data['toEdit']['id'])}}" method="POST">
			@method('PATCH')
			@csrf
			<div class="row ms-3 mb-3">
				<div class="col-auto d-flex w-25">
					<label for="nama" class="col-form-label">Nama</label>
				</div>
				<div class="col-auto w-50">
					<input type="text" id="nama" name="nama" value="{{$data['toEdit']['nama']}}" class="form-control" aria-describedby="namaHelp" autofocus>
					<span id="namaHelp" class="form-text">
						Harus Unik
					</span>
				</div>
			</div>

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