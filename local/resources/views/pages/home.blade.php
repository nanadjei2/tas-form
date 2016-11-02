@extends('master')
@section('title')
  Home
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <!-- Header Begins -->
      <div class="header text-center">
        @include('common.notification')
        <img src="{{ url('assets/img/banner.png') }}" alt="college banner" />
        <div class="header-title">
          <p><h4>STUDENTS' ACHIEVEMENT PROGRAMME</h4></p>
          <h4>(STUDENT'S PARTICIPATION FORM)</h4> <hr>
        </div>
      </div>
      <!-- Header Ends -->

      <!-- Descriptions Begins -->
        <div class="description">
          <h5 >The College of Science Students’ achievement programme (an initiative of the college provost) is about
            helping students develop institutional and programme fit achievements.
          </h5>
        </p>
        <h4>CONDITIONS OF PARTICIPATION</h4>
        <h5>
          Teaching assistants <strong>will be remunerated </strong> for participating and classes will be kept at a maximum of 40 students per tutorial class.
          The students <strong>shall not</strong> be levied any fees and all required teaching materials will be made available.
        </h5>
      </div>
      <!-- Descriptions Ends -->

      <!-- Form Begins -->
      <div class="form">
        <h4 class="text-center">PARTICIPATING TEACHING ASSISTANT'S INFORMATION</h4><hr><br>
            {!! Form::open(['url' => 'post-teaching-assistant', 'method' => 'POST', 'class' => 'form-horizontal', 'role'=> 'form']) !!}
            <div class="form-group {{ $errors->has('name')? 'has-error' : ''}}">
              <label class="control-label col-sm-4" for="name">Name:</label>
              <div class="col-sm-8">
                <input class="form-control" id="name" type="text" name="name" Placeholder="Enter name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                  <span style="color:#b84464;">{{$errors->first('name') }}</span>
                @endif
              </div>
            </div>
            <div class="form-group {{ $errors->has('department')? 'has-error' : ''}}">
              <label class="control-label col-sm-4" for="department">Department:</label>
              <div class="col-sm-8">
                <input class="form-control" id="department" type="text" name="department" Placeholder="Enter department" value="{{ old('department') }}">
                @if ($errors->has('department'))
                  <span style="color:#b84464;">{{$errors->first('department') }}</span>
                @endif
              </div>
            </div>
            <div class="form-group {{ $errors->has('current_course_assisting')? 'has-error' : ''}}">
              <label class="control-label col-sm-4" for="currentCourseAssisting">Current courses assisting on:</label>
              <div class="col-sm-8">
                <input class="form-control" id="currentCourseAssisting" type="text" name="current_course_assisting" Placeholder="Enter current courses assisting on" value="{{ old('current_course_assisting') }}">
                @if ($errors->has('current_course_assisting'))
                  <span style="color:#b84464;">{{$errors->first('current_course_assisting') }}</span>
                @endif
              </div>
            </div>

            <div class="form-group {{ $errors->has('current_course_assisting')? 'has-error' : ''}}">
              <label class"control-label" for="courseCode">List three current semester courses for which you can provide tutorial services in order of preference (where 1 = most preferred):</label>
              <div id="courseCode" class="col-sm-4">
                <label class="control-label course-code-label">Course Code</label>
                 <p class="{{ $errors->has('course_code1')? 'has-error' : ''}}">
                   <input class="form-control" type="text" name="course_code1" placeholder="1st Course Code" value="{{ old('course_code1') }}">
                   @if ($errors->has('course_code1'))
                     <span style="color:#b84464;">{{$errors->first('course_code1') }}</span>
                   @endif
                 </p>
                 <p class="{{ $errors->has('course_code2')? 'has-error' : ''}}">
                   <input class="form-control" type="text" name="course_code2" placeholder="2nd Course Code" value="{{ old('course_code2') }}">
                   @if ($errors->has('course_code2'))
                     <span style="color:#b84464;">{{$errors->first('course_code2') }}</span>
                   @endif
                 </p>
                 <span class="{{ $errors->has('course_code3')? 'has-error' : ''}}">
                   <input class="form-control" type="text" name="course_code3" placeholder="3nd Course Code" value="{{ old('course_code3') }}">
                   @if ($errors->has('course_code3'))
                     <span style="color:#b84464;">{{$errors->first('course_code3') }}</span>
                   @endif
                 </span>

              </div>
              <div class="col-sm-8">
                <label class="course-description">Course Description</label>
                <p class="form-group {{ $errors->has('course_description1')? 'has-error' : ''}}">
                  <input class="form-control" id="course-description" type="text" name="course_description1" Placeholder="1st course Description" value="{{ old('course_description1') }}">
                  @if ($errors->has('course_description1'))
                    <span style="color:#b84464;">{{$errors->first('course_description1') }}</span>
                  @endif
                </p>
                <p class="form-group {{ $errors->has('course_description2')? 'has-error' : ''}}">
                  <input class="form-control" id="course-description" type="text" name="course_description2" Placeholder="2nd course Description" value="{{ old('course_description2') }}">
                  @if ($errors->has('course_description2'))
                    <span style="color:#b84464;">{{$errors->first('course_description2') }}</span>
                  @endif
                </p>
                <p class="form-group {{ $errors->has('course_description3')? 'has-error' : ''}}">
                  <input class="form-control" id="course-description" type="text" name="course_description3" Placeholder="3nd course Description" value="{{ old('course_description3') }}">
                  @if ($errors->has('course_description3'))
                    <span style="color:#b84464;">{{$errors->first('course_description3') }}</span>
                  @endif
                </p>
                </div>
            </div>
            <div class="form-group {{ $errors->has('tas_date')? 'has-error' : ''}}">
              <label class="control-label col-sm-4" for="datepicker">Date:</label>
              <div class="col-sm-8">
                <input type='date' class='form-control' name="tas_date" placeholder="Choose a date">
                @if ($errors->has('tas_date'))
                  <span style="color:#b84464;">{{$errors->first('tas_date') }}</span>
                @endif
              </div>
            </div>
            <h4 class="text-center office-use">OFFICIAL USE ONLY</h4><hr>
            <div class="form-group {{ $errors->has('comments')? 'has-error' : ''}}">
              <label class="control-label col-sm-4" for="comments">Comments:</label>
              <div class="col-sm-8 year">
                <label class="radio-inline"><input type="radio" name="comments" value="1" {{ (old('comments') == '1') ? 'checked' : '' }}>Approved</label>
                <label class="radio-inline"><input type="radio" name="comments" value="0" {{ (old('comments') == '0') ? 'checked' : '' }}>Not approved</label>
                <div class="">
                  @if ($errors->has('comments'))
                    <span style="color:#b84464;">{{$errors->first('comments') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-group {{ $errors->has('reason')? 'has-error' : ''}}">
              <label class="control-label col-sm-4" for="reasons">Give reason for non-approval:</label>
              <div class="col-sm-8">
                <textarea class="form-control" name="reason" rows="8" cols="40" placeholder="Write something...">{{ old('reason') }}</textarea>
                @if ($errors->has('reason'))
                  <span style="color:#b84464;">{{$errors->first('reason') }}</span>
                @endif
              </div>
            </div>
            <div class="form-group {{ $errors->has('signature_and_name_of_office')? 'has-error' : ''}}">
              <label class="control-label col-sm-4" for="S-and-n-of-office">Signature & Name of office:</label>
              <div class="col-sm-8">
                <input class="form-control" id="S-and-n-of-office" type="text" name="signature_and_name_of_office" Placeholder="Signature of participant" value="{{ old('signature_and_name_of_office') }}">
                @if ($errors->has('signature_and_name_of_office'))
                  <span style="color:#b84464;">{{$errors->first('signature_and_name_of_office') }}</span>
                @endif
              </div>
            </div>
            <div class="form-group {{ $errors->has('office_date')? 'has-error' : ''}}">
              <label class="control-label col-sm-4" for="datepicker">Date:</label>
              <div class="col-sm-8">
                <input type='date' class='form-control' name="office_date" placeholder="Choose a date">
                @if ($errors->has('office_date'))
                  <span style="color:#b84464;">{{$errors->first('office_date') }}</span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <input class="btn btn-primary" type="submit" value="Submit">
              </div>
            </div>
          {!! Form::close() !!}
      </div>
      <!-- Form-ends -->
    </div><!-- container -->


  </div><!-- row -->
</div>
@endsection
