@extends('layout.layoutAdmin')
@section('page-title', 'Recommended')
@section('content')

    <div class="container p-4">
        <div class="container mt-4 card shadow bg-secondary-subtles p-3">

            <h3>Recommend Course for : {{ $name }}</h3>

            <form id="coursesForm" action="{{ route('recommended', $id) }}" method="post">
                @csrf
                <div class="modal-body overflow-y-auto" style="max-height: 70vh">
                    <div class="container">
                        <hr class="border border-1 border-success opacity-75 m-0 p-0">
                        <div class="choice mb-3 mt-3">
                            <label class="mb-2 fw-bold">Courses Available</label>
                            <div class="mt-2 d-flex justify-content-evenly text-uppercase">

                                <div class="row justify-content-center">
                                    @foreach ($courses as $item)
                                   <div class="col-md-3">
                                        <div class="d-flex border-bottom border-dark">
                                            <input type="checkbox" class="me-2 course-checkbox" name="courses[]"
                                              id="{{ $item->id }}"  value="{{ $item->id }}">
                                            <label for="{{ $item->id }}">{{ $item->title }}</label>
                                        </div>
                                        <div class="text-center">{{ $item->acronym }}</div>
                                   </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <hr class="border border-1 border-success opacity-75 m-0 p-0 mb-2">
                    </div>
                    <div class="modal-footer gap-2">
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
