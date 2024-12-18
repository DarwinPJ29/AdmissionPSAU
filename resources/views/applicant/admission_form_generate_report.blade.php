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
        <div class="container heading" style="  display: flex;
            flex: row;
            padding-left: 20px;">
            <div class="">
                <img src="{{ asset('images/PSAU_logo.png') }}" alt="" srcset="" class="logo"
                    style="max-height: 130px">
            </div>
            <div class="w-100 tagline" style=" padding-top: 3rem;
            font-size: 20px;">
                <div class=" title" style="text-transform: uppercase;">pampanga state agricultural university</div>
                <div class="tag" style="font-weight: 700;">Office of Student Affairs and Services</div>
                <div class="border-line"
                    style=" display: inline-block;
            border-bottom: 1px solid black;
            width: 75vw;">
                </div>
            </div>
        </div>
        <div class="container-content">

            <div class="sub-title"
                style="  text-transform: uppercase;
                padding-top: 5%;
                align-items: center;
                font-weight: 700;
                text-align: center;">
                student information form
            </div>

            <div class="grid"
                style="  display: grid;
                gap: 10px;
                grid-template-columns: 2fr .5fr;
                margin-top: 20px;">
                <div class="column">
                    <div class="line-1" style="display: flex;">
                        {{-- line1 --}}
                        <div class="">
                            Student No.:
                        </div>
                        <div class="underline-1"
                            style="display: inline-block;
                            border-bottom: 1px solid black;
                            width: 30%;
                            margin-left: 10px">
                            hjhh
                        </div>
                    </div>
                    {{-- line2 --}}
                    <div class="line-2 grid-2"
                        style=" display: grid;
                        gap: 10px;
                        grid-template-columns: .4fr 2.5fr;
                        margin-top: 20px;
                        padding: 0px;">
                        <div class="container-1" style="padding-top: 10px;">
                            Name (Print):
                        </div>
                        <div class="container-2" style="display: flex; gap: 20%;">
                            <div class=" ">
                                <div class="name-line"
                                    style="display: grid;
                                    gap: 10px;
                                    grid-template-columns: 1fr 1fr 1fr;">
                                    <div class="">
                                        <div class="name">
                                            Padre Juan
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class="name">
                                            Darwin Darwin
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class="text-center" style="text-align: center;">
                                            J
                                        </div>
                                    </div>
                                </div>
                                <div class="name-underline">
                                </div>
                                <div class="name-tag"
                                    style="display: grid;
                                    gap: 10px;
                                    grid-template-columns: 1fr 1fr 1fr;">
                                    <div class="">
                                        (Surname)
                                    </div>
                                    <div class="name">
                                        (Given Name)
                                    </div>
                                    <div class="">
                                        (M.I)
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="line-3" style="display: flex;  margin-top: 20px;">
                        {{-- line3 --}}
                        <div class="">
                            Nick Name:
                        </div>
                        <div class="underline-1"
                            style="display: inline-block;
                            border-bottom: 1px solid black;
                            width: 30%;
                            margin-left: 10px">
                            hjhh
                        </div>
                    </div>
                </div>
                <div class="column-2nd">
                    <div class="border-box "
                        style="border: 1px solid black;
                        height: 150px;
                        width: 200px;
                        padding: 3px;
                        margin-right: 50px;">
                        2x2 <br> Picture
                    </div>
                </div>
            </div>

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

                <div class="mb-2 mt-2" style=" display: inline-block; border-bottom: 1px solid black; width: 100%; margin-top: 20px;
                            margin-bottom: 20px;">
                </div>

                <div class="mb-2" style=" display: inline-block;  border-bottom: 1px solid black;  width: 100%; margin-bottom: 20px;">
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
            <table class="table table-column table-bordered border-dark">
                <thead>
                    <tr>
                        <td class="col-1">Schoo Year</td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Receipt No.</td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Date</td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                        <td class="col-1"></td>
                    </tr>
                </thead>
            </table>

            <div class="mt-4 text-center fw-bold text-uppercase" style="margin-top: 40px; text-aline: center; font-size: 700; text-transform: uppercase">anedotal records</div>
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
            <div class="mt-4 d-flex justify-content-start">
                <div class="text-center">
                    <div style=" display: inline-block; border-bottom: 1px solid black;  width: 300px;"></div>
                    <div class="text-center">OSAS Director</div>
                </div>
            </div>

        </div>
    </div>


</body>

</html>
{{-- <style>
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
</style> --}}

