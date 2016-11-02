<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Request;
use Auth;
use Carbon\Carbon as Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function storeTa()
    {
         $input = Request::all();

         $rules = User::$rules;

         $validator = Validator::make($input, $rules);
         if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInput($input)->with('error', 'Sorry, Check The Form and Fill Again');

        } else {
          $TA = new User;
          $TA->name = $input['name'];
          $TA->department = $input['department'];
          $TA->current_course_assisting = $input['current_course_assisting'];
          $TA->course_code1 = $input['course_code1'];
          $TA->course_code2 = $input['course_code2'];
          $TA->course_code3 = $input['course_code3'];
          $TA->course_description1 = $input['course_description1'];
          $TA->course_description2 = $input['course_description2'];
          $TA->course_description3 = $input['course_description3'];
          // $std_date = str_replace('.', '-', $input['student_date']);
          // $student->student_date = Carbon::createFromFormat('d/m/Y', $std_date)->format('Y-m-d');
          $TA->tas_date = date('Y-m-d', strtotime($input['tas_date']));
          $TA->comments = $input['comments'];
          $TA->reason = $input['reason'];
          $TA->signature_and_name_of_office = $input['signature_and_name_of_office'];
          // $office_date = str_replace('.', '-', $input['office_date']);
          // $student->office_date = Carbon::createFromFormat('d/m/Y', $office_date)->format('Y-m-d');
          $TA->office_date = date('Y-m-d', strtotime($input['office_date']));
          $TA->save();
             return redirect()->back()->with('success', 'You Have Been Successfully Added As A New Teaching Assistant');
         }


    }

    /**
     * Login for the Administrator
     *
     * @return Response
     */

     public function login() {
       $input = Request::all();

       $rules = User::$rules;
       $credentials = [
         'email'    => $input['email'],
         'password' => $input['password']
       ];

       $validator = Validator::make($credentials, $rules);

       if (Auth::attempt($credentials)) {
         return redirect('/publish-article')->with('success', ' to see you again '. Auth::user()->username);
       } else {
         return redirect()->back()->withErrors($validator)->withInput($input)->with('error', 'Sorry looks like something went wrong. Please try again');
       }
     }

    /**
     * Logout the admin
     *
     * @param  int  $id
     * @return Response
     */
    public function logout()
    {
        if (Auth::check()) {
          Auth::logout();
          return redirect('/admin/login')->with('success', 'Hope To See You Again...!');
        } else {
          return redirect()->back()->with('error', 'Could Not Logout');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
