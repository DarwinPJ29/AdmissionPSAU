<div class="modal fade" id="evaluation{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Evaluation View</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('evaluation') }}" method="post">
                @csrf
                <div class="modal-body overflow-y-auto" style="max-height: 70vh">
                    <div class="container">
                        <h3 class="text-center bold text-uppercase">{{ $user->name }}</h3>
                        <input type="text" name='id' value="{{ $user->id }}" hidden>
                        <div class="score ">
                            <label class="fw-bold">Exam score is</label>
                            <div class="">{{ $user->result[0] }} out of {{ $user->result[1] }}</div>
                        </div>
                        <div class="score ">
                            <label class="fw-bold">STANINE</label>
                            <div class="">{{ $user->result[2] }} out of 9</div>
                        </div>
                        <hr>
                        <div class="list">
                            <label class="mb-2 fw-bold">List or Requirements Submitted</label>
                            <div class="row mt-3">
                                @foreach ($user->requirements as $item)
                                    <div class="col-sm-6">
                                        <div class="container">
                                            <div class="text-center text-uppercase">
                                                <img data-enlargable
                                                    src="{{ url('/storage/applicant_requirements/' . $item['file']) }}"
                                                    alt="" class="img-fluid file-uploaded rounded">
                                            </div>
                                            <div class="fs-style text-center text-uppercase text-danger text fw-bold">
                                                Click
                                                image
                                                to Larger</div>
                                            <div class="text-center text-uppercase">{{ $item['title'] }}</div>
                                            <div class="text-center text-uppercase text-muted text">
                                                {{ $item['required'] ? 'Required' : 'Not Required' }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="choice mb-3">
                            <label class="mb-2 fw-bold">Course</label>
                            <div class="mt-2 d-flex justify-content-evenly text-uppercase">
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
                        <a href="{{ route('deny', $user->id) }}" class="btn btn-danger shadow">Deny</a>
                        <button type="submit" class="btn btn-warning shadow">Admit</button>
                    </div>
                </div>
            </form>
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



<script>
    $('img[data-enlargable]').addClass('img-enlargable').click(function() {
        var src = $(this).attr('src');
        $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            $(this).remove();
        }).appendTo('body');
    });
</script>
