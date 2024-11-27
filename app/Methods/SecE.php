<?php

namespace App\Methods;

use App\Mail\FormDone;
use App\Models\Information;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

trait SecE
{
    public function SubmitForm()
    {
        $user = User::find(auth()->user()->id);
        if ($user != null) {
            $user->form_done = 1;
            $user->update();

            $inform = Information::select('first_name', 'middle_name', 'last_name')->where('user_id', $user->id)->first();

            $applicant_name = $inform->first_name . " " . $inform->middle_name . " " . $inform->last_name;

            Mail::to($user->email)->send(new FormDone(
                $applicant_name,
            ));

            return redirect()->route('loading');
        }
    }


    public function SecEPrev()
    {
        $this->section = 4;
    }
}
