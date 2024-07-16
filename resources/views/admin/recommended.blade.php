@extends('layout.layoutAdmin')
@section('page-title', 'Recommended')
@section('content')

    <div class="container">
        <div class="container mt-4">

            <h1>Recommend Course for : {{ $name }}</h1>

            <form id="coursesForm" action="{{ route('recommended', $id) }}" method="post">
                @csrf
                <div class="modal-body overflow-y-auto" style="max-height: 70vh">
                    <div class="container">
                        <hr>
                        <div class="choice mb-3">
                            <label class="mb-2 fw-bold">Courses</label>
                            <div class="mt-2 d-flex justify-content-evenly text-uppercase">
                                @foreach ($courses as $item)
                                    <div class="">
                                        <div class="d-flex border-bottom border-dark">
                                            <input type="checkbox" class="me-2 course-checkbox" name="courses[]"
                                                value="{{ $item->id }}">
                                            <label>{{ $item->title }}</label>
                                        </div>
                                        <div class="text-center">{{ $item->acronym }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('evaluation') }}" class="btn btn-danger shadow">Cancel</a>
                        <button type="submit" class="btn btn-warning shadow">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('coursesForm').addEventListener('submit', function(event) {
            let checkboxes = document.querySelectorAll('.course-checkbox');
            let isChecked = false;

            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (!isChecked) {
                checkboxes.forEach(function(checkbox) {
                    checkbox.setAttribute('required', true);
                });
                event.preventDefault();
            } else {
                checkboxes.forEach(function(checkbox) {
                    checkbox.removeAttribute('required');
                });
            }
        });
    </script>

@endsection
