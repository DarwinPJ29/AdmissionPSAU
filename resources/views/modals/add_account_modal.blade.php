<div class="modal fade" id="account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Add Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('account') }}" method="post">
                    @csrf
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control shadow" placeholder="Enter email:"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="prefix">Prefix <span class="text-danger"></span></label>
                            <input type="text" name="prefix" class="form-control shadow" placeholder="Enter prefix:"
                                value="{{ old('prefix') }}">
                            @error('prefix')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="first">First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first" class="form-control shadow"
                                placeholder="Enter first name:" value="{{ old('first') }}" required>
                            @error('first')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="middle">Middle Name <span class="text-danger"></span></label>
                            <input type="text" name="middle" class="form-control shadow"
                                placeholder="Enter middle name:" value="{{ old('middle') }}">
                            @error('middle')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="last">Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last" class="form-control shadow"
                                placeholder="Enter last name:" value="{{ old('last') }}" required>
                            @error('last')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="suffix">Suffix <span class="text-danger"></span></label>
                            <input type="text" name="suffix" class="form-control shadow" placeholder="Enter suffix:"
                                value="{{ old('suffix') }}">
                            @error('suffix')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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

{{-- 
EDIT MODAL --}}
<div class="modal fade" id="accountEdit{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Edit Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('account.update', $user->id) }}" method="post">
                    @csrf
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control shadow"
                                placeholder="Enter email:" value="{{ $user->email }}" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="prefix">Prefix <span class="text-danger"></span></label>
                            <input type="text" name="prefix" class="form-control shadow"
                                placeholder="Enter prefix:" value="{{ $user->prefix }}">
                            @error('prefix')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="first">First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first" class="form-control shadow"
                                placeholder="Enter first name:" value="{{ $user->first_name }}" required>
                            @error('first')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="middle">Middle Name <span class="text-danger"></span></label>
                            <input type="text" name="middle" class="form-control shadow"
                                placeholder="Enter middle name:" value="{{ $user->middle_name }}">
                            @error('middle')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="last">Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last" class="form-control shadow"
                                placeholder="Enter last name:" value="{{ $user->last_name }}" required>
                            @error('last')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-10">
                            <label for="suffix">Suffix <span class="text-danger"></span></label>
                            <input type="text" name="suffix" class="form-control shadow"
                                placeholder="Enter suffix:" value="{{ $user->suffix }}">
                            @error('suffix')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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
