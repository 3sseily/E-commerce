@extends('layout.app')
@section('title')
    Create Page
@endsection

@section('main-section')
    <section>
        <div class="container my-4">
            <form method="post" action="{{ url('product/store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" class="form-control" value="{{ old('price') }}" name="price">
                    @error('price')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Quantity</label>
                    <input type="text" class="form-control" value="{{ old('quantity') }}" name="quantity">
                    @error('quantity')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Dsecreption</label>
                    <textarea type="text" class="form-control" value="{{ old('descc') }}" name="descc"></textarea>
                    @error('descc')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
