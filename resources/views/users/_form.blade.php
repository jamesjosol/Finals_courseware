<div class="form-group @error('lname') has-error @enderror">
    {{Form::label('lname', 'Last Name')}}
    {{Form::text('lname', null, ['class'=>"form-control"])}}
</div>

<div class="form-group @error('fname') has-error @enderror">
    {{Form::label('fname', 'First Name')}}
    {{Form::text('fname', null, ['class'=>'form-control'])}}
</div>

<div class="form-group @error('email') has-error @enderror">
    {{Form::label('email')}}
    {{Form::text('email', null, ['class'=>'form-control'])}}
</div>

@if(!isset($user))
<div class="form-group @error('password') has-error @enderror">
    {{Form::label('password')}}
    {{Form::password('password', ['class'=>'form-control'])}}
</div>
@endif