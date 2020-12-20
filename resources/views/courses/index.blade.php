@extends('base')

@section('content')

@include('info_msg')

<div class="float-right mt-3">
    <a href="{{url('courses/create')}}" class="button_ btn-primary">
        <i class="fa fa-user-plus" aria-hidden="true"></i> Add New Courses
    </a>
</div>

<h1 class="mt-3">Courses</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="theadstyle">
        <th>Name</th>
        <th>Description</th>
        <th>Start</th>
        <th>End</th>
        <th>Instructor</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($courses as $c)

        <tr>
            <td>{{$c->name}}</td>
            <td>{{$c->description}}</td>
            <td>{{$c->start}}</td>
            <td>{{$c->end}}</td>
            <td>{{$c->instructor->user->lname}}, {{$c->instructor->user->fname}}</td>
            <td class="text-center" style="font-size: 1.4em;">
                <a href="{{url('/courses/edit', ['id'=> $c])}}" ><i class="fa fa-edit"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
