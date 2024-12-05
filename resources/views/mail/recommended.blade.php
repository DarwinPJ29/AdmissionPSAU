<p style="margin-bottom: 10px">
    Hi, <strong style="text-transform: uppercase;">{{ $applicant_name }}</strong></p>
<p style="margin-bottom: 10px">Thank you for applying at PSAU!</strong></p>
<p style="margin-bottom: 10px">Please log into your PSAU account and review the recommended
    courses based on your evaluation exam results. Kindly select the course that best aligns with
    your academic goals and interests.
</p>
<p style="margin-top: 30px; color:red">(Please disregard this email address if have any concern contact PSAU)</p>
{{ $applicant_no }}
@foreach ($reasons as $index => $reason)
    <label style="font-size: 20px">
        {{ $index + 1 == 1 ? 'First Choice: ' : 'Second Choice: ' }} {{ $reason[0] }}
    </label>
    <span class="text-muted" style="font-size: 15px">Reason:</span>
    <p style="font-size: 18px">{{ $reason[1] }}</p>
@endforeach
<label class="mb-3 f-text fw-bold">Recommend Course/s</label>
<div class="row justify-content-center">
    @foreach ($recomendeds as $item)
        <div class="col-sm-6 col-md-3 text-center f-text">
            <div class="d-flex border-bottom border-dark">
                <input type="radio" class="me-2" name="choice" id="choice_{{ $item->id }}"
                    value="{{ $item->id }}">
                <label for="choice_{{ $item->id }}">{{ $item->title }}</label>
            </div>
            <div class="text-center">{{ $item->acronym }}</div>
        </div>
    @endforeach
</div>
