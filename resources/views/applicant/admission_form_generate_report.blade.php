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
        font-size: 8pt;
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
</style>

<h1>{{ $user->applicant_no }}</h1>
