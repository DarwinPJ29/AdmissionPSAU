@extends('layout.layoutAdmin')
@section('page-title', 'Requirements')
@section('content')

    <div class="container">
        <div class="text-end mt-3">
            <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#requirements"><i class="fa-solid fa-plus me-1"></i>Add</div>
        </div>
        <div class="border rounded p-3 shadow mt-3 overflow-x-auto">
            <table class="table table-bordered table-striped " id="table">
                <thead>
                    <tr>
                        <th class="col-4">Requirements</th>
                        <th class="col-1">Doctoral</th>
                        <th class="col-1">Masteral</th>
                        <th class="col-1">Second <br>Courser</th>
                        <th class="col-1">Transferee</th>
                        <th class="col-1">Freshmen</th>
                        <th class="col-2">Type</th>
                        <th class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <div class="text-center"><i class="fa-solid fa-square-check text-warning fs-5"></i></div>
                        </td>
                        <td>
                            <div class="text-center"><i class="fa-solid fa-square-xmark text-danger fs-5"></i></div>
                        </td>
                        <td>
                            <div class="text-center"><i class="fa-solid fa-square-check text-warning fs-5"></i></div>
                        </td>
                        <td>
                            <div class="text-center"><i class="fa-solid fa-square-check text-warning fs-5"></i></div>
                        </td>
                            <td>
                                <div class="text-center"><i class="fa-solid fa-square-check text-warning fs-5"></i></div>
                            </td>


                        <td></td>
                        <td>
                            <div class="dropdown text-center">
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                                </button>
                                <ul class="dropdown-menu">

                                    <li>
                                        <a class="dropdown-item d-flex" data-bs-toggle="modal" data-bs-target="#requirementsEdit">
                                            <i class="fa-solid fa-pen-to-square fs-5 text-success"></i>
                                            <label class="fs-text ms-3 fw-bold curser">Edit</label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex" data-bs-toggle="modal" data-bs-target="#requirementsDelete">
                                            <i class="fa fa-trash fs-5 text-danger"></i>
                                            <label class="fs-text ms-3 fw-bold curser">Delete</label>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        @include('modals.requirements')
                    </tr>
                </tbody>
            </table>
        </div>
        @include('modals.requirements')
    </div>
@endsection
