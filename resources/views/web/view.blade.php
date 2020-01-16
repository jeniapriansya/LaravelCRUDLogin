@extends('layouts/app')
@section('content')

	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 item-photo"><br>
					<img style="width: 290px; height: 350px;" src="{{ url('image') }}/{{ $tokoaj->foto }}">
				</div>
				<div class="col-sm-8" style="border:0px; solid gray"><br>

				<h2>Halaman Detail Produk</h2><br>
					<table class="table table-responsive">
						<tr>
							<td>Nama Produk</td>
							<td><strong>{{ $tokoaj->namaProduk  }}</strong></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td>{{ number_format($tokoaj->harga)  }}</td>
						</tr>
						<tr>
							<td>Jumlah</td>
							<td>{{ $tokoaj->jumlah  }}</td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>{{ $tokoaj->deskripsi  }}</td>
						</tr>
						<tr>
							<td>Ongkos Kirim</td>
							<td>{{ number_format($tokoaj->ongkos)  }}</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<button class="btn btn-info">Add To Chart</button>
								<a href="{{ route('tokoaj.index') }}"><button class="btn btn-primary">Back</button></a>
							</td>
						</tr>
					<table>
				</div>
			</div>
		</div>
	</div>

@endsection