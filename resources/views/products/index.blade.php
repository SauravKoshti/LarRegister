@extends('layouts.app')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <div class="pull-right">
    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
</div>
  <table class="table mt-5">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Detail</td>
          <td>Image</td>
          {{--<td>Password</td> --}}
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
         <?php $i=1; ?>
        @foreach($products as $product)
        <tr>
            <td>{{$i++; }}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td><img src="/image/{{ $product->image }}" width="50" alt="Image not found"></td>
            {{-- <td>{{$students->password}}</td> --}}
            <td class="text-center">
                <a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('products.destroy', $product->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{-- <div class="d-felx justify-content-center"> --}}

    {{ $products->links('pagination::bootstrap-4') }}

{{-- </div> --}}
  <div>

@endsection

