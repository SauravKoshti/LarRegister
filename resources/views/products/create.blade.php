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
    Add Product
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
      <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
            <label for="category">Select Category</label>
            <select class="form-control" id="category" name="catId">
                <option>Select Category</option>
              @foreach ($categories as $cat )
              <option value="{{ $cat->id }}">{{ $cat->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="detail">Detail</label>
            <input type="text" class="form-control" name="detail"/>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="Choose image" id="image" class="form-control">
        </div>

          <button type="submit" class="btn btn-block btn-primary">Create Product</button>
      </form>
  </div>
</div>
@endsection
