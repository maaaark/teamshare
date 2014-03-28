@extends('layout')
@section('content')
<div class="page-content"> 
    <div class="content">  
		<div class="page-title">	
			<h3>Dashboard</h3>	
		</div>

		@if(Session::has('message'))
			<p class="alert">{{ Session::get('message') }}</p>
		@endif

		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple">
					<div class="grid-body">
						Eingeloggt als <strong>{{ Auth::user()->firstname }}</strong>, {{ date('d.m.Y, H:i:s') }} Uhr
					</div>
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple">
					<div class="grid-title">Nutzer</div>
					<div class="grid-body">
						<table class="table table-bordered no-more-tables">
							<thead>
								<tr>
									<th class="text-left">Vorname</th>
									<th class="text-left">Nachname</th>
									<th class="text-left">E-Mail</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
									<tr>
										<td class="text-left">{{ $user->firstname }}</td>
										<td class="text-left">{{ $user->lastname }}</td>
										<td class="text-left">{{ $user->email }}</td>
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