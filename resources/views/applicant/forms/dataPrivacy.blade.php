@extends('layout.applicant_layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="my-5 border shadow rounded-3 p-3">
                <div class="fw-bold fs-3 p-3">Certification <br> PSAU Data Privacy Notice Online Utilization</div>
                <p class="mt-1 mb-1">At Pampanga State Agricultural University (PSAU), we respectand value your right to
                    privacy.
                    PSAU is commited to protecting your personal data in accordance with the Data Privacy Act of 2012 and
                    its
                    Implementing Rules and Regulations.
                </p>
                <p class="mb-1">
                    This Privacy Notice has been prepared to inform applicants for admission about the collection
                    and usage of their personal information during the application process.
                </p>
                <p class="mb-1">What personal information do we collect from applicants?</p>
                <p class="mb-1">We collect personal information from applicants for admission, which may
                    include but is not limited to:
                </p>
                <ul>
                    <li>Full name</li>
                    <li>Date of birth </li>
                    <li>Contact information (address, phone number, email)</li>
                    <li>Academic history (previous schools attended, grades, transcripts)</li>
                    <li>Employment history</li>
                    <li>Any other information relevant to the admission process</li>
                </ul>
                <p>When do we collect information?</p>
                <p>We collect information from applicants when they submit their admission application.</p>
                <p>How do we use inforamation?</p>
                <p>The information you provide is used for the following purposes:</p>
                <ul>
                    <li>Admission assessment and decision-making</li>
                    <li>Communication with applicants</li>
                    <li>Statistical and reporting purposes for university records</li>
                    <li>Notification of admission status and related information</li>
                </ul>
                <p>How we protect your information?</p>
                <p>All applicants information is securely stored and accessed only by authorized personnel involved in the
                    admission process. We take measures to ensure the confidentiality and integrity of your data.
                </p>
                <p>Use of Cookies</p>
                <p>We may use cookies on our website to enhance the user experience. Any data collected via cookies is
                    treated in accourdance with our privacy policy.
                </p>
                <p>Sharing of information</p>
                <p>We do not disclose any personal information provided by applicants to third parties
                    without prior concent. However, we may share application information with relevant
                    university departments involved in the admission process.
                </p>
                <p>Data Retention</p>
                <p>We retain applicant information for a specified period, as required by university policies
                    and applicable laws.
                </p>
                <p>Changes to this Notice </p>
                <p>We may updates this Priacy Notice from time to time, and any chancges will be posted on
                    our website. Applicants are encouraged to review this notice periodically for updates.
                </p>
                <p>By submitting an admission application to PSAU, applicants acknowledge that they have read
                    and understood this Privacy Notice and concent to the collection and use of their personal
                    information as described herein.
                </p>
                <form action="{{ route('dataPrivacy') }}" method="post">
                    @csrf
                    <div class="mt-5 mb-3 d-flex justify-content-end gap-1">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <div class="btn btn-danger">Cancel</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angles-up"></i></button>
    @include('layout.script')
@endsection
