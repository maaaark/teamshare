@extends('layout')
@section('content')
<div class="page-content"> 
    <div class="content">  
		<div class="page-title">	
			<h3>Hochgeladene Dateien</h3>	
		</div>

		@if(Session::has('message'))
			<p class="alert">{{ Session::get('message') }}</p>
		@endif

		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple">
					<div class="grid-body">
						<a href="/uploads/create" class="btn btn-info btn-cons">Neue Datei hochladen</a>
						<table class="table table-bordered no-more-tables">
							<thead>
								<tr>
									<th class="text-left">Dateiname</th>
									<th class="text-left">Typ</th>
									<th class="text-left">Hochgeladen</th>
									<th class="text-left">Löschen</th>
								</tr>
							</thead>
							<tbody>
								@foreach($uploads as $upload)
									<tr>
										<td class="text-left">{{ link_to('uploaded/'.$upload->filename, $upload->name ) }}</td>
										<td class="text-left">{{ $upload->extension }}</td>
										<td class="text-left">{{ $upload->created_at }}</td>
										<td class="text-left">
											{{ Form::open(array('method' => 'DELETE', 'route' => array('uploads.destroy', $upload->id))) }}
											{{ Form::submit('Löschen', array('class' => 'btn btn-danger')) }}
											{{ Form::close() }}
										</td>
									</tr>
								@endforeach
							</tbody>
						 </table>
						 <a href="/uploads/create" class="btn btn-info btn-cons">Neue Datei hochladen</a>
					</div>
				</div>
			</div>
		</div>
		
    </div>
  </div>
@stop