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
		<div class="col text-center"><h3>Daftar Unit</h3></div>
	</div>
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Unit</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($unit as $key)
				<tr>
					<td><a href="/unit/detail/{{$key->unit_id}}">{{$key->nm_unit}}</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection