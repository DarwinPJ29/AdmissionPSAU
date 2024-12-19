<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PSAU | PDF</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon" />
    {{-- @include('layout.link') --}}
</head>

<body>
    <div class="container-fluid contents">
        <table style="width: 100%; border: none; padding: 0; table-layout: fixed;">
            <tr>
                <td style="text-align: end; vertical-align: middle; width:20%; padding: 0;">
                    <!-- Image (Logo) -->
                    <img src="{{ url('/images/PSAU_logo.png') }}" alt="PSAU Logo" style="max-height: 130px;">
                </td>
                <td style="text-align: start; vertical-align: start; padding: 0;">
                    <!-- University Name -->
                    <div class="title" style="text-transform: uppercase; font-size: 24px; font-weight: bold;">
                        Pampanga State Agricultural University
                    </div>
                    <!-- Office Name -->
                    <div class="tag" style="font-weight: 700; font-size: 20px;">
                        Office of Student Affairs and Services
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

            {{-- <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr>
                    <td></td>
                    <td></td>
                    <td style="width: 25%; vertical-align: top; position:absolute; top:20%">
                        <div
                            style="border: 1px solid black; height: 100px; width: 100px; padding: 3px; text-align: center; margin-top: 30px;">
                            2x2 <br> Picture
                        </div>
                    </td>
                </tr>
            </table> --}}
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr>
                    <!-- Class Column -->
                    <td style="width: 75%; vertical-align: top; padding-right: 20px;">
                        <!-- Line 1: Student No. -->
                        <div style="display: flex;">
                            <div>Student No.:</div>
                            <div
                                style="display: inline-block; border-bottom: 1px solid black; width: 30%; margin-left: 10px;">
                                hjhh
                            </div>
                        </div>

                        <!-- Line 2: Name (Print) -->
                        <div style="display: grid; gap: 10px; grid-template-columns: 0.4fr 2.5fr; margin-top: 20px;">
                            <div style="padding-top: 10px;">Name (Print):</div>
                            <div>
                                <!-- Grid for Name -->
                                <div
                                    style="display: grid; gap: 10px; grid-template-columns: 1fr 1fr 1fr; align-items: center; border-bottom: 1px solid #000;">
                                    <div>Padre Juan</div>
                                    <div>Darwin</div>
                                    <div style="text-align: center;">J</div>
                                </div>

                                <!-- Grid for Labels -->
                                <div
                                    style="display: grid; gap: 10px; grid-template-columns: 1fr 1.5fr .5fr; font-weight: bold; font-size: 0.9em; color: #555;">
                                    <div>(Surname)</div>
                                    <div>(Given Name)</div>
                                    <div>(M.I)</div>
                                </div>

                            </div>
                        </div>

                        <!-- Line 3: Nick Name -->
                        <div style="display: flex; margin-top: 20px;">
                            <div>Nick Name:</div>
                            <div
                                style="display: inline-block; border-bottom: 1px solid black; width: 30%; margin-left: 10px;">
                                hjhh
                            </div>
                        </div>
                    </td>

                    <!-- Class-2nd Column -->
                    <td style="width: 25%; vertical-align: top; position:absolute; top:20%">
                        <div
                            style="border: 1px solid black; height: 100px; width: 100px; padding: 3px; text-align: center; margin-top: 30px;">
                            2x2 <br> Picture
                        </div>
                    </td>
                </tr>
            </table>


            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="border: 1px solid black; padding: 20px;" width="100">Student No.:</td>
                    <td style="border: 1px solid black; padding: 20px;">1224156</td>

                    <td style="border: 1px solid" rowspan="3">
                        <div
                            style="border: 1px solid black; height: 100px; width: 100px; padding: 3px; text-align: center; margin-top: 30px;">
                            2x2 <br> Picture
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 20px;"></td>

                    <td style="border: 1px solid black; padding: 20px;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 20px;"></td>

                    <td style="border: 1px solid black; padding: 20px;"></td>
                </tr>
            </table>

            <div class="row">
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Courses:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                        border-bottom: 1px solid black;
                        width: 30vw;
                        margin-left: 10px;">
                        data
                    </div>
                </div>
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Major:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                    border-bottom: 1px solid black;
                    width: 30vw;
                    margin-left: 10px;">
                        data
                    </div>
                </div>
            </div>
            <div class="row" style=" display: flex; margin-top: 10px;">
                <div class="d-flex">
                    <div>Sex:</div>
                    <div class="underline-3 w-100"></div>
                </div>
                <div class="d-flex">
                    <div>Date of Birth:</div>
                    <div class="underline-3 w-75"></div>
                </div>
                <div class="d-flex">
                    <div>Weight (kg):</div>
                    <div class="underline-3 w-50"></div>
                </div>
                <div class="d-flex">
                    <div>Height (m):</div>
                    <div class="underline-3 w-50"></div>
                </div>


            </div>
            <div class="row" style=" display: flex; margin-top: 10px;">
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Place of Birth:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                        border-bottom: 1px solid black;
                        width: 30vw;
                        margin-left: 10px;">
                        data
                    </div>
                </div>
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Contact no.:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                        border-bottom: 1px solid black;
                        width: 30vw;
                        margin-left: 10px;">
                        data
                    </div>
                </div>
            </div>
            <div class="d-flex" style=" display: flex; margin-top: 10px;">
                <div class="">
                    Home Address:
                </div>
                <div class="underline-4"
                    style=" display: inline-block;
                border-bottom: 1px solid black;
                width: 75%;
                margin-left: 10px">
                    data
                </div>
            </div>
            <div class="d-flex" style=" display: flex; margin-top: 10px;">
                <div class="col-3">
                    Address while staying at PSAU:
                </div>
                <div class="underline-4"
                    style=" display: inline-block;
                    border-bottom: 1px solid black;
                    width: 75%;
                    margin-left: 10px">
                    data
                </div>
            </div>
            <div class="d-flex" style=" display: flex; margin-top: 10px;">
                <div class="col-2">
                    Special Skill(s):
                </div>
                <div class="underline-4"
                    style=" display: inline-block;
                    border-bottom: 1px solid black;
                    width: 75%;
                    margin-left: 10px">
                    data
                </div>
            </div>
            <div class="mt-4 " style="margin-top: 40px;">
                Name of Parents and Address (State if deceased)
            </div>
            <div class="row" style=" display: flex; margin-top: 10px;">
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Father:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                    border-bottom: 1px solid black;
                    width: 30vw;
                    margin-left: 10px;">
                        datadata
                    </div>
                </div>
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Occupation:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                    border-bottom: 1px solid black;
                    width: 30vw;
                    margin-left: 10px;">
                        datadata
                    </div>
                </div>
            </div>
            <div class="row" style=" display: flex; margin-top: 10px;">
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Mother:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                        border-bottom: 1px solid black;
                        width: 30vw;
                        margin-left: 10px;">
                        data
                    </div>
                </div>
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Occupation:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                        border-bottom: 1px solid black;
                        width: 30vw;
                        margin-left: 10px;">
                        data
                    </div>
                </div>
            </div>
            <div class="row" style=" display: flex; margin-top: 10px;">
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Address:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                        border-bottom: 1px solid black;
                        width: 30vw;
                        margin-left: 10px;">
                        data</div>
                </div>
                <div class="d-flex" style=" display: flex; margin-top: 10px;">
                    <div>Contact No:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                        border-bottom: 1px solid black;
                        width: 30vw;
                        margin-left: 10px;">
                        data</div>
                </div>
            </div>
            <div class="mt-4" style="margin-top: 40px;">
                Name and Address of Person/Guardian supporting you (if any)
            </div>
            <div class="row" style=" display: flex; margin-top: 10px;">
                <div class="d-flex">
                    <div>Name:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                    border-bottom: 1px solid black;
                    width: 30vw;
                    margin-left: 10px;">
                        data</div>
                </div>
                <div class="d-flex">
                    <div>Relationship:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                    border-bottom: 1px solid black;
                    width: 30vw;
                    margin-left: 10px;">
                        data</div>
                </div>
            </div>
            <div class="row" style=" display: flex; margin-top: 10px;">
                <div class="d-flex">
                    <div>Address:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                    border-bottom: 1px solid black;
                    width: 30vw;
                    margin-left: 10px;">
                        data</div>
                </div>
                <div class="d-flex">
                    <div>Contact No:</div>
                    <div class="underline-2"
                        style="display: inline-block;
                    border-bottom: 1px solid black;
                    width: 30vw;
                    margin-left: 10px;">
                        data</div>
                </div>
            </div>
            <div class="mt-4 mb-3" style="margin-top: 40px;">
                1. Are you a member of any organization such as clubs, societies, fraternities, sororities,
                etc.?
                <br>Please check YES <span
                    style=" display: inline-block; border-bottom: 1px solid black; width: 100px;"></span> NO
                <span style=" display: inline-block; border-bottom: 1px solid black;  width: 100px;"></span>; If YES,
                please write all membership.
                <div class="mb-2 mt-2"
                    style=" display: inline-block; border-bottom: 1px solid black; width: 100%; margin-top: 20px;
                            margin-bottom: 20px;">
                </div>
                <div class="mb-2"
                    style=" display: inline-block;  border-bottom: 1px solid black;  width: 100%; margin-bottom: 20px;">
                </div>
            </div>
            <div class="mt-4 mb-2" style="margin-bottom: 20px; margin-top: 40px">
                2. Have you ever violated any school rules and regulations before? Please check:
                <span style=" display: inline-block; border-bottom: 1px solid black; width: 100px;"></span> NO
                <span style=" display: inline-block; border-bottom: 1px solid black;  width: 100px;"></span>; If YES,
                please write all violations.

                <div class="mb-2 mt-2"
                    style=" display: inline-block; border-bottom: 1px solid black; width: 100%; margin-top: 20px;
                            margin-bottom: 20px;">
                </div>

                <div class="mb-2"
                    style=" display: inline-block;  border-bottom: 1px solid black;  width: 100%; margin-bottom: 20px;">
                </div>
            </div>
            <div class="mt-4" style="margin-top: 40px">
                I declare under penalties of perjury perjury that this information which has made in good faith,
                verified by me, to the best of my knowledge and belief is true and correct. For any false information
                and for my violation(s) that I may commit in this University, I am willing to subject myself to penalty
                or punishment in accordance with the Student Code of Discipline and or other University policies, rules
                and regulations.
            </div>
            <div class="mt-4 end" style="margin-top: 40px; display: flex; justify-content: end;">
                <div class="text-center">
                    <div style=" display: inline-block; border-bottom: 1px solid black;  width: 300px;"></div>
                    <div class="text-center" style="text-align: center;">Signature</div>
                </div>
            </div>
            <div class="mt-4 end" style="margin-top: 40px; display: flex; justify-content: end;">
                <div class="text-center" style="text-align: center;">
                    <div style=" display: inline-block; border-bottom: 1px solid black;  width: 300px;"></div>
                    <div class="text-center" style="text-align: center;">Date</div>
                </div>
            </div>


            <div class="text-uppercase" style="text-transform: uppercase">insurance</div>
            <table class="table table-column table-bordered border-dark"
                style="width: 100%;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            margin-top: 20px;">
                <thead>
                    <tr>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px;
                            word-wrap: break-word;">
                            Schoo Year</td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                    </tr>
                    <tr>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                            Receipt No.</td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                    </tr>
                    <tr>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                            Date</td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                        <td class="col-1"
                            style="border: 1px solid #ddd;
                            padding: 3px;
                            text-align: left;
                            font-size: 12px; word-wrap: break-word;">
                        </td>
                    </tr>
                </thead>
            </table>

            <div class="mt-4 " style="margin-top: 40px; text-aline: center; text-transform: uppercase">anedotal
                records</div>
            <table class="table table-bordered mt-3 border-dark table-column">
                <thead>
                    <tr>
                        <th class="col-3 text-uppercase text-center">date</th>
                        <th class="col-6 text-uppercase text-center">activities/particulars</th>
                        <th class="col-3 text-uppercase text-center">remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-4" style="margin-top: 40px">NOTED:</div>
            <div class="mt-4 d-flex justify-content-start" style="margin-bottom: 50px">
                <div class="text-center">
                    <div style=" display: inline-block; border-bottom: 1px solid black;  width: 300px;"></div>
                    <div class="text-center">OSAS Director</div>
                </div>
            </div>

        </div>
    </div>


