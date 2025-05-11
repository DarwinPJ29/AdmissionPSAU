<p style="margin-bottom: 20px; margin:auto; text-align: center"><strong style="text-transform: uppercase;">
        notice of evaluation result</strong></p>
<p style="margin-bottom: 10px">Hi, <strong style="text-transform: uppercase;">{{ $applicant_name }}</strong></p>
<p style="margin-bottom: 20px">Application No. <strong style="text-transform: uppercase;">{{ $applicant_no }}</strong></p>

<p style="margin-bottom: 20px"><strong>It is with regret that you are informed that</strong> you were
    <strong>NOT ADMITTED </strong> to your first-choice program {{ $reasons[0][0] }} due to {{ $reasons[0][1] }},
    and {{ $reasons[1][0] }} due to {{ $reasons[1][1] }}
</p>
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
