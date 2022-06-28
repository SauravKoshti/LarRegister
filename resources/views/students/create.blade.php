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
    Add User
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
      <form method="post" action="{{ route('students.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"/>
          </div>

          <div class="form-group">
            <label for="division">Select Division</label>
            <select class="form-control" id="division" name="division">
                <option>Select Division</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>

          <div class="form-group">
            <label for="gender">Gender</label>
            <input type="radio" class="form-control" name="gender" value="male"/><label for="male">Male</label>
            <input type="radio" class="form-control" name="gender" value="female"/><label for="female">Female</label>
        </div>

        <div class="form-group">
            <label for="hobby">Hobby</label>
            <input type="checkbox" class="form-control" name="hobby[]" value="swimming" /><label for="swimming">Swimming</label>

            <input type="checkbox" class="form-control" name="hobby[]" value="dancing" /><label for="dancing">Dancing</label>

            <input type="checkbox" class="form-control" name="hobby[]" value="cricket" /><label for="cricket">Cricket</label>

            <input type="checkbox" class="form-control" name="hobby[]" value="learn" /><label for="learn">Learn</label>
        </div>

          <button type="submit" class="btn btn-block btn-danger">Create User</button>
      </form>
  </div>
</div>
@endsection
