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
						empty
					</div>
				</div>
			</div>
		</div>
		
    </div>
  </div>
@stop