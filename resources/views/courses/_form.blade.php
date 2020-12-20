<div class="form-group @error('name') has-error @enderror">
    {{Form::label('name', 'Course Name')}}
    {{Form::text('name', null, ['class'=>'form-control'])}}
</div>

<div class="form-group @error('description') has-error @enderror">
    {{Form::label('description', 'Description')}}
    {{Form::text('description', null, ['class'=>'form-control'])}}
</div>

<div class="form-group @error('start') has-error @enderror">
    {{Form::label('start', 'Start Date')}}
    {{Form::date('start', null, ['class'=>'form-control'])}}
</div>

<div class="form-group @error('end') has-error @enderror">
    {{Form::label('end', 'End Date')}}
    {{Form::date('end', null, ['class'=>'form-control'])}}
</div>

<div class="form-group @error('tags') has-error @enderror">
    {{Form::label('tags', 'Tags')}}
    {{Form::text('tags', null, ['class'=>'form-control'])}}
</div>

<div class="form-group @error('instructor_id') has-error @enderror">
    {{Form::label('instructor_id', 'Select instructor')}}
    {{Form::select('instructor_id', \App\Instructor::list(), null, ['class'=>'form-control', 'placeholder'=>'Select Instructor'])}}
</div>

