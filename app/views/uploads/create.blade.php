@extends('layout')
@section('content')
<div class="page-content"> 
    <div class="content">  
		<div class="page-title">	
			<h3>Datei hochladen</h3>	
		</div>

		@if(Session::has('message'))
			<p class="alert">{{ Session::get('message') }}</p>
		@endif

		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple">
					<div class="grid-body">
						<form action="{{ url('uploads/upload')}}" class="dropzone" id="my-awesome-dropzone">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						</form>
					</div>
				</div>
			</div>
		</div>
		
    </div>
  </div>
@stop