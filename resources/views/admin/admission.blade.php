@extends('layout.layoutAdmin')
@section('page-title', 'Admission')
@section('content')

    <div class="container-fluid">

        <div class="border rounded p-3 shadow mt-3 ">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th class="col-1">Date Submitted</th>
                        <th class="col-2">Applicant No.</th>
                        <th class="col">Name</th>
                        <th class="col">Email</th>
                        <th class="col">Type</th>
                        <th class="col">Program</th>
                        <th class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->date_submitted }}</td>
                            <td>{{ $user->applicant_no }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->applicant_typeName }}</td>
                            <td><span class="text-muted">1st Choice:</span> <span
                                    class="fw-bold">{{ $user->first_choice }}</span> <br>
                                <span class="text-muted">2nd Choice:</span> <span
                                    class="fw-bold">{{ $user->second_choice }}</span>
                            </td>
                            <td>
                                <div class="dropdown text-center">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex" data-bs-toggle="modal"
                                                data-bs-target="#fillup{{ $user->id }}">
                                                <i class="fa-brands fa-wpforms fs-5 text-warning"></i>
                                                <label class="fs-text ms-3 fw-bold curser">Forms</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex" data-bs-toggle="modal"
                                                data-bs-target="#requirement_file{{ $user->id }}">
                                                <i class="fa fa-folder fs-5 text-warning"></i>
                                                <label class="fs-text ms-3 fw-bold curser">Requirements</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex" data-bs-toggle="modal"
                                                data-bs-target="#requirement_return{{ $user->id }}">
                                                <i class="fa fa-arrow-left fs-5 text-danger"></i>
                                                <label class="fs-text ms-3 fw-bold curser">Return</label>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @include('modals.filledup_form')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
