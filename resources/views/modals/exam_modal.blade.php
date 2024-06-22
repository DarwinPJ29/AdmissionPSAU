<div class="modal fade" id="exam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Exam Result Name</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="" method="post" >
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="score">Score</label>
                            <input type="number" id="score" name="score" min="0" class="form-control shadow">
                        </div>
                        <div class="col-6">
                            <label for="out_of">Out of</label>
                            <input type="number" id="out_of" name="out_of" min="0" class="form-control shadow">
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
