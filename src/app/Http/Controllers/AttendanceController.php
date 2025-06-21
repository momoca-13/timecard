<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function register(Request $request)
    {
        $user = Auth::user();
        $today = Carbon::today();
        $now = Carbon::now();

        $attendance = Attendance::where('user_id', $user->id)
                        ->where('date', $today)
                        ->first();

        if (!$attendance) {
            $attendance = new Attendance();
            $attendance->user_id = $user->id;
            $attendance->date = $today;
        }

        switch ($request->input('register')) {
            case 'clock_in':
                if (!$attendance->work_start) {
                    $attendance->work_start = $now;
                    $attendance->save();

                    $user->attendance_status = 1;
                    $user->save();
                    Auth::setUser($user);

                    return redirect('/attendance');
                }
                break;

            case 'break_start':
                if (!$attendance->break_start) {
                    $attendance->break_start = $now;
                    $attendance->save();

                    $user->attendance_status = 2;
                    $user->save();
                    Auth::setUser($user);

                    return redirect()->back();
                }
                break;

            case 'break_end':
                if ($attendance->break_start && !$attendance->break_end) {
                    
                    $breakStart = $attendance->break_start instanceof \Carbon\Carbon
                        ? $attendance->break_start
                        : Carbon::parse($attendance->break_start);

                    $attendance->break_end = $now;
                    $attendance->save();

                    $user->attendance_status = 1;
                    $user->save();
                    Auth::setUser($user);

                    return redirect()->back();
                }
                break;

            case 'clock_out':
                if (!$attendance->work_end) {
                    $attendance->work_end = $now;
                    $attendance->save();

                    $user->attendance_status = 3;
                    $user->save();
                    Auth::setUser($user);

                    return redirect()->back();
                }
                break;
        }

        return redirect()->back();
    }
}
