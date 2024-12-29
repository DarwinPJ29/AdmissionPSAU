<div class="container">
    <div class="container mt-4">
        <div class="row mt-3 mb-4">
            <div class="col-md-3 d-flex flex-column justify-content-end">
                <label for="type">Status</label>
                <select name="type" id="type" class="form-select form-control shadow text-uppercase w-100"
                    wire:model='type' wire:change='record'>
                    <option value="7">Admitted</option>
                    <option value="8">Denied</option>
                    <option value="6">Recommendation</option>
                </select>
            </div>
            <div class="col-md-2 d-flex flex-column justify-content-end">
                <label for="year">School Year</label>
                <select name="year" id="year" class="form-select form-control shadow text-uppercase w-100"
                    wire:model='year' wire:change='record'>
                    <option value="" selected hidden>Please select</option>
                    @foreach ($school_year_Data as $sy)
                        <option value="{{ $sy }}">{{ $sy }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 d-flex flex-column justify-content-end">
                <label for="semster">Semester</label>
                <select name="semster" id="semster" class="form-select form-control shadow text-uppercase w-100"
                    wire:model='semester' wire:change='record'>
                    <option value="" selected hidden>Please select</option>
                    <option value="1">1st Semester</option>
                    <option value="2">2nd Semester</option>
                </select>
            </div>
        </div>
        <div class="tab-content mt-4">
            <div class="tab-pane fade show active" id="admitted" role="tabpanel" aria-labelledby="admitted-tab">
                <div class="border rounded p-3 shadow mt-3 overflow-y-scroll" style="max-height: 70%">
                    <table class="table table-bordered table-striped" id="table">
                        <thead>
                            <tr>
                                <th class="col-2">Applicant No.</th>
                                <th class="col-4">Name</th>
                                <th class="col-4">Email</th>
                                <th class="col-2">Date Submitted</th>
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
