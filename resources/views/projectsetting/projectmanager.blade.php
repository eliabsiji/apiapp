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
                    <h4 class="mb-sm-0">Project Manager</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps Manager</a></li>
                            <li class="breadcrumb-item active">Project-List</li>
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
                        <h4 class="card-title mb-0">View, Edit & Remove</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                             
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
                                            <th scope="col" project="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th> --}}
                                            <th class="sort" data-sort="email">SN</th>
                                            <th class="sort" data-sort="customer_name">Project</th>
                                            <th class="sort" data-sort="email">Description</th>
                                            <th class="sort" data-sort="customer_name">Deadline</th>
                                            <th class="sort" data-sort="status">Date Created</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                </thead>
                                <tbody>
                                    @php
                                         $count = 1;
                                    @endphp

                                    @foreach ($project as $project)

                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $project->projectname }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td>{{ $project->deadline }}</td>
                                        <td>{{ $project->datecreated }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                            <div class="edit">
                                                <a href="{{{ route('editproject',$project->projectid)}}}" class="btn btn-sm btn-success edit-item-btn"  data-bs-target="#showModal">Edit</a></button>
                                            </div>
                                            <div class="remove">
                                                <button data-ids="1" type="button" class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
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
                                <input type="text" value="">
                                <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" data-id="" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal -->

    </div>
    <!-- container-fluid -->
</div>
{{-- <script>
  $(document).ready(function(){
          $('.remove-item-btn').on('click', function (e){
                      alert("ibasaiuf"):
           });
  });

</script> --}}
@endsection
