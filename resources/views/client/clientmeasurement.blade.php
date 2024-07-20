@extends('master')
@section('content')

@foreach ($style as $u )

@endforeach
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <div class="alert alert-fill-primary" role="alert">
            <h3> {{ $u->name}} Style Measurement For {{ $u->name}} ({{$u->phone}})</h3>
        </div>
    </ol>
</nav>
<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <li><a href="{{ route('clientstyle',$u->id) }}"  class="btn btn-success number-right"><i class="fa fa-sign-out"></i><<  Back</a></li>
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

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
<div class="card">
<div class="card-body">

                <h6 class="card-title">Measurement Form  (cm)</h6>
                <form class="forms-sample" action="{{route('saveagbadastyle')}}" method="post">
                    @csrf
                    <input type="hidden" name="userid" value="{{$u->id}}">
                    <input type="hidden" name="style" value="{{$style->name}}">
                    <div class="row mb-3">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Width</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="length" onkeyup="updateMeasurement();" id="c_width" placeholder="Size" required>
                        </div>
                    </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Length</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="breadth" onkeyup="updateMeasurement();" id="c_length" placeholder="Size" required>
                            </div>
                        </div>
                        <button type="button" onclick="update();" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           Preview
                          </button>
                   <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </form>

</div>
</div>

    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Measurement Form (inches)</h6>


                    <div class="row mb-3">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Width</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" onkeyup="updateMeasurement();" id="width2" placeholder="Size" required>
                        </div>
                    </div>

                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Length</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" onkeyup="updateMeasurement();"  id="length2" placeholder="Size" required>
                                </div>
                            </div>

                         </form>

            </div>
        </div>
    </div>
</div>
</div>


<script>

function update(){
var width = 0;
width =  document.getElementById("c_width").value;

document.getElementById("d_width").innerHTML = "width: " + width + " cm";
var length = 0;
length = document.getElementById("c_length").value;

document.getElementById("d_length").innerHTML = "Length: " + length + " cm";
}

function updateMeasurement(){

//updating metres
var width = 0;
width = parseFloat(document.getElementById("c_width").value);
var length = 0;
length = parseFloat(document.getElementById("c_length").value);

//converting to metres
var newWidth =  width / 2.54;
document.getElementById("width2").value= newWidth;
var newLength =  length / 2.54;
document.getElementById("length2").value= newLength;

}
</script>


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
