@extends('layout.app')
@section('title')
    Register Page
@endsection

@section('main-section')
    <section>
        <div class="container my-4">
            <form method="post" action="{{ url('handle_register') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">User E-mail</label>
                    <input type="text" class="form-control" value="{{ old('email') }}" name="email">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">User Password</label>
                    <input type="password" class="form-control" value="{{ old('password') }}" name="password">
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </section>
@endsection