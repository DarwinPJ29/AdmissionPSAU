<?php

namespace App\Methods;

use App\Models\User;

trait SecE
{
    public function SubmitForm()
    {
        $user = User::find(auth()->user()->id);
        if ($user != null) {
            $user->form_done = 1;
            $user->update();
            return redirect()->route('loading');
        }
    }


    public function SecEPrev()
    {
        $this->section = 4;
    }
}