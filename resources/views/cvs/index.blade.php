@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des cvs</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>id</th>
						<th>lienVideo</th>
						<th>user_id</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cvs as $cv)
						<tr>
							<td>{!! $cv->id !!}</td>
							<td>{!! $cv->lienVideo !!}</td>
							<td class="text-primary"><strong>{!! $cv->user_id !!}</strong></td>
							
						</tr>
					@endforeach
	  			</tbody>
			</table>
		</div>
		
	</div>
@stop