<!DOCTYPE html>
<html>
<head>
	<title>Export Excel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		
		<a href="/buku0124/export_excel" class="btn btn-warning my-3" target="_blank">Export ke Excel</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Judul Buku</th>
					<th>Tahun Terbit</th>
					<th>Jenis</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($buku as $buku)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$buku->id}}</td>
					<td>{{$buku->judul}}</td>
					<td>{{$buku->tahun_terbit}}</td>
					<td>{{$buku->jenis}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">&#169 <script>document.write(new Date().getFullYear())</script> 1461900124 Hanif</span>
  </div>
</footer>
</body>
</html>