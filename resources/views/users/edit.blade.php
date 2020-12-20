@extends('base')

@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteUserModalLabel">Delete User - {{$user->lname}}, {{$user->fname}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        {!! Form::open(["url" => "/users/$user->id", 'method' => 'delete']) !!}
        <div class="modal-body alert-danger">
            Are you sure you want to delete this user record?
            {!! Form::hidden('user_id', $user->id) !!}
        </div>
        <div class="clearfix alert-danger">
            <button type="button" class="button_ cancelbtn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="button_ deletebtn btn-danger">Delete User</button>
        </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
    
<h1 class="mt-3">Edit User {{$user->lname}}, {{$user->fname}}</h1>

    <div class="row mt-4">
        <div class="col-md-5">
            {!! Form::model($user, ['url'=>"/users/$user->id", 'method'=>'patch']) !!}

            @include('users._form')

            <div class="form-group">
                <button class="button_ btn-primary">
                    <i class="fa fa-check" aria-hidden="true"></i> Update User
                </button>

                <button type="button" class="button_ btn-danger float-right" data-toggle="modal" data-target="#deleteUserModal">
                    <i class="fa fa-trash" aria-hidden="true"></i> Delete User
                </button>
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection