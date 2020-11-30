@extends('base')

@section('content')
<h1 class="mt-3">Edit User {{$user->lname}}, {{$user->fname}}</h1>

    <div class="row mt-4">
        <div class="col-md-5">
            {!! Form::model($user, ['url'=>"/users/$user->id", 'method'=>'patch']) !!}

            @include('users._form')

            <div class="form-group">
                <button class="button_ btn-primary float-right">
                    <i class="fa fa-check" aria-hidden="true"></i> Update User
                </button>
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection