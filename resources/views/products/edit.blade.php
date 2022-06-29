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
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $product->name }}" />
          </div>
          <div class="form-group">
            <label for="category">Select Category</label>
            <select class="form-control" id="category" name="catId">
                <option>Select Category</option>
                @if($categories)
                @foreach($categories as $category)
                @if($product->catId == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @endif
                @endforeach
                @foreach($categories as $key => $allCategory)
                @if($product->catId != $allCategory->id)
                    <option value="{{ $allCategory->id }}">{{ $allCategory->name }}</option>
                @endif
            @endforeach
            @endif
            </select>
          </div>
          <div class="form-group">
            <label for="detail">Detail</label>
            <input type="text" class="form-control" name="detail" value="{{ $product->detail }}">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="Choose image" id="image" class="form-control">
            <img src="/image/{{ $product->image }}" width="150" name="image" value="{{ $product->image }}">
        </div>

          <button type="submit" class="btn btn-block btn-primary">Update Product</button>
      </form>
  </div>
</div>
@endsection
