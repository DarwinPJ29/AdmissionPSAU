<div class="modal fade" id="evaluation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Evaluation View</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="" method="post">
                    @csrf
                    <div class="container">
                        <div class="score ">
                            <label class="fw-bold">Name's score is</label>
                            <div class="">100 out of 100</div>
                        </div>
                        <hr>
                        <div class="list">
                            <label class="mb-2 fw-bold">List or Requirements Submitted</label>
                            <ol class="row">
                                <div class="col-md-4">
                                    <li>
                                        Lorem ipsum dolor sit amet.
                                    </li>
                                </div>
                            </ol>
                        </div>
                        <hr>
                        <div class="choice mb-3">
                            <label class="mb-2 fw-bold">Course</label>
                            <div class="mt-2 d-flex justify-content-evenly">
                                <div class="">

                                    <div class="d-flex border-bottom border-dark">
                                        <input type="checkbox" class="me-2" name="" id="first">
                                        <label for="first">sample first</label>
                                    </div>
                                    <div class="text-center">First Choice</div>
                                </div>
                                <div class="">
                                    <div class="d-flex border-bottom border-dark">
                                        <input type="checkbox" class="me-2" name="" id="second">
                                        <label for="second">sample second</label>
                                    </div>
                                    <div class="text-center">Second Choice</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger shadow">Deny</button>
                        <button type="submit" class="btn btn-warning shadow">Admit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
