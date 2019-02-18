@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td><img src="{{ asset($product->image) }}" alt="" style="max-height:40px"></td>
                                <td><a href="{{ route('products.edit',['id'=>$product->id]) }}" class="btn btn-primary btn-xs">Edit</a></td>
                                
                               
                                <td> 
                                    <form action="{{ route('products.destroy',['id'=>$product->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger btn-xs">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
