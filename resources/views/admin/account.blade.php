@extends('layout.layoutAdmin')
@section('page-title', 'Programs')
@section('content')

    <div class="container">
        <div class=" mt-3 d-flex justify-content-end gap-1">

            <div class="btn shadow btn-warning" id="addAccountBtn" data-bs-toggle="modal" data-bs-target="#account"><i
                    class="fa-solid fa-plus me-1 f-text"></i>Add Account
            </div>

        </div>
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
                        <th class="col">Role</th>
                        <th class="col">Status</th>
                        <th style="width:200px">Action</th>
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
                                {{ $user->role == 1 ? 'Admin' : ($user->role == 2 ? 'Proctor' : 'Admitting Personnel') }}
                            </td>
                            <td>{{ $user->activated == 1 ? 'Active' : 'Deactivate' }}</td>
                            <td>
                                <div class="btn shadow btn-sm btn-secondary" id="editAccountBtn{{ $user->id }}"
                                    data-bs-toggle="modal" data-bs-target="#accountEdit{{ $user->id }}"><i
                                        class="fa-solid fa-edit me-1"></i>Update
                                </div>
                                <a href="{{ route('account.activate', $user->id) }}" style="border-radius: 20px"
                                    class="btn  btn-sm  {{ $user->activated ? 'btn-warning' : 'btn-success' }}">
                                    <i class="fas {{ $user->activated ? 'fa-toggle-off' : 'fa-toggle-on' }} "></i>
                                    {{ $user->activated ? 'Deactivate' : 'Activate' }}

                                </a>

                            </td>
                        </tr>
                        @include('modals.add_account_modal')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('modals.add_account_modal')
    </div>
    <!-- JavaScript to show the modal if validation failed -->
    <script>
        @if (session('showModal'))
            // Use Bootstrap's modal function to trigger the modal
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        @endif
    </script>

@endsection
