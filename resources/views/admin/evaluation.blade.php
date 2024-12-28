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
                    @foreach ($users as $user)
                        @if ($user->show == 1)
                            <tr>
                                <td>{{ $user->applicant_no }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="dropdown text-center">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex" data-bs-toggle="modal"
                                                    data-bs-target="#evaluation{{ $user->id }}">
                                                    <i class="fa-solid fa-eye fs-5 text-secondary"></i>
                                                    <label class="fs-text ms-3 fw-bold curser">Review</label>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                @include('modals.evaluation_modal')
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
