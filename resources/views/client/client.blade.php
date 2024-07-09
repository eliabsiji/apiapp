@extends('master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
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

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    @foreach($clients as $client)
                    <h4 class="mb-sm-0">{{$clients->client}}Client Management</h4>
                     @endforeach


                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Client-List</li>
                        </ol>
                        <div class="page-title-right">
                            <a href="{{route('dashboard')}}" class="btn btn-sm btn-success edit-item-btn"><< Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add, Edit & Remove</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>

                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    {{-- <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th> --}}
                                            <th class="sort" data-sort="email">SN</th>
                                            <th class="sort" data-sort="customer_name">Name</th>
                                            <th class="sort" data-sort="phone">Phone</th>
                                            <th class="sort" data-sort="date">Gender</th>
                                            <th class="sort" data-sort="date">Address</th>
                                            <th class="sort" data-sort="email">Styles</th>
                                            <th class="sort" data-sort="status">Date Registerd</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                     $count = 1;
                                                @endphp

                                                @foreach ($clients as $client)

                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $client->fullname }}</td>
                                                    <td>{{ $client->phonenumber }}</td>
                                                    <td>{{ $client->gender }}</td>
                                                    <td>{{ $client->address }}</td>
                                                    <td><a href="{{ route('clientstyle',$client->clientid)}}" class="btn btn-success">Select Style</a></td>
                                                    <td>{{ $client->datecreated }}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="{{ route ('editclient',$client->clientid) }}" class="btn btn-sm btn-success edit-item-btn">Edit</a></button>
                                                        </div>
                                                        <div class="remove">
                                                            <a href="{{ route('deleteclient',$client->clientid)}}" class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</a></button>
                                                        </div>
                                                      </td>
                                                    </tr>
                                               </tr>
                                               @php
                                                     $count++;
                                                @endphp

                                                @endforeach
                                            </tbody>
                                          </table>
                                        </div>

                                                </div>
                                            </td>
                                        </tr>

                            </div>


                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <!-- end row -->

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-`                                                        dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form action="{{ route('registerclient')}}" class="tablelist-form" method="Post">
                        @csrf
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Full Name</label>
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter Name" required >
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required >
                            </div>

                            <div class="mb-3">
                                <label for="phone-field" class="form-label">Phone</label>
                                <input type="number"  id="phonenumber"  name="phonenumber" class="form-control" placeholder="Enter Phone no." required >
                            </div>

                            <div class="mb-3">
                                <label for="date-field" class="form-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address" required >
                            </div>

                            <div>
                                <label for="status-field" class="form-label">Gender</label>
                                <select class="form-control" data-trigger name="gender" id="gender" required>
                                    <option>Please Select </option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn" onclick="form_submit()">Add Client</button>
                                {{-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <i class="bi bi-trash3 display-5 text-danger"></i>
                            <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                                <h4>Are you Sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger " id="delete">Yes, Delete It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal -->

    </div>
    <!-- container-fluid -->
</div>
<script type="text/javascript">
    function form_submit() {
        var fn = document.getElementById("fullname").value;
        var em = document.getElementById("email").value;
        var ph = document.getElementById("phonenumber").value;
        var gr = document.getElementById("gender").value;
        var ad = document.getElementById("address").value;

        if (fn == "") {
            alert("Enter Client's full name");
            return false;
            }


        if (em == "") {
            alert("Enter Client's email");
            return false;
            }

        if (ph == "") {
        alert("Enter Client's phonenumber");
        return false;
        }

        if (gr == "") {
        alert("Enter Client's gender");
        return false;
        }

        if (ad == "") {
        alert("Enter Client's address");
        return false;
        }
        if (!(ph.length > 10) || !(ph.length <= 12)) {

            alert("phone number must be 11 digits");
            return false;
        }

          document.getElementById("save_form").submit();
     }
    </script>
@endsection
