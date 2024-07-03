@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">

            <div class="d-flex mt-3">
                <div class="">
                    <img src="{{ asset('images/PSAU_logo.png') }}" alt="" srcset="" class="img-fluid"
                        style="max-height: 150px">
                </div>
                <div class="w-100">
                    <div class="text-uppercase f-title ms-3 fs-style">pampanga state agricultural university</div>
                    <div class="fw-semibold f-title ms-3">Office of Admission and Registration </div>
                    <hr class="border border-dark border-2 opacity-75 w-100">
                </div>
            </div>

            <div class="text-center text-uppercase fw-bold f-tag mb-5">notice of evaluation result</div>

            <div class="text-uppercase f-text ">hi name</div>
            <div class="mb-3 f-text">Control number : 000000</div>

            <span class="mb-3 f-text">Greetings from PSAU!</span>
            <span class="mb-3 f-text">This message is to inform you of the results of your Admissions Test.</span>

            <p class="fw-semibold f-text">
                Your test score is the transmuted score using the STANINE method. Stanine (STAndard NINE)
                is a method of scaling test scores on a nine-point standard scale with 9 is the highest and 1 is
                the lowest.
            </p>
            <p class="f-text">This is one of the two things that the admitting personnel of your choice programs will look into when you are evaluated, the other being ypour report card/TOR </p>

            <div class="my-3 f-text">Your STANINE is <span class="fw-semibold">000</span> </div>

            <div class="f-text mb-3">
                <span class="text-danger ">When you receive your GRADE 12 report card <u>with complete grades
                     (1st - 4th quarters)</u>, signed by adviser and/or principal, and marked 'eligible for college
                     admissions'</span>
                     by DATA or DATA,
                    <span class="fw-semibold text-uppercase">take a photo</span> of it (front and back, or all pages if more than one page). Then, upload it as you fill out this Google form
                    <a href="httsps://bit.ly/G12reportcard_TOR" class="">httsps://bit.ly/G12reportcard_TOR</a>
                    <div class="span fw-semibold"> This form shall be open from TIMESET to TIMESET.
                        For transferees and second coursers, please fill out the same Google form with all pages of your complete TOR to upload </div>
                <span class="text-danger">
                    Please, DO NOT UPLOAD INCOMPLETE REPORT CARD or TOR.
                </span> The form is open from May 20 because we know that this is the start of the distribution of report
                cards and the end of the school year.
            </div>

            <div class="f-text mb-3">
                <span class="fw-semibold">
                    Upon submission, your complete Grade 12 report card/TOR shall be forwarded with your Stanine
                    to the admitting personnel of your first choice program for evaluation. EVALUATION means that they
                    will look at your STANINE and Grade 12/TOR grades and evaluate whether you are qualified or not based approved policies
                    of the program
                </span>. the order of evaluqation is based in the last four digits of your control number. If upon evaluation, you are not deemed qualified
                , the admitting personnel of your second choice program shall evaluate you; and your third
                choice program, if necessary. Results of evaluation shall be emailed to you by the end of June.
                <span class="fw-semibold">
                    We ask for your patience and understanding as you WAIT for your next email.
                </span>
            </div>
            <div class="f-text mb-3">
                The required admission test scores for quota programs are indicated across the specific
                program in the list of curricular programs posted on the PSAU FB page and <a href="bit.ly/PSAUandRT">bit.ly/PSAUandRT</a> site.
                Aside from those, <strong>we cannot answer</strong> if you are qualified or not based on your grades because
                evaluation starts after you submit your complete Grade 12 report card/TOR
            </div>
            <div class="f-text mb-3">
                <span class="fw-semibold">
                    Please continue checking your email inbox (and spam folder) regularly.
                </span> We also advise that you regularly check the <a href="bit.ly/PSAUandRT">bit.ly/PSAUandRT</a>
                site as announcements on admissions are posted here.
            </div>
            <div class="f-text mb-5">
                Thank you for your patience and understanding and we hope to be with you as one of our new students
                at Pampanga State Agricultural University.
            </div>
            <div class="f-text mb-5">
                <div class="fw-semibold text-uppercase">
                    office of admissions and registration
                </div>
                <div class="">Pampanga State Agricultural University</div>
                <div class="">Magalang, Pampanga</div>
            </div>
            <div class="f-text mb-5 text-primary">
                WHILE WAITING for your complete GRADE 12 report card/TOR, and the results of evaluation,
                <u><b>you may want to prepare the following admissions requirements</b></u> to be SUBMITTED IN
                ORIGINAL COPIES. Sheduled of submission shall be emailed to you based on your admissions status by the end of June.
            </div>
            <div class="f-tag mb-3 text-center text-danger text-uppercase"><u>admission requirements</u></div>
            <div class="f-tag text-uppercase mb-2"><u>new students</u></div>
            <ul class="mb-3">
                <li class="ms-4 f-text">smapl</li>
            </ul>
            <div class="f-tag text-uppercase mb-2"><u>transferee</u></div>
            <ul class="mb-3">
                <li class="ms-4 f-text">smapl</li>
            </ul>
            <div class="f-tag text-uppercase mb-2"><u>second courser</u></div>
            <ul class="mb-5">
                <li class="ms-4 f-text">smapl</li>
            </ul>

            <p class="mb-5 f-text">
                * for the medical certificates, you may go to any Physician/Medical doctor and ask
                for a medical certificate. Please make sure that it includes yoir <u>fullname</u> and
                that you are <u>physically fit to study/go to school</u>, signed by the physician with his/her
                medical license number.*
            </p>
        </div>
    </div>
@endsection
