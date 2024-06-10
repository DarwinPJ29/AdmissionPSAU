@extends('layout.layoutAdmin')
@section('page-title', 'Interviewee')
@section('content')

    <div class="container">

        <div class="border rounded p-3 shadow mt-5 ">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th class="col-3">Name</th>
                        <th class="col-3">Middle Name</th>
                        <th class="col-3">Last Name</th>
                        <th class="col-2">Date & Time</th>
                        <th class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="dropdown text-center">
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                                </button>
                                <ul class="dropdown-menu">

                                    <li>
                                        <a class="dropdown-item d-flex">
                                            <i class="fa-solid fa-pen-to-square fs-5 text-success"></i>
                                            <label class="fs-text ms-3 fw-bold curser">Edit</label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex">
                                            <i class="fa fa-trash fs-5 text-danger"></i>
                                            <label class="fs-text ms-3 fw-bold curser">Delete</label>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
