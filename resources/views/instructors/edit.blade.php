@extends('base')

@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteInstructorModal" tabindex="-1" role="dialog" aria-labelledby="deleteInstructorModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="deleteInstructorModalLabel">Delete Instructor - {{$instructor->user->lname}}, {{$instructor->user->fname}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    {!! Form::open(["url" => "/instructors/$instructor->id", 'method' => 'delete']) !!}
    <div class="modal-body alert-danger">
        Are you sure you want to delete this instructor record?
        {!! Form::hidden('instructor_id', $instructor->id) !!}
    </div>
    <div class="clearfix alert-danger">
        <button type="button" class="button_ cancelbtn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="button_ deletebtn btn-danger">Delete Instructor</button>
    </div>
    </div>
    {!! Form::close() !!}
</div>
</div>

<h1 class="mt-3">Edit Instructor</h1><br>
<h4>{{$instructor->user->lname}}, {{$instructor->user->fname}}</h4>

    <div class="row mt-4">
        <div class="col-md-5">
            {!! Form::model($instructor, ['url'=>"/instructors/$instructor->id", 'method'=>'patch']) !!}

            @include('instructors._form')

            <div class="form-group">
                <button class="button_ btn-primary">
                    <i class="fa fa-check" aria-hidden="true"></i> Update Instructor
                </button>

                <button type="button" class="button_ btn-danger float-right" data-toggle="modal" data-target="#deleteInstructorModal">
                    <i class="fa fa-trash" aria-hidden="true"></i> Delete Instructor
                </button>
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection