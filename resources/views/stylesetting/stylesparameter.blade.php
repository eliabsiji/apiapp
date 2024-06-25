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
                    <h4 class="mb-sm-0">Parameter Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Parameter-List</li>
                        </ol>
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
                                            <th class="sort" data-sort="sn">SN</th>
                                            <th class="sort" data-sort="customer_parameter">Style</th>
                                            <th class="sort" data-sort="customer_description">Picture</th>
                                            <th class="sort" data-sort="customer_description">Assign Parameter</th>
                                            <th class="sort" data-sort="status">Date Created</th>
                                            <th class="sort" data-sort="status">Date Updated</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody class="list form-check-all">
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                            </th>

                                        </thead> --}}
                                    </thead>
                                    <tbody>
                                        @php
                                             $count = 1;
                                        @endphp

                                        @foreach ($styleparameter as $style)

                                        <tr>
                                            <td class="sn">{{ $count }}</td>
                                            <td class="customer_parameter">{{ $style->style }}</td>
                                            <td class="customer_parameter"><img src="{{ $style->img }}" alt="" class="rounded avatar-sm"> {{ $style->img }}</td>
                                            <td class="customer_parameter">
                                                <div class="edit">
                                                    <a href="{{route('addparameters',$style->styleid)}}" class="btn btn-sm btn-success edit-item-btn">Add Parameter</a>
                                                </div>
                                            </td>
                                            <td>{{ $style->datecreated }}</td>
                                            <td>{{ $style->dateupdated }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                </div>
                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
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
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->


        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Add Parameter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form action="{{ route('registerstyleparameter')}}" class="tablelist-form" method="Post">
                        @csrf
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Style-Pararmeter</label>
                                <input type="text" id="customername-field" name="parameter" class="form-control" placeholder="Enter Name" required >
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Descrption</label>
                                <textarea id="email-field" class="form-control" name="description" placeholder="The Descripction of the Project"> </textarea>
                            </div>


                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn">Add Parameter</button>
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
                            <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal -->

    </div>
    <!-- container-fluid -->
</div>
@endsection
