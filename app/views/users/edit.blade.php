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
						<h1>Edit User</h1>
						{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
							<ul>
								<li>
									{{ Form::label('firstname', 'Firstname:') }}
									{{ Form::text('firstname') }}
								</li>
								<li>
									{{ Form::label('lastname', 'Lastname:') }}
									{{ Form::text('lastname') }}
								</li>
								<li>
									{{ Form::label('password', 'Password:') }}
									{{ Form::text('password') }}
								</li>
								<li>
									{{ Form::label('email', 'Email:') }}
									{{ Form::text('email') }}
								</li>

								<li>
									{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
								</li>
							</ul>
						{{ Form::close() }}

						@if ($errors->any())
							<ul>
								{{ implode('', $errors->all('<li class="error">:message</li>')) }}
							</ul>
						@endif
					</div>
				</div>
			</div>
		</div>
		
    </div>
  </div>
@stop