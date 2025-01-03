@extends('layout.layoutAdmin')
@section('page-title', 'Colleges')
@section('content')

    <div class="container">
        <div class=" mt-3 d-flex justify-content-end gap-1">
            <div class="btn shadow btn-warning" data-bs-toggle="modal" data-bs-target="#college"><i
                    class="fa-solid fa-plus me-1 f-text"></i>Add College
            </div>
            {{-- <div class="btn shadow btn-warning" data-bs-toggle="modal" data-bs-target="#program"><i
                    class="fa-solid fa-plus me-1 f-text"></i>Add Courses
            </div> --}}
        </div>
        <div class="border rounded p-3 shadow mt-3 ">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th class="col-8">Name</th>
                        <th class="col-3">Level</th>
                        <th class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colleges as $college)
                        <tr>

                            <td class="text-uppercase">{{ $college->title }} - ({{ $college->acronym }})</td>
                            <td>{{ $college->level }}</td>
                            <td>
                                <div class="dropdown text-center">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex" class="btn btn-sm btn-success"
                                                data-bs-toggle="modal" data-bs-target="#collegeEdit{{ $college->id }}">
                                                <i class="fa-solid fa-pen-to-square fs-5 text-success"></i>
                                                <label class="fs-text ms-3 fw-bold curser">Edit</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex" data-bs-toggle="modal"
                                                data-bs-target="#collegeDelete{{ $college->id }}">
                                                <i class="fa fa-trash fs-5 text-danger"></i>
                                                <label class="fs-text ms-3 fw-bold curser">Delete</label>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            @include('modals.college_modal')
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        @include('modals.college_modal')
    </div>
@endsection
