<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PSAU | PDF</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon" />
    {{-- @include('layout.link') --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
            /* Adjust the font size */
        }

        .container-fluid {
            margin-top: 20px;
            padding: 0 20px 50px 30px;
        }
    </style>
</head>

<body>
    <div class="container-fluid contents">
        {{-- HEADER --}}
        <table style="width: 100%; border: none; padding: 0;">
            <tr>
                <td style="text-align: end; vertical-align: middle; width:10%; padding: 0;">
                    <!-- Image (Logo) -->
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/PSAU_logo.png'))) }}"
                        alt="PSAU Logo" style="height: 100px;">
                </td>
                <td style="text-align: start; vertical-align: start; padding: 0;">
                    <!-- University Name -->
                    <div class="f-title" style="text-transform: uppercase;  font-weight: bold; margin-left:10px; padding-top:20px">
                        Pampanga State Agricultural University
                    </div>
                    <!-- Office Name -->
                    <div class="f-tag" style="font-weight: 700; margin-left:10px">
                        Office of Admissions and Registration
                    </div>
                    <!-- Border Line -->
                    <div class="border-line" style="display: inline-block; border-bottom: 1px solid black; width: 75%;">
                    </div>
                </td>
            </tr>
        </table>

        <div class="container-content" style="padding-right: 20px;">
            <div class="sub-title"
                style="  text-transform: uppercase;
                padding-top: 5%;
                align-items: center;
                font-weight: 700;
                text-align: center;">
                student information form
            </div>

            <table style="width: 100%; border-collapse: collapse; border: none;">
                <!-- Student Number -->
                <tr>
                    <td style="padding: 2px; font-size: 12px;" width="20%">Student No.:</td>
                    <td style="padding: 2px;" width="100%">
                        <div class="" style="border-bottom: 1px solid black;  font-size: 12px;" width="100%">
                             {{ $user['applicant_no'] }}</div>
                    </td>
                    <td style="width: 10%; padding: 5px;" rowspan="3" valign="top">
                        <div
                            style="border: 1px solid black; height:100px; width: 200px; text-align: center; padding-top: 50px; margin-left: 10px;">
                            2x2<br>Picture
                        </div>
                    </td>
                </tr>
                <!-- Name -->
                <tr>
                    <td style="padding: 2px; font-size: 12px;">Name (Print):</td>
                    <td style="padding: 2px; ">
                        <table style="width: 100%;">
                            <tr>
                                <td
                                    style="font-size: 12px; border-bottom: 1px solid black; text-align: center; text-transform: uppercase">
                                    {{ $user['last_name'] }}
                                </td>
                                <td
                                    style="font-size: 12px;  border-bottom: 1px solid black; text-align: center; text-transform: uppercase ">
                                    {{ $user['first_name'] }}
                                </td>
                                <td
                                    style="font-size: 12px; text-align: center;  border-bottom: 1px solid black; text-transform: uppercase">
                                    @if ($user['middle_name'] != null)
                                        {{ strtoupper(substr($user['middle_name'], 0, 1)) }}
                                    @else
                                        N/A
                                    @endif

                                </td>
                            </tr>
                            <tr style="color: #555;">
                                <td style="font-size: 12px; text-align: center; ">Surename</td>
                                <td style="font-size: 12px; text-align: center; ">Name</td>
                                <td style="font-size: 12px; text-align: center;">M.I</td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <!-- Nickname -->
                <tr>
                    <td style="padding: 2px; font-size: 12px;" width="20%">Nick name:</td>
                    <td style="padding: 2px;" width="100%">
                        <div class="" style="border-bottom: 1px solid black;  font-size: 12px;" width="100%"> .
                        </div>
                    </td>
                </tr>
            </table>


            {{-- courses --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="5%">Courses: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            .{{ $user['course'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="5%">Major: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            .
                        </div>
                    </td>
                </tr>
            </table>
            {{-- sex info --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px" width="5%">Sex: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['gender'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="15%">Date of Birth: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['birth_date'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="13%">Weight (kg):</td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; font-size: 12px">
                            .
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="13%">Height (m): </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div style="display: inline-block; border-bottom: 1px solid black; width: 100%; ">
                            .
                        </div>
                    </td>
                </tr>
            </table>

            {{-- Birth --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="15%">Place of Birth </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase ">
                            {{ $user['place_birth'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="13%">Contact No.: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div style="display: inline-block; border-bottom: 1px solid black; width: 100%; ">
                            {{ $user['number'] }}
                        </div>
                    </td>
                </tr>
            </table>
            {{-- address --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="16%">Home Address </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['barangay'] }}, {{ $user['municipality'] }}, {{ $user['province'] }}
                        </div>
                    </td>
                </tr>
            </table>
            {{-- stay PSAU --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="28%">Address while staying at PSAU: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div style="display: inline-block; border-bottom: 1px solid black; width: 100%; ">
                            .
                        </div>
                    </td>
                </tr>
            </table>
            {{-- skills --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px; width: 15% ; font-size: 12px">Special Skill(s):</td>
                    <td style=" padding: 2px; width: 89%; ">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%;font-size: 12px ">
                            .
                        </div>
                    </td>
                </tr>
            </table>




            <div class="mt-4 " style="margin-top: 40px; font-size: 12px">
                Name of Parents and Address (State if deceased)
            </div>

            {{-- father --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="5%">Father: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['f_name'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="5%">Occupation: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['f_occupation'] }}
                        </div>
                    </td>
                </tr>
            </table>
            {{-- Mother --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="5%">Mother: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; font-size: 12px; text-transform: uppercase">
                            {{ $user['m_name'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="5%">Occupation: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase ">
                            {{ $user['m_occupation'] }}
                        </div>
                    </td>
                </tr>
            </table>
            {{-- address --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="5%">Address: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['m_address'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="13%">Contact No: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['m_contact'] }}
                        </div>
                    </td>
                </tr>
            </table>

            <div class="" style="margin-top: 40px; font-size: 12px">
                Name and Address of Person/Guardian supporting you (if any)
            </div>
            {{-- address --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="5%">Name: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['g_name'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="5%">Relationship: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div style="display: inline-block; border-bottom: 1px solid black; width: 100%; ">
                            .
                        </div>
                    </td>
                </tr>
            </table>
            {{-- address --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px " width="5%">Address: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div
                            style="display: inline-block; border-bottom: 1px solid black; width: 100%; text-transform: uppercase">
                            {{ $user['g_address'] }}
                        </div>
                    </td>
                    <td style=" padding: 2px; font-size: 12px" width="13%">Contact No.: </td>
                    <td style=" padding: 2px; font-size: 12px">
                        <div style="display: inline-block; border-bottom: 1px solid black; width: 100%; ">
                            {{ $user['g_contact'] }}
                        </div>
                    </td>
                </tr>
            </table>

            {{-- 1 --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px">
                        1. Are you a member of any organization such as clubs, societies, fraternities, sororities,
                        etc.? <br>
                        Please check YES <span
                            style=" display: inline-block; border-bottom: 1px solid black; width: 50px;"></span> NO
                        <span style=" display: inline-block; border-bottom: 1px solid black;  width: 50px;"></span>;
                        If YES,
                        please write all membership.
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=""
                            style=" border-bottom: 1px solid black; width: 100%; margin-top: 20px;
                            margin-bottom: 20px;">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="" style=" border-bottom: 1px solid black; width: 100%;">
                        </div>
                    </td>
                </tr>
            </table>
            {{-- 2 --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; font-size: 12px ">
                        2. Have you ever violated any school rules and regulations before? <br> Please check:
                        <span style=" display: inline-block; border-bottom: 1px solid black; width: 50px;"></span> NO
                        <span style=" display: inline-block; border-bottom: 1px solid black;  width: 50px;"></span>;
                        If YES,
                        please write all violations.
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=""
                            style=" border-bottom: 1px solid black; width: 100%; margin-top: 20px;
                            margin-bottom: 20px;">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="" style=" border-bottom: 1px solid black; width: 100%;">
                        </div>
                    </td>
                </tr>
            </table>

            <div class="mt-4" style="margin-top: 40px; font-size: 12px">
                I declare under penalties of perjury that this information which has made in good faith,
                verified by me, to the best of my knowledge and belief is true and correct. For any false information
                and for my violation(s) that I may commit in this University, I am willing to subject myself to penalty
                or punishment in accordance with the Student Code of Discipline and or other University policies, rules
                and regulations.
            </div>
            {{-- signature --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 50px">
                <tr>
                    <td style=" padding: 2px; " width="80%">
                    </td>
                    <td style=" padding: 2px; " width="20%">
                        <div class="text-center">
                            <div style=" display: inline-block; border-bottom: 1px solid black;  width: 300px;"></div>
                            <div class="text-center" style="text-align: center; font-size: 12px">Signature</div>
                        </div>
                    </td>
                </tr>
            </table>
            {{-- date  --}}
            <table style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 30px">
                <tr>
                    <td style=" padding: 2px; " width="80%">
                    </td>
                    <td style=" padding: 2px; " width="20%">
                        <div class="text-center">
                            <div style=" display: inline-block; border-bottom: 1px solid black;  width: 300px;"></div>
                            <div class="text-center" style="text-align: center; font-size: 12px">Date</div>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="" style="text-transform: uppercase; font-size: 12px">insurance</div>


            {{-- insurance  --}}
            <table style="width: 100%; border-collapse: collapse; gap:0; margin-top: 10px">
                <tr>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px" width="8%">
                        School Year
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                </tr>
                <tr>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px" width="8%">
                        Receipt No.
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                </tr>
                <tr>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px" width="8%">
                        Date
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                    <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                    </td>
                </tr>
            </table>


            <div class="mt-4 "
                style="margin-top: 40px; text-aline: center; text-transform: uppercase; font-size: 12px">anedotal
                records</div>


            {{-- anedota  --}}
            <table style="width: 100%; border-collapse: collapse; gap:0; margin-top: 10px">
                <thead>
                    <tr>
                        <td style=" padding: 2px; border: 1px solid black; font-size: 12px" width="15%">
                            Date
                        </td>
                        <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                            Activities/Particulars
                        </td>
                        <td style=" padding: 2px; border: 1px solid black; font-size: 12px">
                            Remarks
                        </td>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                    </tr>
                    <tr>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                    </tr>
                    <tr>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                    </tr>
                    <tr>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                    </tr>
                    <tr>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                    </tr>
                    <tr>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                        <td style=" padding: 15px; border: 1px solid black; font-size: 12px">
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="" style="margin-top: 40px; margin-bottom:40px; font-size: 12px">NOTED:</div>
            {{-- osas --}}
            <table
                style="width: 100%; border-collapse: collapse; border: none; gap:0; margin-top: 50px: padding-bottom: 50px">
                <tr>

                    <td style=" padding: 2px; " width="20%">
                        <div class="">
                            <div style=" display: inline-block; border-bottom: 1px solid black;  width: 300px;"></div>
                            <div class="text-center" style="text-align: center; font-size: 12px">OSAS Director</div>
                        </div>
                    </td>
                    <td style=" padding: 2px; " width="80%">
                    </td>
                </tr>
            </table>

        </div>
    </div>


</body>

</html>
