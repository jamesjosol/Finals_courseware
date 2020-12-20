
@if($info = Session::get('info'))

<!--<div class="alert alert-success mt-2">
    {{$info}}
</div>-->

<script>
    $(document).ready(function(){
       $("#success_reg_modal").modal("show");
    });
    setTimeout(function(){
       $("#success_reg_modal").modal("hide")
    }, 2200);
 </script>
 
<div class="modal fade bd-example-modal-sm" id="success_reg_modal" tabindex="-1" role="dialog" aria-labelledby="success_reg_modal" aria-hidden="true">
    <div class="modal-dialog modal-md alert alert-success  text-center">
        {{$info}}
    </div>
  </div>

@endif
