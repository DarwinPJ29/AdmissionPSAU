<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PSAU | PDF</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon" />
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
            /* Adjust the font size */
        }

        .container-fluid {
            margin-top: 20px;
            padding: 0 20px 0 30px;
        }

        .col-bg {
            background-color: #fec541 !important;
            color: black !important;
        }

        @media only screen and (max-width: 431px) {
            .f-title {
                font-size: 14px !important;
            }

            .f-tag {
                font-size: 12px !important;
            }

            .f-text {
                font-size: 10px;
            }
        }

        @media only screen and (max-width: 780px) {
            .f-title {
                font-size: 18px;
            }

            .f-tag {
                font-size: 16px !important;
            }

            .f-text {
                font-size: 14px;
            }
        }

        @media only screen and (min-width: 781px) {
            .f-title {
                font-size: 20px;
            }

            .f-tag {
                font-size: 18px !important;
            }

            .f-text {
                font-size: 16px;
            }

        }
    </style>
</head>

<body>

    <div class="container-fluid" style="padding: 0 20px 0 30px">

        <table style="width: 100%; border: none; padding: 0;">
            <tr>
                <td style="text-align: end; vertical-align: middle; width:10%; padding: 0;">
                    <!-- Image (Logo) -->
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/PSAU_logo.png'))) }}"
                        alt="PSAU Logo" style="height: 100px;">
                </td>
                <td style="text-align: start; vertical-align: start; padding: 0; ">
                    <!-- University Name -->
                    <div class="f-title"
                        style="text-transform: uppercase;  font-weight: bold; margin-left:10px; padding-top: 20px">
                        Pampanga State Agricultural University
                    </div>
                    <!-- Office Name -->
                    <div class="f-tag" style="font-weight: 700; margin-left:10px">
                        Office of Student Affairs and Services
                    </div>
                    <!-- Border Line -->
                    <div class="border-line"
                        style="display: inline-block; border-bottom: 1px solid black; width: 100%;">
                    </div>
                </td>
            </tr>
        </table>

        <p style="margin-bottom: 20px; margin:auto; text-align: center"><strong style="text-transform: uppercase;">
                notice of evaluation result</strong></p>

        <p style="margin-bottom: 10px">Hi, <strong style="text-transform: uppercase;">{{ $applicant_name }}</strong></p>
        <p style="margin-bottom: 20px">Temporary Student No. <strong
                style="text-transform: uppercase;">{{ $student_no }}</strong></p>

        <p style="margin-bottom: 10px"><strong>Congratulations for being TEMPORARILY ADMITTED to the
                {{-- {{ $program_name }} --}}
                program at Pampanga State Agricultural University (PSAU)! </strong>
        </p>
        <p style="margin-bottom: 20px; font-size: 10px">
            Your admission is temporary pending the submission of admission requirements and checking of your complete
            report
            card/TOR.
        </p>
        <p style="margin-bottom: 20px">
            Please <strong>read carefully and follow ALL</strong> instructions below to proceed with your admissions to
            PSAU.
            Uulitin po namin,
            <strong style="color: red"> PAKIBASA PO AT PAKISUNDAN LAHAT NG INSTRUCTIONS</strong> para po kapag nagpunta
            kayo sa
            PSAU, wala po kayong maging problema at hindi po masayang ang oras at byahe ninyo:

        </p>

        <ol style="margin-bottom: 20px">
            <li>
                <strong>Please prepare your admission requirements for submission.</strong> admission requirements in a
                brown
                envelope. Write your name and temporary student number on the envelope.
                <br>Please ensure that
                <ul>
                    <li>Documents are complete</li>
                    <li>Documents are all <strong>ORIGINAL</strong></li>
                    <li>Documents are signed properly by all concerned</li>
                </ul>
            </li>
        </ol>
        <ol style="margin-bottom: 20px">
            <li> <strong>
                    Access the STUDENT INFORMATION FORM
                </strong> at <br> <a href="{{ route('ApplicantFormGenerate', $id) }}"> Click here...
                </a>
                <br> <strong>PRINT the form, read, fill out completely and attach your photo.</strong>
            </li>
            <li> <strong>
                    Access the STUDENT’S PLEDGE FORM
                </strong> at <br> <a
                    href="https://drive.google.com/file/d/1x4DY1dZxZMKqKFD1HeGsXC5DRO4-QVhS/view?usp=sharing">
                    https://drive.google.com/file/d/1x4DY1dZxZMKqKFD1HeGsXC5DRO4-QVhS/view?usp=sharing
                </a>
                <br> <strong>PRINT the form, READ, fill out completely and sign it. Write your parent/guardian’s name
                    and have
                    him/her sign the form. Go to a Notary Public</strong> (anywhere within the Philippines) <strong>and
                    have the
                    form notarized. </strong>
                You would have to pay a minimal amount for this.
            </li>
            <li> <strong>
                    Please fill out this Google form for your PSAU STUDENT ID:
                </strong> <br> <a href="https://forms.gle/MCR8W7eaAvctW5Dd8">
                    https://forms.gle/MCR8W7eaAvctW5Dd8
                </a>
                <br>Your temporary student number is on top of this document, below the greeting.
            </li>
            <li> <strong>
                    Go to the PSAU campus on
                </strong>
                <strong style="color: red">NOW</strong>
                <br>Please go to the ADMISSIONS and REGISTRATION BUILDING,
                first building on your left as you enter the main gate.
                <strong>There is only a limited amount of time for each batch so we
                    please ask that you come on or before your scheduled time. Consider
                    vehicle and foot traffic on your way to PSAU.</strong>

                <p style="margin-top: 15px">You will submit the following:</p>
                <ul>
                    <li>Admission requirements (Complete and all original)</li>
                    <li>Student Information form (Filled out and signed with photo)</li>
                    <li>Student’s Pledge Form (Filled out, signed and notarized)</li>
                </ul>
                <p style="margin-top: 15px"><strong>If the above documents (admission requirements,
                        Student Information Form, Student’s Pledge Form, Medical Health Form) are NOT COMPLETE,
                        you will NOT be able to proceed here.</strong></p>

                <p style="margin-top: 15px">If complete, on this day, you will also</p>
                <ul>
                    <li>Be enrolled in your respective program</li>
                    <li>Apply for your PSAU student ID</li>
                </ul>
                <p style="margin-top: 15px">RA10931 or the Unified Access to Tertiary Education Act mandates free
                    tuition and other fees in the undergraduate level in state colleges and universities. You WILL
                    NOT PAY anything to be enrolled at PSAU. You just need to submit the complete admission
                    requirements, be a good student and follow the university’s rules and regulations.
                    <strong> Free tuition and other fees are NOT applicable for second coursers. </strong>
                </p>
            </li>
            <li>
                Bring your own pen. You may also want to bring drinking water and some snacks.
            </li>


        </ol>
        <p style="margin-bottom: 20px">Thank you and see you at PSAU!</p>

        <p><strong>OFFICE OF ADMISSIONS AND REGISTRATION</strong></p>
        <p>Pampanga State Agricultural University
            <br>Magalang, Pampanga
        </p>

    </div>

</body>

</html>
