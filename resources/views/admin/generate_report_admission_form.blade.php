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


        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="padding: 0 20px 0 30px">

        <table style="width: 100%; border: none; padding: 0;">
            <tr>
                <td style="text-align: end; vertical-align: middle; width:10%; padding: 0; border: none">
                    <!-- Image (Logo) -->
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/PSAU_logo.png'))) }}"
                        alt="PSAU Logo" style="height: 100px;">
                </td>
                <td style="text-align: start; vertical-align: start; padding: 0; border: none ">
                    <!-- University Name -->
                    <div class="f-title"
                        style="text-transform: uppercase;  font-weight: bold; margin-left:10px; padding-top: 20px">
                        Pampanga State Agricultural University
                    </div>
                    <!-- Office Name -->
                    <div class="f-tag" style="font-weight: 700; margin-left:10px">
                        Office of Admissions and Registration
                    </div>
                    <!-- Border Line -->
                    <div class="border-line"
                        style="display: inline-block; border-bottom: 1px solid black; width: 100%;">
                    </div>
                </td>
            </tr>
        </table>

        <div style="text-transform: uppercase; margin-top: 40px; font-weight: 600">section a: general information</div>
        <table style="width: 100%; padding: 0; margin: 0">
            <tr>
                <td colspan="6" style="text-align: start; vertical-align: start; width:100% ;">
                    <div class="">Name:</div>
                    <div style="margin-left: 50px; padding:2px; text-transform:capitalize">
                        @if ($user->prefix != null)
                            {{ $user->prefix }}
                        @else
                        @endif
                        {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}
                        @if ($user->suffix != null)
                            {{ $user->suffix }}
                        @else
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: start; vertical-align: start; width: 10%">
                    <div class="">Sex:</div>
                    <div style=" padding:2px; text-transform:capitalize">{{ $user->gender }} </div>
                </td>
                <td style="text-align: start; vertical-align: start; width: 20%">
                    <div class="">Date of Birth:</div>
                    <div style=" padding:2px;  text-transform:capitalize">{{ $user->birth_date }}</div>
                </td>
                <td style="text-align: start; vertical-align: start; width: 10%">
                    <div class="">Age:</div>
                    <div style=" padding:2px">{{ $user->age }}</div>
                </td>
                <td style="text-align: start; vertical-align: start; width: 20%">
                    <div class="">Place of Birth:</div>
                    <div style=" padding:2px;  text-transform:capitalize">{{ $user->place_birth }}</div>
                </td>
                <td style="text-align: start; vertical-align: start; width: 20%">
                    <div class="">Citizenship:</div>
                    <div style=" padding:2px;  text-transform:capitalize">{{ $user->citizenship }}</div>
                </td>
                <td style="text-align: start; vertical-align: start; width: 20%">
                    <div class="">Religion:</div>
                    <div style=" padding:2px;  text-transform:capitalize">{{ $user->religion }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: start; vertical-align: start;">
                    <div class="">Home Address:</div>
                    <div style="padding:2px;  text-transform:capitalize">
                        {{ $user->barangay }}, {{ $user->municipality }}, {{ $user->province }}
                    </div>
                </td>
                <td style="text-align: start; vertical-align: start;">
                    <div class="">Cell Phone No.:</div>
                    <div style=" padding:2px">
                        {{ $user->number }}
                    </div>
                </td>
                <td colspan="2" style="text-align: start; vertical-align: start;">
                    <div class="">Email Address:</div>
                    <div style="padding:2px">
                        {{ $user->email }}
                    </div>
                </td>
            </tr>
        </table>

        <div style="text-transform: uppercase; margin-top: 40px; font-weight: 600">section b: program choice</div>
        <table style="width: 100%; padding: 0; margin: 0">
            <tr>
                <td colspan="3"
                    style="text-align: center; vertical-align: start; width:100% ;text-transform: uppercase;font-weight: 500">
                    Program applied for
                </td>
            </tr>
            <tr>
                <td style="text-align: end; vertical-align: start; width: 30%">
                    First Choice
                </td>
                <td colspan="2"
                    style="text-align: start; vertical-align: start; width: 70%;text-transform:capitalize">
                    {{ $user->first_choice }}
                </td>
            </tr>
            <tr>
                <td style="text-align: end; vertical-align: start; width: 30%;">
                    Second Choice
                </td>
                <td colspan="2"
                    style="text-align: start; vertical-align: start; width: 70%; text-transform:capitalize">
                    {{ $user->second_choice }}
                </td>
            </tr>
            <tr>
                <td style="text-align: end; vertical-align: start; width: 30%">
                    Preferred Date of Enrollment:
                </td>
                <td style="text-align: start; vertical-align: start; width: 30%">
                    School Year: {{ $user->school_year }}
                </td>
                <td style="text-align: start; vertical-align: start; width: 30%">
                    Semester: {{ $user->semester == 1 ? '1st' : '2nd' }}
                </td>
            </tr>
        </table>

        <div style="text-transform: uppercase; margin-top: 40px; font-weight: 600">section c: educational history</div>
        <table style="width: 100%; padding: 0; margin: 0">
            <tr>
                <td colspan="4" style="text-align: start; vertical-align: start; width:100% ;font-size: 12px">
                    Academic background: List of schools attended. For transferees, list the last school attended.
                </td>
            </tr>
            <tr>
                <td
                    style="text-align: center; vertical-align: start; font-weight: 600;text-transform: uppercase; width: 20%">
                    School attended
                </td>
                <td style="text-align: center; vertical-align: start; font-weight: 600;text-transform: uppercase;">
                    name
                </td>
                <td style="text-align: center; vertical-align: start; font-weight: 600;text-transform: uppercase;">
                    address
                </td>
                <td style="text-align: center; vertical-align: start; font-weight: 600;text-transform: uppercase;">
                    inclusive date
                </td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Elementary
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->elem_name }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->elem_address }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->elem_date }}
                </td>

            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Senior High
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->high_name }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->high_address }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->high_date }}
                </td>

            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Last School Attended
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->attended_name }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->attended_address }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->attended_date }}
                </td>

            </tr>

        </table>

        <table style="width: 100%; padding: 0; margin: 0; margin-top: 40px">
            <tr>
                <td colspan="2" style="text-align: start; vertical-align: start ; font-weight: 400;">
                    Type of SHS Graduated from: @if ($user->shs_from == 1)
                        Private
                    @else
                        Public
                    @endif
                </td>
                <td style="text-align: start; vertical-align: start ; font-weight: 400;">
                    Date of Graduation: {{ $user->shs_date }}
                </td>
            </tr>
            <tr>
                <td style="text-align: start; vertical-align: start ; font-weight: 400;">
                    SHS Average Grade: {{ $user->shs_average }}
                </td>
                <td style="text-align: start; vertical-align: start ; font-weight: 400;">
                    LRN: {{ $user->lrn }}
                </td>
                <td style="text-align: start; vertical-align: start ; font-weight: 400;  text-transform:capitalize">
                    First Time to Enter College? {{ $user->first_time }}
            </tr>
        </table>

        <div style="text-transform: uppercase; margin-top: 50px; font-weight: 600">section d: PARENTS’/GUARDIAN’S
            BACKGROUND INFORMATION</div>
        <table style="width: 100%; padding: 0; margin: 0">
            <tr>
                <td
                    style="text-align: center; vertical-align: start; font-weight: 600;text-transform: uppercase; width: 20%">

                </td>
                <td style="text-align: center; vertical-align: start; font-weight: 600;text-transform: uppercase;">
                    father
                </td>
                <td style="text-align: center; vertical-align: start; font-weight: 600;text-transform: uppercase;">
                    mother
                </td>
                <td style="text-align: center; vertical-align: start; font-weight: 600;text-transform: uppercase;">
                    guardian
                </td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Full Name
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->f_name }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->m_name }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->g_name }}
                </td>

            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Date of Birth
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->f_birth }}
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->m_birth }}
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->g_birth }}
                </td>

            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Highest Educational Attainment
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->f_attainment }}
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->m_attainment }}
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->g_attainment }}
                </td>

            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Occupation/Employment
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->f_occupation }}
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->m_occupation }}
                </td>
                <td style="text-align: center; vertical-align: start;  text-transform:capitalize">
                    {{ $user->g_occupation }}
                </td>

            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Company Name/Address
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->f_address }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->m_address }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->g_address }}
                </td>

            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Monthly Income
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->f_income }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->m_income }}
                </td>
                <td style="text-align: center; vertical-align: start; text-transform:capitalize">
                    {{ $user->g_income }}
                </td>

            </tr>
            <tr>
                <td style="text-align: center; vertical-align: start;">
                    Contact No.
                <td style="text-align: center; vertical-align: start;">
                    {{ $user->f_contact }}
                </td>
                <td style="text-align: center; vertical-align: start;">
                    {{ $user->m_contact }}
                </td>
                <td style="text-align: center; vertical-align: start;">
                    {{ $user->g_contact }}
                </td>

            </tr>

        </table>

        <div style="text-transform: uppercase; margin-top: 40px; font-weight: 600">
            section E: STUDENT DECLARATION
        </div>
        <div style="margin-top: 20px;">
            <span style="margin-left:5%"> I hereby</span> I hereby affirm that all information supplied here is
            complete and accurate.
            Withholding or giving false information will make me ineligible for admission or be
            subjected to dismissal. I agree to abide by the policies, rules and regulations of
            Pampanga State Agricultural University.
        </div>

        <table style="width: 100%; padding: 0; margin: 0; margin-top:50px; border:none">
            <tr>
                <td style="width: 50%; align-text:center; border:none">
                    <div
                        style="align-text:center; display: inline-block; border-bottom: 1px solid black; width: 100%;">
                    </div>
                    <div style="text-align:center">Signature</div>
                </td>
                <td style="width: 50%; align-text:center; border:none">
                    <div
                        style="align-text:center; display: inline-block; border-bottom: 1px solid black; width: 100%;">
                    </div>
                    <div style="text-align:center">Date</div>
                </td>
            </tr>
        </table>
        <table style="width: 100%; padding: 0; margin: 0; margin-top:50px; border:none;">
            <tr>
                <td style="width: 25%; align-text:center; border:none">

                </td>
                <td style="width: 50%; align-text:center; border:none">
                    {{-- <div
                        style="align-text:center; display: inline-block; border-bottom: 1px solid black; width: 100%;">
                    </div> --}}
                    {{-- <div style="text-align:center; font-weight:600">ALAWI C. CANLAS, Ed.D.</div>
                    <div style="text-align:center">Director, Admission and Registration Services</div> --}}
                </td>
                <td style="width: 25%; align-text:center; border:none">

                </td>
            </tr>
        </table>

    </div>

</body>

</html>
