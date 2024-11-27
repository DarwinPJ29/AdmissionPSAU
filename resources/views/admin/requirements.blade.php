@extends('layout.layoutAdmin')
@section('page-title', 'Requirements')
@section('content')

    <div class="container">
        <div class="text-end mt-3">
            <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#requirements"><i
                    class="fa-solid fa-plus me-1"></i>Add</div>
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
                        <th class="col-2">Status</th>
                        <th class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requirements as $requirement)
                        <td>{{ $requirement->title }}</td>
                        <td>
                            <div class="text-center"><i
                                    class="fa-solid fa-square-{{ $requirement->doctoral == 1 ? 'check text-warning' : 'xmark text-danger' }} fs-5"></i>
                            </div>
                        </td>
                        <td>
                            <div class="text-center"><i
                                    class="fa-solid fa-square-{{ $requirement->masteral == 1 ? 'check text-warning' : 'xmark text-danger' }} fs-5"></i>
                            </div>
                        </td>
                        <td>
                            <div class="text-center"><i
                                    class="fa-solid fa-square-{{ $requirement->second_courser == 1 ? 'check text-warning' : 'xmark text-danger' }} fs-5"></i>
                            </div>
                        </td>
                        <td>
                            <div class="text-center"><i
                                    class="fa-solid fa-square-{{ $requirement->transferee == 1 ? 'check text-warning' : 'xmark text-danger' }} fs-5"></i>
                            </div>
                        </td>
                        <td>
                            <div class="text-center"><i
                                    class="fa-solid fa-square-{{ $requirement->freshmen == 1 ? 'check text-warning' : 'xmark text-danger' }} fs-5"></i>
                            </div>
                        </td>
                        <td>{{ $requirement->required == 1 ? 'Required' : 'Not Required' }}</td>
                        <td>{{ $requirement->enable == 1 ? 'Enabled' : 'Disabled' }}</td>
                        <td>
                            <div class="dropdown text-center">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item d-flex" data-bs-toggle="modal"
                                            data-bs-target="#requirementsEdit{{ $requirement->id }}">
                                            <i class="fa-solid fa-pen-to-square fs-5 text-success"></i>
                                            <label class="fs-text ms-3 fw-bold curser">Edit</label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex" data-bs-toggle="modal"
                                            data-bs-target="#requirementsDelete{{ $requirement->id }}">
                                            <i class="fa fa-trash fs-5 text-danger"></i>
                                            <label class="fs-text ms-3 fw-bold curser">Delete</label>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        @include('modals.requirements')
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('modals.requirements')
    </div>
@endsection
