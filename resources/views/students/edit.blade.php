@extends('layouts.app')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.update', $student->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $student->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $student->email }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}"/>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" value="{{ $student->password }}"/>
          </div>

          <div class="form-group">
            <label for="division">Select Division</label>
            <select class="form-control" id="division" name="division">
            <option>Select Division</option>
            @if (!empty($student->division))

            <option value="1"  @if ($student->division == '1') { selected } @endif>
                1 </option>
            <option value="2"  @if ($student->division == '2') { selected } @endif>
                2 </option>
            <option value="3"  @if ($student->division == '3') { selected } @endif>
                3 </option>
            <option value="4"  @if ($student->division == '4') { selected } @endif>
                4 </option>
            <option value="5"  @if ($student->division == '5') { selected } @endif>
                5 </option>
            <option value="6"  @if ($student->division == '6') { selected } @endif>
                6 </option>
            <option value="7"  @if ($student->division == '7') { selected } @endif>
                7 </option>
            <option value="8"  @if ($student->division == '8') { selected } @endif>
                8 </option>
            <option value="9"  @if ($student->division == '9') { selected } @endif>
                9 </option>
            <option value="10"  @if ($student->division == '10') { selected } @endif>
                10 </option>
            <option value="11"  @if ($student->division == '11') { selected } @endif>
                11 </option>
            <option value="12"  @if ($student->division == '12') { selected } @endif>
                12 </option>
            @endif
            </select>
          </div>

          <div class="form-group">
            <label for="gender">Gender</label>
            <input type="radio" class="form-control" name="gender" value="male" @if($student->gender == 'male') { checked } @endif /><label for="male">Male</label>
            <input type="radio" class="form-control" name="gender" value="female" @if($student->gender == 'female') { checked } @endif /><label for="female">Female</label>
        </div>


        <div class="form-group">
            <label for="hobby">Hobby</label>
            <?php
            $value = explode(',',$student->hobby);
            ?>

            <input type="checkbox" class="form-control" name="hobby[]" value="swimming" @if(in_array('swimming',$value)) { checked } @else { echo ""; } @endif /><label for="swimming">Swimming</label>

            <input type="checkbox" class="form-control" name="hobby[]" value="dancing" @if(in_array('dancing',$value)) { checked } @else { echo ""; } @endif /><label for="dancing">Dancing</label>

            <input type="checkbox" class="form-control" name="hobby[]" value="cricket" @if(in_array('cricket',$value)) { checked } @else { echo ""; } @endif /><label for="cricket">Cricket</label>

            <input type="checkbox" class="form-control" name="hobby[]" value="learn" @if(in_array('learn',$value)) { checked } @else { echo ""; } @endif /><label for="learn">Learn</label>

        </div>


          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection
