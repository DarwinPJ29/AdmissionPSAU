@extends('layout.layoutAdmin')
@section('page-title', 'Evaluation')
@section('content')

    <div class="container">
        <div class="border rounded p-3 shadow mt-3 ">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th class="col-3">Applicant No.</th>
                        <th class="col-4">Name</th>
                        <th class="col-4">Email</th>
                        <th class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="dropdown text-center">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex" data-bs-toggle="modal" data-bs-target="#evaluation">
                                                <i class="fa-solid fa-eye fs-5 text-secondary"></i>
                                                <label class="fs-text ms-3 fw-bold curser">Review</label>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                            @include('modals.evaluation_modal')
                        </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
