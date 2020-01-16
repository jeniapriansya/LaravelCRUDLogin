@extends('layout/app')
@section('content')

	<div class="container">
			<form class="form form-responsive" action="{{ route('tokoaj.store') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<h2>Menu Add Data</h2>
				<div class="form-group">
					<label for="namaProduk">Nama Produk</label>
					<input type="text" name="namaProduk" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label for="harga">Harga</label>
					<input type="text" name="harga" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah</label>
					<input type="number" name="jumlah" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label for="deskripsi">Deskripsi</label>
					<textarea name="deskripsi" class="form-control" required="required"></textarea>
				</div>
				<div class="form-group">
					<label for="foto">Foto</label>
					<input type="file" name="foto" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label for="ongkos">Ongkos Kirim</label>
					<input type="text" name="ongkos" class="form-control" required="required">
				</div>
				<div class="form-group">
					<input type="submit" name="simpan" value="SAVE DATA" class="btn btn-primary">
				</div>
			</form>
	</div>

@endsection