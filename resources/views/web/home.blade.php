@extends('layouts/app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<!-- menu -->
				<h2>Menu</h2>
				<a href="{{ route('tokoaj.create') }}"><button class="btn btn-info">Add Data</button></a>
			</div>
			<div class="col-md-12">
				<!-- content -->
				<h2>Content</h2>
				@if($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
				@endif
				<table class="table table-responsive">
					<thead>
						<th>#</th>
						<th>Nama Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Deskripsi</th>
						<th>Foto</th>
						<th>Ongkos Kirim</th>
						<th>Created</th>
						<th>Updated</th>
						<th>Action</th>
					</thead>
					<tbody>
						@foreach($tokoaj as $toko)
						<tr>
							<td>#</td>
							<td>{{ $toko->namaProduk }}</td>
							<td>{{ $toko->harga }}</td>
							<td>{{ $toko->jumlah }}</td>
							<td>{{ $toko->deskripsi }}</td>
							<td><img style="width: 60px; height: 70px;" src="{{ url('image') }}/{{ $toko->foto }}"></td>
							<td>{{ $toko->ongkos }}</td>
							<td>{{ $toko->created_at->diffForHumans() }}</td>
							<td>{{ $toko->updated_at->diffForHumans() }}</td>
							<td>
								<a href="{{ route('tokoaj.show', $toko->id)}}"><button class="btn btn-success">View</button></a>
								<a href="{{ route('tokoaj.edit', $toko->id)}}"><button class="btn btn-primary">Edit</button></a>
								<form method="post" action="{{ route('tokoaj.destroy', $toko->id) }}">
									<input type="hidden" name="_method" value="delete">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="submit" name="delete" value="Delete" class="btn btn-danger">
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			
		</div>
	</div>

@endsection