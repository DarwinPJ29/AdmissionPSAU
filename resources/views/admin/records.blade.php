@extends('layout.layoutAdmin')
@section('page-title', 'Records')
@section('content')

    <div class="container">
        {{-- <div class="text-end mt-3">
            <a href="{{ route('sendMail') }}" class="nav-link">
                <div class="btn btn-warning shadow btn-sm"><i class="fa-solid fa-paper-plane text-success"></i> Send Mail
                </div>
            </a>
        </div> --}}
        <div class="container mt-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active main-bg" id="admitted-tab" data-toggle="tab" href="{{ route('records') }}"
                        role="tab" aria-controls="admitted" aria-selected="true">Admitted</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="denied-tab" data-toggle="tab" href="{{ route('denied') }}" role="tab"
                        aria-controls="denied" aria-selected="false">Denied</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="reco-tab" data-toggle="tab" href="{{ route('admin.recommend') }}"
                        role="tab" aria-controls="reco" aria-selected="false">Recommendation</a>
                </li>
            </ul>
            <div class="tab-content mt-4">

                <div class="tab-pane fade show active" id="admitted" role="tabpanel" aria-labelledby="admitted-tab">
                    <div class="border rounded p-3 shadow mt-3 overflow-y-scroll" style="max-height: 70%">
                        <table class="table table-bordered table-striped" id="table">
                            <thead>
                                <tr>
                                    <th class="col-3">Applicant No.</th>
                                    <th class="col-4">Name</th>
                                    <th class="col-4">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->show)
                                        <tr>
                                            <td>{{ $user->applicant_no }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="denied"
                    role="tabpanel" aria-labelledby="denied-tab">
                    <p>Denied tab content goes here.</p>
                </div> --}}
            </div>
        </div>

    </div>
@endsection
