@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin">
                <form action="/register" method="post">
                    @csrf
                    <h1 class="h3 my-3 text-danger text-center">registration form</h1>
                
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="name" value="{{ old('name') }}" autocomplete="off" required>
                        <label for="name" class="text-danger">name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('user_name') is-invalid @enderror " name="user_name" id="user_name" placeholder="user_name" value="{{ old('user_name') }}" autocomplete="off" required>
                        <label for="user_name" class="text-danger">user name</label>
                        @error('user_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror " name="email" id="email" placeholder="email" value="{{ old('email') }}" autocomplete="off" required>
                        <label for="email" class="text-danger">email adress</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror " name="password" id="password" placeholder="Password" autocomplete="off" required>
                        <label for="password" class="text-danger">password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-danger" type="submit">submit</button>
                </form>
                <small class="d-block mt-3 text-center text-muted">already registered? <a href="/login" class="text-decoration-none text-danger">login</a></small>
           </main>
        </div>
    </div>
@endsection