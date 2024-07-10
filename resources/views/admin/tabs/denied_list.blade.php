@extends('layout.layoutAdmin')
@section('page-title', 'Denied')
@section('content')

    <div class="container">


        <div class="container mt-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="admitted-tab" data-toggle="tab" href="{{ route('records') }}" role="tab"
                        aria-controls="admitted" aria-selected="true">Admitted</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="denied-tab" data-toggle="tab" href="{{ route('denied') }}" role="tab"
                        aria-controls="denied" aria-selected="false">Denied</a>
                </li>
            </ul>

            <div class="tab-content mt-4">
                <div class="tab-pane fade" id="admitted" role="tabpanel" aria-labelledby="admitted-tab">

                </div>
                <div class="tab-pane fade show active" id="denied" role="tabpanel" aria-labelledby="denied-tab">
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
            </div>
        </div>

    </div>
@endsection
