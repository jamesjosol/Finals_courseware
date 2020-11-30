@extends('base')

@section('content')
<h1 class="mt-3">Edit Instructor</h1><br>
<h4>{{$instructor->user->lname}}, {{$instructor->user->fname}}</h4>

    <div class="row mt-4">
        <div class="col-md-5">
            {!! Form::model($instructor, ['url'=>"/instructors/$instructor->id", 'method'=>'patch']) !!}

            @include('instructors._form')

            <div class="form-group">
                <button class="button_ btn-primary float-right">
                    <i class="fa fa-check" aria-hidden="true"></i> Update Instructor
                </button>
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection