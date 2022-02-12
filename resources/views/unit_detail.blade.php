@extends("layout.app")
@section("main")
<style type="text/css">
	table{
		font-size: 12px;
	}

	th{
		background-color: #1f3864;
		color: white;
		width: 10px;
	}
	td{
		background-color: white;
	}
</style>
	<div class="row">
		<div class="col text-center"><h3>Daftar Pegawai</h3></div>
	</div>
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>NIP</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Alamat</th>
				<th>Tgl Lahir</th>
				<th>L/P</th>
				<th>Gol</th>
				<th>Eselon</th>
				<th>Jabatan</th>
				<th>Tempat Tugas</th>
				<th>Agama</th>
				<th>Unit Kerja</th>
				<th>No. Hp</th>
				<th>NPWP</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pegawai as $key)
				<tr>
					<td>{{$key->nip}}</td>
					<td><a href="/pegawai/detail/{{$key->pegawai_id}}">{{$key->nama}}</a></td>
					<td>{{$key->tempat_lahir}}</td>
					<td>{{$key->alamat}}</td>
					<td>{{$key->tgl_lahir}}</td>
					<td>{{$key->jk}}</td>
					<td>{{$key->golongan}}</td>
					<td>{{$key->eselon}}</td>
					<td>{{$key->nm_jabatan}}</td>
					<td>{{$key->tempat_tugas}}</td>
					<td>{{$key->agama}}</td>
					<td>{{$key->nm_unit}}</td>
					<td>{{$key->no_hp}}</td>
					<td>{{$key->npwp}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection