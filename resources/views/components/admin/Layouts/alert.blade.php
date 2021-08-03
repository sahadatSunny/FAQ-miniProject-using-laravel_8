
@if(session()->has('success'))

<script>

window.onload = function(){
    $('#alertModal').modal('show');
}

</script>

<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="alert-success modal-dialog ms-auto" role="document">
      <div class="modal-content bg-success">
            <div class="modal-header p-1">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><b>&times;</b></span>
                </button>
            </div>
            <div class="modal-body text-center">
                 <h2 class="text-white">{{ session()->get('success') }}</h2>
            </div>
      </div>
    </div>
  </div>











{{-- <div class="ms-10 modal" style="z-index:11">
    <div class="row">
    <div class="col-sm-11 text-dark ms-20"> <h3>{{ session()->get('success') }}</h3></div>
</div> --}}
@endif








