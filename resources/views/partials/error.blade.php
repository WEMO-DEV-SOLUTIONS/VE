@if(Session::has('success'))
<div class="container-fluid">
    <div class="col-lg-12 alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('success')}} 
        <button type="button" class="close" data-dismiss="alert" aria-label="fermer">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

@elseif(Session::has('danger'))
<div class="container-fluid">
    <div class="col-lg-12 alert alert-danger alert-dismissible fade show" role="alert"">
    {{Session::get('danger')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="fermer">
            <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
@endif

@if(Session::has('info'))
<div class="container-fluid">
    <div class="col-lg-12 alert alert-info alert-dismissible fade show" role="alert">
        {{Session::get('info')}} 
        <button type="button" class="close" data-dismiss="alert" aria-label="fermer">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif



@if($errors->any())
<div class="container">
<div class="col-lg-12 alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="fermer">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
@endif