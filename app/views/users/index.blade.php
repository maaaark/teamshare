@extends('layout')
@section('content')
<div class="page-content"> 
    <div class="content">  
		<div class="page-title">	
			<h3>User</h3>	
		</div>

		@if(Session::has('message'))
			<p class="alert">{{ Session::get('message') }}</p>
		@endif
		
		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple">
					<div class="grid-body">
						<table class="table table-bordered no-more-tables">
							<thead>
								<tr>
									<th class="text-left">Vorname</th>
									<th class="text-left">Nachname</th>
									<th class="text-left">E-Mail</th>
									<?php if( Authority::can('delete', 'User') ) { ?>
									<th class="text-left">Bearbeiten</th>
									<?php }	?>
									<?php if( Authority::can('delete', 'User') ) { ?>
									<th class="text-left">Löschen</th>
									<?php }	?>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
									<tr>
										<td class="text-left">{{ $user->firstname }}</td>
										<td class="text-left">{{ $user->lastname }}</td>
										<td class="text-left">{{ $user->email }}</td>
										<?php if( Authority::can('delete', 'User') ) { ?>
										<td class="text-left">{{ HTML::linkRoute('users.edit', 'Bearbeiten', ['id' => $user->id], ['class' => 'btn btn-default']) }}</td>
										<?php }	?>
										<?php if( Authority::can('delete', 'User') ) { ?>
										<td class="text-left">
											{{ Form::open(array('method' => 'DELETE', 'route' =>
											 array('users.destroy', $user->id))) }}
											{{ Form::submit('Löschen', array('class' => 'btn btn-danger')) }}
											{{ Form::close() }}
										<?php }	?>
										</td>
									</tr>
								@endforeach
							</tbody>
						 </table>
					</div>
				</div>
			</div>
		</div>
		
    </div>
  </div>
@stop