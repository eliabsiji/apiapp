@extends('master')
@section('content')


<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <div class="alert alert-fill-primary" role="alert">
            <h3> </h3>
        </div>
    </ol>
</nav>
<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <li><a href=""  class="btn btn-success number-right"><i class="fa fa-sign-out"></i><<  Back</a></li>
</ul>
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congrats! </strong>{{ \Session::get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
</div>
@endif
@if (\Session::has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>OOPS! </strong>{{ \Session::get('danger') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
</div>
@endif
@foreach ($client as $cl )
    <h1>{{$cl->id}}</hi>
@endforeach
<h4>measurement</h4>
<form action="" method="POST">
@foreach ($no_fields as $nofield )
<input type="number" name="param_{{$nofield->parameter}}" id="param_{{$nofield->parameter}}" placeholder="Input value for {{$nofield->parameter}}">
@endforeach
<button>Submit</button>
</form>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">

  <div class="modal-content" >
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Measurement Preview</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
    </div>
    <div class="modal-body">



            <div class="row mb-3">
                <label id="d_width" for="exampleInputUsername2"style="color: green" class="col-sm-8 col-form-label">width : </label>
            </div>

            <div class="row mb-3">
                <label id="d_length" for="exampleInputUsername2" style="color: green" class="col-sm-8 col-form-label">Length : </label>
            </div>


    </form>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

    </div>
  </div>
</div>
</div>

@endsection
