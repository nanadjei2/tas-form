<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'department', 'current_course_assisting', 'course_code1', 'course_code2', 'course_code3',
      'course_description1', 'course_description2', 'course_description3', 'tas_date', 'comments', 'reason', 'office_date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];



    // public function member() {
    //   return $this->belongsTo('app/member');
    // }


    public static $rules = [
      'name' => 'required|alpha',
      'department' => 'required|min:4',
      'current_course_assisting' => 'required|min:4',
      'course_code1' => 'required|alpha_num',
      'course_code2' => 'required|alpha_num',
      'course_code3' => 'required|alpha_num',
      'course_description1' => 'required|alpha',
      'course_description2' => 'required|alpha',
      'course_description3' => 'required|alpha',
      'tas_date' => 'required|date',
      'comments' => 'required',
      'reason' => 'required|alpha',
      'signature_and_name_of_office' => 'required',
      'office_date' => 'required|date'
    ];





}
