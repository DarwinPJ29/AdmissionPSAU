<div>
    <div class="mt-3 row g-2">
        <div class="col-md-6">
            <label for="application_type">Application type</label>
            <select name="application_type" id="applicant_type" class="form-select form-control shadow text-uppercase"
                wire:model='type' wire:change='search'>
                <option value="" selected hidden>Select type:</option>
                <option value="1">Doctoral</option>
                <option value="2">Masteral</option>
                <option value="3">Second Courser</option>
                <option value="4">Transferee</option>
                <option value="5">Freshmen</option>
            </select>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-end">
            <div class="col-md-6">
                <label for="application_type">Categories</label>
                <select name="application_type" id="applicant_type"
                    class="form-select form-control shadow text-uppercase" wire:model='status' wire:change='search'>
                    <option value="" selected hidden>Please select</option>
                    <option value="all">All</option>
                    <option value="1">Admitted</option>
                    <option value="0">Denied</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 d-flex flex-column justify-content-end">
            <div class="">
                <div class="btn btn-warning shadow ">
                    <i class="fa-solid fa-print"></i> Print
                </div>
            </div>
        </div>
    </div>
    <div class="border rounded p-3 shadow mt-3 ">
        <table class="table table-bordered table-striped" id="table">
            <thead>
                <tr>
                    <th class="col-8">Name</th>
                    <th class="col-3">Course</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['course'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
