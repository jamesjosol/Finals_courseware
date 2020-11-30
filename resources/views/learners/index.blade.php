@extends('base')

@section('content')

@include('info_msg')

<div class="float-right mt-3">
    <a href="{{url('learners/create')}}" class="button_ btn-primary">
        <i class="fa fa-user-plus" aria-hidden="true"></i> Add New Learner
    </a>
</div>

<h1 class="mt-3">Learners</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="theadstyle">
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($learners as $ln)

        <tr>
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->status}}</td>
            <td class="text-center" style="font-size: 1.4em;">
                <a href="{{url('/learners/edit', ['id'=> $ln])}}" ><i class="fa fa-edit"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
