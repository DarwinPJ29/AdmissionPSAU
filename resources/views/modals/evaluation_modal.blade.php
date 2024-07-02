<div class="modal fade" id="evaluation{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Evaluation View</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('evaluation') }}" method="post">
                    @csrf
                    <div class="container">
                        <h3 class="text-center bold">{{ $user->name }}</h3>
                        <input type="text" name='id' value="{{ $user->id }}" hidden>
                        <div class="score ">
                            <label class="fw-bold">Exam score is</label>
                            <div class="">{{ $user->result[0] }} out of {{ $user->result[1] }}</div>
                        </div>
                        <hr>
                        <div class="list">
                            <label class="mb-2 fw-bold">List or Requirements Submitted</label>
                            <ol class="row">
                                @foreach ($user->requirements as $item)
                                    <div class="col-md-4">
                                        <li>
                                            {{ $item['title'] }}
                                        </li>
                                    </div>
                                @endforeach
                            </ol>
                        </div>
                        <hr>
                        <div class="choice mb-3">
                            <label class="mb-2 fw-bold">Course</label>
                            <div class="mt-2 d-flex justify-content-evenly">
                                <div class="">
                                    <div class="d-flex border-bottom border-dark">
                                        <input type="checkbox" class="me-2" name="first" id="first">
                                        <label for="first">{{ $user->choices[0] }}</label>
                                    </div>
                                    <div class="text-center">First Choice</div>
                                </div>
                                <div class="">
                                    <div class="d-flex border-bottom border-dark">
                                        <input type="checkbox" class="me-2" name="second" id="second">
                                        <label for="second">{{ $user->choices[1] }}</label>
                                    </div>
                                    <div class="text-center">Second Choice</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow" data-bs-dismiss="modal">Close</button>
                        <button type="buttom" class="btn btn-danger shadow">Deny</button>
                        <button type="submit" class="btn btn-warning shadow">Admit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function updateRequiredCheckboxes() {
        const firstCheckbox = document.getElementById('first');
        const secondCheckbox = document.getElementById('second');

        if (!firstCheckbox.checked && !secondCheckbox.checked) {
            firstCheckbox.required = true;
            secondCheckbox.required = true;
        } else {
            firstCheckbox.required = false;
            secondCheckbox.required = false;
        }
    }

    document.addEventListener('DOMContentLoaded', (event) => {
        const firstCheckbox = document.getElementById('first');
        const secondCheckbox = document.getElementById('second');

        firstCheckbox.addEventListener('change', updateRequiredCheckboxes);
        secondCheckbox.addEventListener('change', updateRequiredCheckboxes);

        updateRequiredCheckboxes(); // Initialize on page load
    });
</script>
