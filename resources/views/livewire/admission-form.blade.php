<div>
    @if ($section == 1)
        @include('applicant.forms.sectionA')
    @elseif ($section == 2)
        @include('applicant.forms.sectionB')
    @elseif ($section == 3)
        @include('applicant.forms.sectionC')
    @elseif ($section == 3)
        @include('applicant.forms.sectionD')
    @elseif ($section == 3)
        @include('applicant.forms.sectionE')
    @endif
</div>
