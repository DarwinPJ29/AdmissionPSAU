<p style="margin-bottom: 10px">Hello <strong>{{ $applicant_name }}</strong></p>
<p style="margin-bottom: 10px">This is the result of your evaluation </p>
<p>Selected Course(s)</p>
@foreach ($result as $result)
    <p class="text-transform: uppercase;">{{ $result }}</p>
@endforeach
<p style="margin-top: 30px; color:red">(Please disregard this email address if have any concern contact PSAU)</p>
