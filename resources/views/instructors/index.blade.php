@extends('base')

@section('content')

@include('info_msg')

<div class="float-right mt-3">
    <a href="{{url('instructors/create')}}" class="button_ btn-primary">
        <i class="fa fa-user-plus" aria-hidden="true"></i> Add New Instructor
    </a>
</div>

<h1 class="mt-3">Instructors</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="theadstyle">
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Expertise</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($instructors as $i)

        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->user->lname}}</td>
            <td>{{$i->user->fname}}</td>
            <td>{{$i->aoe}}</td>
            <td class="text-center" style="font-size: 1.4em;">
                <a href="{{url('/instructors/edit', ['id'=> $i])}}" ><i class="fa fa-edit"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
