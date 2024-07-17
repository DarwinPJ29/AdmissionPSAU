@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')
            <div class="my-5">
                <div class="d-flex">
                    <i class="fa-solid fa-triangle-exclamation text-danger f-tag me-2"></i>
                    <div class="f-tag">Sorry to inform you that in your first and second choice is not passed</div>
                </div>
                <div class="f-text">To proceed with your admission process, please select one of the recommended
                    courses from the list provided. Each course has been carefully chosen to align with your academic
                    background and future career aspirations. By selecting a course, you will be taking the first
                    step towards achieving your educational goals and becoming a part of our esteemed institution.
                    Your timely decision and commitment to one of these courses will ensure a smooth and efficient
                    admission process.</div>
                <form id="coursesForm" action="{{ route('evaluate') }}" method="post">
                    @csrf
                    <div class="modal-body overflow-y-auto" style="max-height: 70vh">
                        <div class="container">
                            <hr class="border border-1 border-success opacity-75">
                            <div class="choice mb-3">
                                <label class="mb-3 f-text fw-bold">Recommend Course/s</label>
                                <div class="row justify-content-center">
                                    @foreach ($courses as $item)
                                        <div class="col-sm-6 col-md-3 text-center f-text">
                                            <div class="d-flex border-bottom border-dark">
                                                <input type="radio" class="me-2" name="choice"
                                                    id="choice_{{ $item->id }}" value="{{ $item->id }}">
                                                <label for="choice_{{ $item->id }}">{{ $item->title }}</label>
                                            </div>
                                            <div class="text-center">{{ $item->acronym }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <hr class="border border-1 border-success opacity-75">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning shadow">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('coursesForm').addEventListener('submit', function(event) {
            var radios = document.querySelectorAll('input[name="choice"]');
            var isRadioSelected = Array.from(radios).some(radio => radio.checked);

            if (!isRadioSelected) {
                radios.forEach(function(radio) {
                    radio.setAttribute('required', 'required');
                });
                event.preventDefault();
            }
        });
    </script>
@endsection
