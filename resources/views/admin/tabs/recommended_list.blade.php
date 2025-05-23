@extends('layout.layoutAdmin')
@section('page-title', 'Recommendation')
@section('content')

    <div class="container">


        <div class="container mt-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="admitted-tab" data-toggle="tab" href="{{ route('records') }}" role="tab"
                        aria-controls="admitted" aria-selected="false">Admitted</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="denied-tab" data-toggle="tab" href="{{ route('denied') }}" role="tab"
                        aria-controls="denied" aria-selected="false">Denied</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="reco-tab" data-toggle="tab" href="{{ route('admin.recommend') }}"
                        role="tab" aria-controls="reco" aria-selected="true">Recommendation</a>
                </li>
            </ul>
            <div class="tab-content mt-4">
                <div class="tab-pane fade" id="reco" role="tabpanel" aria-labelledby="reco-tab">

                </div>
                <div class="tab-pane fade show active" id="reco" role="tabpanel" aria-labelledby="reco-tab">
                    <div class="border rounded p-3 shadow mt-3 overflow-y-scroll" style="max-height: 70%">
                        <table class="table table-bordered table-striped" id="table">
                            <thead>
                                <tr>
                                    <th class="col-3">Applicant No.</th>
                                    <th class="col-4">Name</th>
                                    <th class="col-4">Email</th>
                                    <th class="col">Date Submitted</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->show)
                                        <tr>
                                            <td>{{ $user->applicant_no }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->date_submitted }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
