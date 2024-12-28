@extends('layout.layoutAdmin')
@section('page-title', 'Recommended')
@section('content')

    <div class="container p-4">
        <div class="container mt-4 card shadow bg-secondary-subtles p-3">
            <form id="coursesForm" action="{{ route('recommended', $id) }}" method="post">
                @csrf
                <div class="row mb-5 d-flex justify-content-center align-items-center">
                    @foreach ($choicesNew as $index => $choice)
                        <div class="col-4 d-flex flex-column justify-content-center align-items-start">
                            <label>{{ $isFirstDeny == 0 ? 'First Choice' : 'Second Choice' }}</label>
                            <label>{{ $choice }}</label>
                            <label>Reason:</label>
                            <select name="reason_{{ $isFirstDeny == 0 ? '1' : '2' }}"
                                class="form-select shadow text-uppercase" required>
                                <option value="" selected hidden>Select ReasoN</option>
                                <option value="No Slot">No Slot</option>
                                <option value="GWA">GWA</option>
                                <option value="STANINE">STANINE</option>
                            </select>
                        </div>
                    @endforeach
                </div>
                <h3>Recommend Course for : {{ $name }}</h3>
                <div class="modal-body overflow-y-auto" style="max-height: 70vh">
                    <div class="container">
                        <hr class="border border-1 border-success opacity-75 m-0 p-0">
                        <div class="choice mb-3 mt-3">
                            <label class="mb-2 fw-bold">Program Availables</label>
                            <div class="mt-2 text-uppercase">
                                <div class="row">
                                    @foreach ($courses as $item)
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center border-bottom border-dark pb-2">
                                                <input type="checkbox" class="me-2 course-checkbox" name="courses[]"
                                                    id="course-{{ $item->id }}" value="{{ $item->id }}">
                                                <label for="course-{{ $item->id }}"
                                                    class="mb-0">{{ $item->title }}</label>
                                            </div>
                                            <div class="text-center small text-muted">{{ $item->acronym }}</div>
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
