@extends('base')

@section('content')
<h1 class="mt-3">Courses</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="theadstyle">
        <th>Name</th>
        <th>Description</th>
        <th>Start</th>
        <th>End</th>
        <th>Instructor</th>
    </thead>
    <tbody>
        @foreach($courses as $c)

        <tr>
            <td>{{$c->name}}</td>
            <td>{{$c->description}}</td>
            <td>{{$c->start}}</td>
            <td>{{$c->end}}</td>
            <td>{{$c->instructor->aoe}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
