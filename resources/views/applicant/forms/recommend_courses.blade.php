@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @include('applicant.forms.header')
            <div class="my-5">
                <h1>Sorry to inform you that in your first and second choice is not passed </h1>
                <h3>please select one to this recommended course for you to become admitted</h3>
                <form id="coursesForm" action="{{ route('evaluate') }}" method="post">
                    @csrf
                    <div class="modal-body overflow-y-auto" style="max-height: 70vh">
                        <div class="container">
                            <hr>
                            <div class="choice mb-3">
                                <label class="mb-2 fw-bold">Recommend Course</label>
                                <div class="mt-2 d-flex justify-content-evenly text-uppercase">
                                    @foreach ($courses as $item)
                                        <div class="">
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
