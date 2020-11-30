
@if($info = Session::get('info'))

<div class="alert alert-success mt-2">
    {{$info}}
</div>

@endif
