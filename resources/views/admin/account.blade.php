@extends('layout.layoutAdmin')
@section('page-title', 'Courses')
@section('content')

    <div class="container">
        <div class="text-end mt-3">
            <a href="{{ route('registration') }}">
                <div class="btn btn-sm rounded btn-warning m-1">Create Account</div>
            </a>
        </div>
    </div>
@endsection
