@extends('layout.layoutAdmin')
@section('page-title', 'Recommended')
@section('content')

    <div class="container p-4">
        <div class="container mt-4 bg-secondary-subtles p-3">
            <form id="coursesForm" action="{{ route('deny', $id) }}" method="post">
                @csrf
                <h3>Reject the application of <b>{{ $name }}</b> for admission ?</h3>
                <div class="row d-flex justify-content-center align-items-center">
                    @foreach ($choicesNew as $index => $choice)
                        <div class="col-4 d-flex flex-column justify-content-center align-items-start">
                            <label>{{ $index + 1 == 1 ? 'First Choice' : 'Second Choice' }}</label>
                            <label>{{ $choice }}</label>
                            <label>Reason:</label>
                            <textarea name="reason_{{ $index + 1 }}" class="form-control" cols="10" rows="3" required></textarea>
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
