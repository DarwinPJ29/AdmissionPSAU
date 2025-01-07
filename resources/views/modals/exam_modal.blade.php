<div class="modal fade" id="exam{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Exam Result Score</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('exam') }}" method="post">
                    @csrf
                    <h3 class="text-center mb-2 text-capitalize">{{ $user->name }}</h3>
                    <input type="text" value="{{ $user->id }}" name="id" hidden>
                    <div class="row">
                        <label for="score"><span class="text-muted">Stanine: </span><b>1-9</b></label>
                        <label for="score"><span class="text-muted">Exam Items: </span><b>45</b></label>
                        <div class="div d-flex justify-content-center mb-4">
                            <div class="col-6">
                                <input type="number" id="score" name="score" min="1" max="45"
                                    class="form-control mt-3" placeholder="Enter student score" required>
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
