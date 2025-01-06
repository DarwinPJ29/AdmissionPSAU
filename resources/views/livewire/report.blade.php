<div>
    <div class="mt-3 row g-2 mb-2">
        <div class="col-md-3">
            <label for="application_type">Application type</label>
            <select name="application_type" id="applicant_type" class="form-select form-control shadow text-uppercase"
                wire:model='type' wire:change='search'>
                <option value="0">All</option>
                <option value="1">Doctoral</option>
                <option value="2">Masteral</option>
                <option value="3">Second Courser</option>
                <option value="4">Transferee</option>
                <option value="5">Freshmen</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="course">Program</label>
            <select name="course" id="course" class="form-select form-control shadow text-uppercase"
                wire:model='course' wire:change='search'>
                <option value="0">All</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title . ' (' . $course->acronym . ')' }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 d-flex flex-column justify-content-end">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-select form-control shadow text-uppercase w-100"
                wire:model='status' wire:change='search'>
                <option value="" selected hidden>Please select</option>
                <option value="0">All</option>
                <option value="3">Submitted</option>
                <option value="7">Admitted</option>
                <option value="8">Denied</option>
            </select>
        </div>
        <div class="col-md-2 d-flex flex-column justify-content-end">
            <label for="year">School Year</label>
            <select name="year" id="year" class="form-select form-control shadow text-uppercase w-100"
                wire:model='year' wire:change='search'>
                <option value="" selected hidden>Please select</option>
                @foreach ($school_year_Data as $sy)
                    <option value="{{ $sy }}">{{ $sy }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 d-flex flex-column justify-content-end">
            <label for="semster">Semester</label>
            <select name="semster" id="semster" class="form-select form-control shadow text-uppercase w-100"
                wire:model='semester' wire:change='search'>
                <option value="" selected hidden>Please select</option>
                <option value="1">1st Semester</option>
                <option value="2">2nd Semester</option>
            </select>
        </div>
    </div>
    <div class="border rounded p-3 shadow mt-3 ">
        <div class="d-flex mb-4 justify-content-end">
            <button wire:click='generate' class="btn btn-md btn-warning"><i class="fa"></i>Generate</button>
        </div>
        <table class="table table-bordered table-striped" id="table">
            <thead>
                <tr>
                    <th class="col">Applicant No.</th>
                    <th class="col">Email</th>
                    <th class="col">Name</th>
                    <th class="col">Courses</th>
                    <th class="col">Type</th>
                    <th class="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // Define mappings for `type` and `status` to make the code cleaner and reusable
                    $typeLabels = [
                        1 => 'Doctoral',
                        2 => 'Masteral',
                        3 => 'Second Courser',
                        4 => 'Transferee',
                        5 => 'Freshmen',
                    ];

                    $statusLabels = [
                        3 => 'Submitted',
                        7 => 'Admitted',
                        8 => 'Denied',
                    ];
                @endphp

                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->applicant_no }}</td>
                        <td>{{ $data->email }}</td>
                        <td class="text-capitalize">{{ $data->name }}</td>
                        <td style="text-transform: capitalize">{{ $data->title . ' (' . $data->acronym . ')' }}</td>
                        <td>{{ $typeLabels[$data->type] ?? 'Unknown' }}</td>
                        <td>{{ $statusLabels[$data->status] ?? 'Unknown' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
