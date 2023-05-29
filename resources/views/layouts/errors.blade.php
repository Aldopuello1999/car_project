@if ($errors->count() > 0))
<div class="row justify-content-center">
    <div class="col-xs-1-12">
    @foreach($errors->all() as $message)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> {{ $message }} 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endforeach
    </div>
</div>
@endif
