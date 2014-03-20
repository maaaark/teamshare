{{ Form::open(array('url'=>'users/create', 'class'=>'')) }}
    <h2 class="form-signup-heading">Please Register</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 
    {{ Form::text('firstname', null, array('class'=>'input-large', 'placeholder'=>'First Name')) }}<br/>
    {{ Form::text('lastname', null, array('class'=>'input-large', 'placeholder'=>'Last Name')) }}<br/>
    {{ Form::text('email', null, array('class'=>'input-large', 'placeholder'=>'Email Address')) }}<br/>
    {{ Form::password('password', array('class'=>'input-large', 'placeholder'=>'Password')) }}<br/>
    {{ Form::password('password_confirmation', array('class'=>'input-large', 'placeholder'=>'Confirm Password')) }}<br/>
	<br/>
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}