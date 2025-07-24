<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Sched;
use App\Models\Information;
use App\Models\Result;
use App\Models\User;
use App\Services\Core;
use App\Services\Status;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Schedule extends Controller
{
    public function schedule(Request $request)
    {
        if ($request->isMethod('get')) {

            $users = User::select('users.id', 'users.email', 'information.prefix', 'information.first_name', 'information.middle_name', 'information.last_name', 'information.suffix')
                ->where('users.id', '!=', auth()->user()->id)  // Corrected the access to the user ID
                ->where('users.role', 0)
                ->where('users.status', Status::ReqAccepted->value)
                ->join('information', 'information.user_id', '=', 'users.id')  // Join the Information table
                ->orderBy('information.last_name', 'asc')  // Order by last_name in the Information table
                ->get();
            return view('admin.schedule', compact('users'));
        }
    }

    public function sched(Request $request, $id)
    {
        $currentDay = Carbon::now();
        $currentDate = $currentDay->format('F j, Y'); // Example: July 22, 2025
        $results = Result::where('date', $currentDate)->get();
        $count = $results->count();

        $hour = "9:00 - 10:00 AM";

        $groupSize = 10; // Change to 5, 15, etc. as needed

        $timeSlots = [
            "9:00 - 10:00 AM",
            "10:00 - 11:00 AM",
            "11:00 - 12:00 PM",
            "1:00 - 2:00 PM",
            "2:00 - 3:00 PM",
            "3:00 - 4:00 PM"
        ];

        $slotIndex = (int) floor(($count - 1) / $groupSize);

        if ($slotIndex >= 0 && $slotIndex < count($timeSlots)) {
            $hour = $timeSlots[$slotIndex];
        } else {
            return redirect()->back()->with('failed', 'No time slot available.');
        }

        $day = Carbon::parse($request->input('exam_date'));
        $date = $day->format('F j, Y');

        $user = User::find($id);
        $user->status = Status::Scheduled;
        $user->update();

        $result = Result::where('user_id', $user->id)->first();
        $data = [
            'user_id' => $user->id,
            'room' => $request->input('room'),
            'date' => $date,
            'hour' => $hour,
        ];

        Core::Save('Result', $data, $result == null ? 0 : $result->id);

        $user_information = Information::where('user_id', $user->id)->first();
        $applicant_name = $user_information->first_name . " " . $user_information->middle_name . " " . $user_information->last_name;

        Mail::to($user->email)->send(new Sched($user->applicant_no, $applicant_name, $date . ' ' . $hour, $request->input('room')));
        return redirect()->back()->with('success', 'Schedule for exam has been successfully assigned');
    }
}