</body>

</html>
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12pt;
        /* Adjust the font size */
    }

    .container-fluid {
        margin-top: 20px;
    }

    .table {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th,
    .table td {
        border: 1px solid #ddd;
        padding: 3px;
        text-align: left;
        font-size: 12px;
        /* Adjust font size of table cells */
    }

    .table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table td {
        word-wrap: break-word;
        /* Ensure long words break within cells */
    }

    .heading {
        display: flex;
        flex: row;
        padding-left: 20px;
    }

    .tagline {
        padding-top: 3rem;
        font-size: 20px;
    }

    .title {
        text-transform: uppercase;
    }

    .tag {
        font-weight: 700;
    }

    .border-line {
        display: inline-block;
        border-bottom: 1px solid black;
        width: 75vw;
    }

    .contents {
        padding-left: 3rem;
        padding-left: 2rem;
    }

    .sub-title {
        text-transform: uppercase;
        padding-top: 5%;
        align-items: center;
        font-weight: 700;
        text-align: center;
    }

    .grid {
        display: grid;
        gap: 10px;
        grid-template-columns: 2fr .5fr;
        margin-top: 20px;
    }

    .grid-2 {
        display: grid;
        gap: 10px;
        grid-template-columns: .4fr 2.5fr;
        margin-top: 20px;
        padding: 0px;
    }

    .border-box {

        border: 1px solid black;
        height: 150px;
        width: 200px;
        padding: 3px;
        margin-right: 50px;
    }

    .line-1 {
        display: flex;
    }

    .line-3 {
        display: flex;
        margin-top: 20px;
    }

    .underline-1 {
        display: inline-block;
        border-bottom: 1px solid black;
        width: 30%;
        margin-left: 10px
    }

    .underline-4 {
        display: inline-block;
        border-bottom: 1px solid black;
        width: 75%;
        margin-left: 10px
    }

    .underline-2 {
        display: inline-block;
        border-bottom: 1px solid black;
        width: 30vw;
        margin-left: 10px;
    }

    .underline-3 {
        display: inline-block;
        border-bottom: 1px solid black;
        width: 10vw;
        margin-left: 10px;
    }

    .name-underline {
        display: inline-block;
        border-bottom: 1px solid black;
        width: 100%;
    }

    .name-line,
    .name-tag {
        display: grid;
        gap: 10px;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .container-2 {
        display: flex;
        gap: 20%;
    }

    .container-1 {
        padding-top: 10px;
    }

    .row,
    .d-flex {
        display: flex;
        margin-top: 10px;
    }

    .mt-4 {
        margin-top: 40px;
    }

    .mt-2 {
        margin-top: 20px;

    }

    .mb-2 {
        margin-bottom: 20px;
    }

    .end {
        display: flex;
        justify-content: end;
    }

    .text-center {
        text-align: center;
    }

    .text-uppercase {
        text-transform: uppercase;
        font-weight: 600;
    }

    .pi {
        display: flex;
        flex-direction: column;
        text-align: center;
        margin-top: 50px;
    }
</style>
