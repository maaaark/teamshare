@extends('layout')
@section('content')
<div class="page-content"> 
    <div class="content">  
		<div class="page-title">	
			<h3>Dashboard</h3>	
		</div>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple">
					<div class="grid-body">
						Eingeloggt als <strong>{{ Auth::user()->firstname }}</strong>, {{ date('d.m.Y, H:i:s') }} Uhr
					</div>
				</div>
			</div>
		</div>
		
    </div>
  </div>
@stop