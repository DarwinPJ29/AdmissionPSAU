<p style="margin-bottom: 10px">Dear, <strong style="text-transform: uppercase;">{{ $applicant_name }}</strong></p>
<p style="margin-bottom: 10px">We are pleased to inform you that the results of your evaluation have been meticulously reviewed and assessed, </p>
<p>Selected Course(s) passed.</p>

@if ($result != null)
@foreach ($result as $result)
<p class="text-transform: uppercase; margin-bottom: 10px">{{ $result }}</p>

@endforeach
<p class="">and as a result, we can confirm that you have met all the necessary criteria and standards set forth by our institution.
    Consequently, you are now formally recognized for your achievements, and this successful evaluation underscores your capabilities and
    dedication. We commend you on this accomplishment and look forward to your continued contributions
    and engagement with our esteemed organization.</p>
@endif
<p style="margin-top: 30px; color:red">(Please disregard this email address if have any concern contact PSAU)</p>
