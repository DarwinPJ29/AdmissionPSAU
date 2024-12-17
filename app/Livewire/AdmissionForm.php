<?php

namespace App\Livewire;

use App\Methods\SecA;
use App\Methods\SecB;
use App\Methods\SecC;
use App\Methods\SecD;
use App\Methods\SecE;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class AdmissionForm extends Component
{
    public $section = 2;

    use SecA;
    use SecB;
    use SecC;
    use SecD;
    use SecE;

    public $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function Mount()
    {
        $this->SecAGetData();
        $this->SecBGetData();
        $this->SecCGetData();
        $this->SecDGetData();
    }

    public function render()
    {
        return view('livewire.admission-form');
    }
}
