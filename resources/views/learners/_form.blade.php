@if(!isset($learner))
<div class="form-group @error('user_id') has-error @enderror">
    {{Form::label('user_id', 'Select User')}}
    {{Form::select('user_id', \App\User::list(), null, ['class'=>'form-control', 'placeholder'=>'Select User'])}}
</div>
@endif

<div class="form-group @error('level') has-error @enderror">
    {{Form::label('level', 'Level')}}
    {{Form::select('level', [
        'novice' => 'Novice',
        'intermediate' => 'Intermediate',
        'advanced' => 'Advanced',
    ], null, ['class'=>'form-control', 'placeholder'=>'Select Level'])}}
</div>

<div class="form-group @error('status') has-error @enderror">
    {{Form::label('status', 'Status')}}
    {{Form::select('status', [
        'active' => 'Active',
        'inactive' => 'Inactive',
        'suspended' => 'Suspended',
    ], null, ['class'=>'form-control', 'placeholder'=>'Select Status'])}}
</div>