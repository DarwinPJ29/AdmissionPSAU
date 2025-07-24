@extends('layout.layoutAdmin')
@section('page-title', 'Denied')
@section('content')

    <div class="container p-4">
        <div class="container mt-4 bg-secondary-subtles p-3">
            <form id="coursesForm" action="{{ route('deny', $id) }}" method="post">
                @csrf
                @if ($isFirstDeny == 0)
                    <h4 class="mb-5">
                        Is the application of <b>{{ $name }}</b> for admission being carefully reviewed and
                        ultimately denied?
                    </h4>
                @else
                    <h4 class="mb-5">
                        Are you sure you want to deny the application of <b>{{ $name }}</b>? Please note that once
                        denied, the student will not be able to proceed with the enrollment process.
                    </h4>
                @endif
                <div class="row d-flex justify-content-center align-items-center">
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
                <div class="modal-footer gap-2">
                    <a href="{{ route('evaluation') }}" class="btn btn-secondary shadow">Cancel</a>
                    <button type="submit" class="btn btn-danger shadow">Confirm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
