@extends('base')

@section('content')

@include('info_msg')

<div class="float-right mt-3">
    <a href="{{url('users/create')}}" class="button_ btn-primary">
        <i class="fa fa-user-plus" aria-hidden="true"></i> Add New User
    </a>
</div>
<h1 class="mt-3">List of Users</h1>
<table class="table table-bordered table-striped table-sm">
    <thead class="theadstyle">
        <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->email}}</td>
            <td class="text-center" style="font-size: 1.4em;">
                <a href="{{url('/users/edit', ['id'=> $u])}}" ><i class="fa fa-edit"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
