@extends('layouts.app')

@section('content')
      
            <div class="panel panel-default">
                <div class="panel-heading">Edit Product</div>

                <div class="panel-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>

@endsection
