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
    <form method="post" action="{{ route('category.update',$categories->id) }}">
        <div class="form-group">
            @csrf
            @method('PATCH')
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $categories->name }}"/>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Create category</button>
    </form>
  </div>
</div>
@endsection
