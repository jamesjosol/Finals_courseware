@extends('base')

@section('content')
    <h1 class="mt-3">Create New Learner</h1>

    <div class="row mt-4">
        <div class="col-md-5">
            {!! Form::open(['url'=>'/learners', 'method'=>'post']) !!}

            @include('learners._form')

            <div class="form-group">
                <button class="button_ btn-primary float-right">
                    <i class="fa fa-plus" aria-hidden="true"></i> Create Learner
                </button>
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection