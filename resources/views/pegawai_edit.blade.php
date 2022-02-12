@extends("layout.app")
@section("main")
<div class="container">
	<div class="card">
		<div class="card-body">
			<?php foreach ($pegawai as $key): ?>
				<form method="post" action="/pegawai/update/{{$key->profile_id}}">
					@csrf
					<div class="mb-3">
						<label class="form-label">NIP</label>
						<input type="text" class="form-control" name="nip" value="{{$key->nip}}">
					</div>
					<div class="mb-3">
						<label class="form-label">NPWP</label>
						<input type="text" class="form-control" name="npwp" value="{{$key->npwp}}">
					</div>
					<div class="mb-3">
						<label class="form-label">Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$key->nama}}">
					</div>
					<div class="mb-3">
						<label class="form-label">Tempat Lahir</label>
						<input type="text" class="form-control" name="tempat_lahir" value="{{$key->tempat_lahir}}">
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<textarea class="form-control" name="alamat">{{$key->alamat}}</textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Tanggal Lahir</label>
						<input type="date" class="form-control" name="tgl_lahir" value="{{$key->tgl_lahir}}">
					</div>
					<div class="mb-3">
						<label class="form-label">Jenis Kelamin</label>
						<div class="form-check">
							<input type="radio" class="form-check-input" name="jk" value="L" <?php if ($key->jk == 'L') {echo "checked";} ?>>
							<label class="form-check-label">
								Laki-Laki
							</label>
						</div>
						<div class="form-check">
							<input type="radio" class="form-check-input" name="jk" value="P" <?php if ($key->jk == 'P') {echo "checked";} ?>>
							<label class="form-check-label">
								Perempuan
							</label>
						</div>
					</div>
					<div class="mb-3">
						<label class="form-label">Agama</label>
						<input type="text" class="form-control" name="agama" value="{{$key->nip}}">
					</div>
					<div class="mb-3">
						<label class="form-label">No Hp</label>
						<input type="number" class="form-control" name="no_hp" value="{{$key->nip}}">
					</div>
					<div class="mb-3">
						<label class="form-label">Unit</label>
						<select class="form-control" name="unit">
							@foreach($unit as $key)
								<option value="{{$key->unit_id}}">{{$key->nm_unit}}</option>
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Jabatan</label>
						<select class="form-control" name="jabatan">
							@foreach($jabatan as $key)
								<option value="{{$key->jabatan_id}}">{{$key->nm_jabatan}}</option>
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Golongan</label>
						<select class="form-control" name="golongan">
							@foreach($golongan as $key)
								<option value="{{$key->golongan_id}}">{{$key->golongan}}</option>
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Eselon</label>
						<select class="form-control" name="eselon">
							@foreach($eselon as $key)
								<option value="{{$key->eselon_id}}">{{$key->eselon}}</option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			<?php endforeach ?>
		</div>
	</div>
</div>
@endsection