@extends('master')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                   @foreach ($styles as $style)
                   <h4 class="mb-sm-0">{{$style->style}} Style</h4>
                   @endforeach

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Basic Setting</a></li>
                            <li class="breadcrumb-item active">Style Parameter</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div id="productList">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-xxl-3">
                                    <div class="search-box">
                                        <input type="text" class="form-control search" placeholder="Search Parameters...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div><!--end col-->




                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3">



                            <div class="col-xxl-8 col-sm-8">

                                <form action="{{ route('styleparameter.addstyleparameter')}}" class="tablelist-form" method="Post">
                                    @csrf
                                    <input type="hidden" name="userid" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="styleid" value="{{$style->id}}">

                                   @foreach ($parameters as $parameter)

                                   {{-- <input type="text" name="{{$parameter->id}}" value="{{$parameter->parameter}}" id=""> --}}
                                    <!-- Inline Checkbox -->
                                    <div class="form-check form-switch   form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="parameters[]" value="{{$parameter->id}}">
                                        <label class="form-check-label" for="inlineCheckbox1">{{$parameter->parameter}}</label>
                                    </div>
                                  @endforeach




                                        <div class="hstack gap-2 justify-content-end">

                                            <button type="submit" class="btn btn-success" id="add-btn">Add Parameter</button>
                                            {{-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> --}}
                                        </div>

                                </form>


                            </div><!--end col-->



                                {{-- <div class="col-xxl-1 col-sm-6">
                                    <button type="button" class="btn btn-secondary w-100" onclick="filterData();"><i class="bi bi-funnel align-baseline me-1"></i> Filters</button>
                                </div><!--end col--> --}}
                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">

                            <div class="flex-shrink-0">

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-centered align-middle table-nowrap mb-0">
                                    <thead class="table-active">
                                        <tr>
                                            <th>
                                                {{-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div> --}}
                                            </th>
                                            <th class="sort cursor-pointer" data-sort="products">SN</th>
                                            <th class="sort cursor-pointer" data-sort="products">Style Name</th>
                                            <th class="sort cursor-pointer" data-sort="category">Style Image</th>
                                            <th class="sort cursor-pointer" data-sort="stock">Assigned-Parameters</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div><!--end table-responsive-->
                        </thead>
                        <tbody>
                            @php
                                 $count = 1;
                            @endphp

                            @foreach ($styleparameter as $style)

                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $style->style }}</td>
                                <td>{{ $style->img }}</td>
                                <td>{{ $style->img }}</td>
                                <td>{{ $style->datecreated }}</td>
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

                            <div class="noresult" style="display: none">
                                <div class="text-center py-4">
                                    <div class="avatar-md mx-auto mb-4">
                                        <div class="avatar-title bg-light text-primary rounded-circle fs-4xl">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </div>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ products We did not find any products for you search.</p>
                                </div>
                            </div>
                            <!-- end noresult -->

                            <div class="row mt-3 align-items-center" id="pagination-element">
                                <div class="col-sm">
                                    <div class="text-muted text-center text-sm-start">
                                        Showing <span class="fw-semibold"></span> of <span class="fw-semibold"></span> Results
                                    </div>
                                </div>

                                <div class="col-sm-auto mt-3 mt-sm-0">
                                    <div class="pagination-wrap hstack gap-2 justify-content-center">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            <i class="mdi mdi-chevron-left align-middle"></i>
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            <i class="mdi mdi-chevron-right align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end pagination-element -->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div>
    <!-- container-fluid -->
</div>

@endsection
