@if (Session::has('message'))
<div class="row justify-content-center">
    <div class="col-xs-1-12">
        <div class="alert alert-success alert-dismissible text-center" role="alert">
            <button type="button" class="close btn" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            😉 {{ Session::get('message') }} 😉
        </div>
    </div>
</div>
@endif


