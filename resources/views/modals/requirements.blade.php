<div class="modal fade" id="requirements" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Set Requirements</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('requirement') }}" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-7">
                            <label for="requirement">Requirements <span class="text-danger">*</span></label>
                            <input type="text" name="requirement" id="requirement" class="form-control shadow"
                                placeholder="Enter Department Name:" value="{{ old('requirement') }}" required>
                            @error('requirement')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-5">
                            <label for="required">Requirements Type <span class="text-danger">*</span></label>
                            <select name="required" id="required"
                                class="form-select shadow @error('required') is-invalid @enderror"
                                value="{{ old('required') }}" required>
                                <option value="" selected hidden>Select Desired:</option>
                                <option value="1" @selected(old('required') == 1)>Required</option>
                                <option value="0" @selected(old('required') == 0)>Not Required</option>
                            </select>
                            @error('requirement_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="mb-3 mt-4">Requirements for:</label>
                        <div class="row justify-content-center gap-2">
                            <div class=" col-sm-4 col-md-auto text-center">
                                <input type="checkbox" name="doctoral" id="doctoral" class="">
                                <div class="text-center">Doctoral</div>
                            </div>
                            <div class=" col-sm-4 col-md-auto text-center">
                                <input type="checkbox" name="masteral" id="masteral" class="">
                                <div class="text-center">Masteral</div>
                            </div>
                            <div class=" col-sm-4 col-md-auto text-center">
                                <input type="checkbox" name="second_courser" id="second_courser" class="">
                                <div class="text-center">Second Courser</div>
                            </div>
                            <div class=" col-sm-4 col-md-auto text-center">
                                <input type="checkbox" name="freshmen" id="freshmen" class="">
                                <div class="text-center">Freshmen</div>
                            </div>
                            <div class=" col-sm-4 col-md-auto text-center">
                                <input type="checkbox" name="transferee" id="transferee" class="">
                                <div class="text-center">Transferee</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Edit --}}
@if (isset($requirement))
    <div class="modal fade" id="requirementsEdit{{ $requirement->id }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header main-bg">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">Set Requirements</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border shadow">
                    <form action="{{ route('requirement.update', $requirement->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row mb-2">
                            <div class="col-7">
                                <label for="requirement">Requirements <span class="text-danger">*</span></label>
                                <input type="text" name="requirement" id="requirement"
                                    class="form-control shadow" placeholder="Enter Department Name:"
                                    value="{{ $requirement->title }}">
                                @error('requirement')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-5">
                                <label for="required">Requirements Type <span class="text-danger">*</span></label>
                                <select name="required" id="required"
                                    class="form-select shadow @error('required') is-invalid @enderror" value="">
                                    <option value="" selected hidden>Select Desired:</option>
                                    <option value="1" @selected($requirement->required == 1)>Required</option>
                                    <option value="0" @selected($requirement->required == 0)>Not Required</option>
                                </select>
                                @error('required')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="mb-3 mt-4">Requirements for:</label>
                            <div class="row justify-content-center gap-2">
                                <div class=" col-sm-4 col-md-auto text-center">
                                    <input type="checkbox" name="doctoral" id="doctoral"
                                        {{ $requirement->doctoral == 1 ? 'checked' : '' }}>
                                    <div class="text-center">Doctoral</div>
                                </div>
                                <div class=" col-sm-4 col-md-auto text-center">
                                    <input type="checkbox" name="masteral" id="masteral"
                                        {{ $requirement->masteral == 1 ? 'checked' : '' }}>
                                    <div class="text-center">Masteral</div>
                                </div>
                                <div class=" col-sm-4 col-md-auto text-center">
                                    <input type="checkbox" name="second_courser" id="second_courser"
                                        {{ $requirement->second_courser == 1 ? 'checked' : '' }}>
                                    <div class="text-center">Second Courser</div>
                                </div>
                                <div class=" col-sm-4 col-md-auto text-center">
                                    <input type="checkbox" name="freshmen" id="freshmen"
                                        {{ $requirement->freshmen == 1 ? 'checked' : '' }}>
                                    <div class="text-center">Freshmen</div>
                                </div>
                                <div class=" col-sm-4 col-md-auto text-center">
                                    <input type="checkbox" name="transferee" id="transferee"
                                        {{ $requirement->transferee == 1 ? 'checked' : '' }}>
                                    <div class="text-center">Transferee</div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endif

@if (isset($requirement))
    {{-- Delete --}}
    <div class="modal fade" id="requirementsDelete{{ $requirement->id }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header main-bg">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">Delete Requirements</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border shadow">
                    <form action="{{ route('requirement.delete', $requirement->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="mb-2 text-center fs-3">
                            Are you sure you want to Delete this <br>
                            <span class="fw-bold">{{ $requirement->title }}</span> <br> requirements permanently ?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
