@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 my-3 text-danger text-center">please login</h1>
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session()->has('loginFail'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginFail') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email" autofocus autocomplete="off" value="{{ old('email') }}" required>
                        <label for="email" class="text-danger">email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                        <label for="password" class="text-danger">password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-danger" type="submit">login</button>
                </form>
                <small class="d-block mt-3 text-center text-muted">not registered? <a href="/register" class="text-decoration-none text-danger">register now!</a></small>
           </main>
        </div>
    </div>
@endsection