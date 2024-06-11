@extends('layout.layoutAdmin')
@section('page-title', 'Programs')
@section('content')

    <div class="container">
        <div class="text-end mt-3">
            <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#program"><i
                    class="fa-solid fa-plus me-1"></i>Add</div>
        </div>
        <div class="border rounded p-3 shadow mt-3 ">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th class="col-3">Name</th>
                        <th class="col-4">Acronym</th>
                        <th class="col-4">Description</th>
                        <th class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->acronym }}</td>
                            <td>{{ $course->description }}</td>
                            <td>
                                <div class="dropdown text-center">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex" class="btn btn-sm btn-success"
                                                data-bs-toggle="modal" data-bs-target="#programEdit{{ $course->id }}">
                                                <i class="fa-solid fa-pen-to-square fs-5 text-success"></i>
                                                <label class="fs-text ms-3 fw-bold curser">Edit</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex" data-bs-toggle="modal" data-bs-target="#programDelete{{ $course->id }}">
                                                <i class="fa fa-trash fs-5 text-danger"></i>
                                                <label class="fs-text ms-3 fw-bold curser">Delete</label>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            @include('modals.courses_modal');
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        @include('modals.courses_modal')
    </div>
@endsection
