@extends('layout.app')
@section('title')
    Details Page
@endsection

@section('main-section')
    <section class="container my-5 text-center" >
        <div class="card mb-3" style="width: 18rem; margin: auto;">
            <img src="{{ asset($product->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->descc }}</p>
            </div>
        </div>
    </section>
@endsection
