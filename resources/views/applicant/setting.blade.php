@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">

            @include('applicant.forms.header')

            <div class="container-fluid">
                <div class="container mt-5 " style="max-width: 500px">
                    <div class="row  justify-content-center mx-auto">
                        <div
                            class="container border border rounded-top fs-4 p-1 shadow main-bg d-flex justify-content-between">
                            <span class="ms-2">Change Password</span>
                            <a href="{{ route('loading') }}">
                                <button class="btn "><i class="fa-solid fa-times"></i></button>
                            </a>
                        </div>
                        <div class="border my-auto text-dark   p-3 shadow">
                            <form action="{{ route('settings') }}" method="post">
                                @csrf
                                <div class="container">
                                    <div class="mt-3 mb-2">
                                        <label for="old_password">Old Password</label>
                                        <input type="text" name="old_password" id="old_password"
                                            value="{{ old('old_password') }}" class="form-control shadow"
                                            placeholder="Enter your Old Password">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-3 mb-2">
                                        <label for="new_password">New Password</label>
                                        <input type="password" name="new_password" id="admin_password1"
                                            value="{{ old('new_password') }}" class="form-control shadow"
                                            placeholder="Enter your New Password">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-3 mb-2">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input type="password" name="confirm_password" id="admin_password"
                                            value="{{ old('confirm_password') }}" class="form-control shadow"
                                            placeholder="Enter your New Password">
                                        @error('confirm_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <input type="checkbox" id="showPassword" class="mb-2"> Show Password
                                    <div class="float-end d-flex mt-5 gap-1">
                                        <button type="submit" class="btn btn-sm btn-warning shadow"> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
