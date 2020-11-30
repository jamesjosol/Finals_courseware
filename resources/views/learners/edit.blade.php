@extends('base')

@section('content')
<h1 class="mt-3">Edit Learner</h1><br>
<h4>{{$learner->user->lname}}, {{$learner->user->fname}}</h4>

    <div class="row mt-4">
        <div class="col-md-5">
            {!! Form::model($learner, ['url'=>"/learners/$learner->id", 'method'=>'patch']) !!}

            @include('learners._form')

            <div class="form-group">
                <button class="button_ btn-primary float-right">
                    <i class="fa fa-check" aria-hidden="true"></i> Update Learner
                </button>
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection