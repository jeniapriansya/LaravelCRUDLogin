@extends('layouts/app')
@section('content')

	<div class="container">
			<form class="form form-responsive" action="{{ route('tokoaj.update', $tokoaj->id) }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				{{ csrf_field() }}
				<h2>Menu Edit Data</h2>
				<div class="form-group">
					<label for="namaProduk">Nama Produk</label>
					<input type="text" name="namaProduk" class="form-control" value="{{ $tokoaj->namaProduk }}" required="required">
				</div>
				<div class="form-group">
					<label for="harga">Harga</label>
					<input type="text" name="harga" class="form-control" value="{{ $tokoaj->harga }}" required="required">
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah</label>
					<input type="number" name="jumlah" class="form-control" value="{{ $tokoaj->jumlah }}" required="required">
				</div>
				<div class="form-group">
					<label for="deskripsi">Deskripsi</label>
					<textarea name="deskripsi" class="form-control" required="required">{{ $tokoaj->deskripsi }}</textarea>
				</div>
				<div class="form-group">
					<label for="foto">Foto</label>
					<input type="file" name="foto" value="Foto" class="form-control" value="{{ $tokoaj->foto}}">
					<img src="{{ url('image')}}/{{ $tokoaj->foto}}" class="img-thumbnail" width="50">
					<input type="hidden" name="hidden_image" value="{{ $tokoaj->foto}}">
				</div>
				<div class="form-group">
					<label for="ongkos">Ongkos Kirim</label>
					<input type="text" name="ongkos" class="form-control" value="{{ $tokoaj->ongkos }}" required="required">
				</div>
				<div class="form-group">
					<input type="submit" name="simpan" value="SAVE DATA" class="btn btn-primary">
				</div>
			</form>
	</div>

@endsection