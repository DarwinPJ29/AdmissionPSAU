<div class="modal fade" id="requirements" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Set Requirements</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="" method="post">
                    @csrf

                    <div class="row mb-2">
                        <div class="col-7">
                            <label for="requirements">Requirements <span class="text-danger">*</span></label>
                            <input type="text" name="requirements" id="requirements" class="form-control shadow"
                                placeholder="Enter Department Name:" value="{{ old('requirements') }}">
                            @error('requirements')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-5">
                            <label for="requirements_type">Requirements Type <span class="text-danger">*</span></label>
                            <select name="requirements_type" id="requirements_type" class="form-select shadow @error('requirements_type') is-invalid @enderror"
                                value="{{ old('requirements_type') }}">
                                <option value="" selected hidden>Select Desired:</option>
                                <option value="Required" @selected(old('requirements_type') == 'Required')>Required</option>
                                <option value="Not Required" @selected(old('requirements_type') == 'Not Required')>Not Required</option>
                            </select>
                            @error('requirements_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
