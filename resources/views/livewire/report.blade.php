<div>
    <div class="mt-3 row g-2">
        <div class="col-md-6">
            <label for="application_type">Application type</label>
            <select name="application_type" id="applicant_type" class="form-select form-control shadow text-uppercase">
                <option value="" selected hidden>Select type:</option>
                <option value="1">Doctoral</option>
                <option value="2">Masteral</option>
                <option value="3">Second Courser</option>
                <option value="4">Transferee</option>
                <option value="5">Freshmen</option>
            </select>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-end">
            <div class="d-flex justify-content-evenly">
                <div class="">
                    <div class="text-center border-bottom">
                        <input type="checkbox" name="admitted" id="admitted" class="shadow border-bottom m-1">
                    </div>
                    <div class=""><label for="admitted" class="text-center text-muted">Admitted</label></div>
                </div>
                <div class="">
                    <div class="text-center border-bottom">
                        <input type="checkbox" name="admitted" id="admitted" class="shadow border-bottom m-1">
                    </div>
                    <div class=""><label for="admitted" class="text-center text-muted">Denied</label></div>
                </div>
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
                    <th class="col-3">Level</th>
                    <th class="col-1">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-uppercase"></td>
                    <td></td>
                    <td>
                        <div class="dropdown text-center">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-ellipsis-h fs-5 fw-bold"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item d-flex" class="btn btn-sm btn-success"
                                        data-bs-toggle="modal" data-bs-target="#">
                                        <i class="fa-solid fa-pen-to-square fs-5 text-success"></i>
                                        <label class="fs-text ms-3 fw-bold curser">Edit</label>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex" data-bs-toggle="modal" data-bs-target="#">
                                        <i class="fa fa-trash fs-5 text-danger"></i>
                                        <label class="fs-text ms-3 fw-bold curser">Delete</label>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex" data-bs-toggle="modal" data-bs-target="#">
                                        <i class="fa-solid fa-print fs-5 text-primary"></i>
                                        <label class="fs-text ms-3 fw-bold curser">Print</label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    @include('modals.college_modal')
                </tr>

            </tbody>
        </table>
    </div>
</div>
