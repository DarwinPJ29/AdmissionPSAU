@extends('layout.layoutAdmin')
@section('page-title', 'Schedule')
@section('content')

    <div class="container">

        <div class="border rounded p-3 shadow mt-3 ">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th class="col">Email</th>
                        <th class="col">Prefix</th>
                        <th class="col">First Name</th>
                        <th class="col">Middle Name</th>
                        <th class="col">Last Name</th>
                        <th class="col">Suffix</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->prefix }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->middle_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->suffix }}</td>
                            <td>
                                <button class="btn btn-sm btn-secondary d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#schedule{{ $user->id }}">
                                    <i class="fa-solid fa-calendar fs-5"></i>
                                    <span class="ms-2 fw-bold">Schedule</span>
                                </button>

                            </td>
                        </tr>
                        <div class="modal fade" id="schedule{{ $user->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header main-bg">
                                        <h1 class="modal-title fs-6 " id="staticBackdropLabel">Exam Schedule for
                                            {{ $user->name }} </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body border shadow">
                                        <form action="{{ route('sched', $user->id) }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="exam_date">Exam Date</label>
                                                    <input type="date" name="exam_date" id="exam_date"
                                                        class="form-control shadow" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exam_time">Exam Time</label>
                                                    <input type="time" name="exam_time" id="exam_time"
                                                        class="form-control shadow" required>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="room">Location</label>
                                                    <input type="text" name="room" id="room"
                                                        class="form-control shadow" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-warning">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
