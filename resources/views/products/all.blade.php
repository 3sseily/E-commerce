@extends('layout.app')

@section('title')
    Products Page
@endsection

@section('main-section')
    <section class="container my-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->descc }}</p>
                            <a href="{{ url('product' , $product->id) }}" class="btn btn-primary">Details</a>
                            @if(Auth::user() && Auth::user()->role=='admin')
                            <a href="{{ url('product/delete' , $product->id) }}" class="btn btn-danger">Delete</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
