<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
      protected $fillable = ['user_id', 'date', 'work_start', 'work_end', 'break_start', 'break_end', 'break_start2', 'break_end2', ];     
  
}