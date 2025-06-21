<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register()
{
  $user = Auth::user();
  $display_status = $user->getAttendanceStatus();
  $date = new \DateTime();
  $hour = $date->format('H');
  $minute = $date->format('i');
  $attendance_date = $date->format('Y年m月d日');
  $week = [
  '日', //0
  '月', //1
  '火', //2
  '水', //3
  '木', //4
  '金', //5
  '土', //6
];

  $day_of_week = $week[date('w')];

  return view('attendance/user', compact('display_status','attendance_date','day_of_week','hour','minute'));
   
}


}
