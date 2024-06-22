<div class="my-5 border rounded">
    <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-center pb-5 ">
            <div class="text-center mt-5">
                Your Exam result was
            </div>
            <div class="text-center text-semibold text-warning">
               10 <span class="text-dark"> out of</span>100
            </div>

        </div>
        <div class="col-md-6 d-md-block d-none">
            <div class="d-flex flex-column justify-content-center">
                <img src="{{ asset('images/side2.avif') }}" alt="" class="img-fluid " style="max-width: 80%">
            </div>
        </div>

    </div>
</div>
<div class="my-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary" wire:click=''><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning" wire:click=''>Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
