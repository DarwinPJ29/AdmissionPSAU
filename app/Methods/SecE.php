<?php

namespace App\Methods;

use App\Mail\FormDone;
use App\Models\Information;
use App\Models\User;
use App\Services\Status;
use Illuminate\Support\Facades\Mail;

trait SecE
{
    public function SubmitForm()
    {
        $user = User::find(auth()->user()->id);
        if ($user != null) {
            $user->status = Status::Requirement;
            $user->update();

            return redirect()->route('loading');
        }
    }


    public function SecEPrev()
    {
        $this->section = 4;
    }
}
