@extends('layout')
@section('content')
<div class="page-content"> 
    <div class="content">  
		<div class="page-title">	
			<h3>Profil von {{ $user->firstname }}</h3>	
		</div>

		@if(Session::has('message'))
			<p class="alert">{{ Session::get('message') }}</p>
		@endif

		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple">
					<div class="grid-body">
						{{ $user->first_name }}, {{ $user->last_name }}<br/>
						{{ $user->email }}<br/>
						<br/>
						{{ $groups }}
						@if( Sentry::getUser()->hasAnyAccess(['users']) )
						{
							<br/>has Access
						}
						@endif
					</div>
				</div>
			</div>
		</div>
		
    </div>
  </div>
@stop