<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        
    public function isAdmin(){
        return $this->role == 1;
    }   

    public function getAttendanceStatus(){
        $status=$this->attendance_status;
        $display_status = '';
        if($status == 0){
            $display_status = '勤務外';
        }elseif ($status == 1){
            $display_status = '出勤中';
         }elseif ($status == 2){
             $display_status = '休憩中';
         }else {
             $display_status = '退勤済';

        }
        return $display_status;
      
}
    }   

