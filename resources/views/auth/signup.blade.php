@extends('auth.layouts.main')

@push('title')
    Register | Starter
@endpush
@push('css')
@endpush
@section('content')
    <!-- container -->
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <h3>SPK AHP-PM</h3>
                            <p class="mb-6">Please enter your user information.</p>

                        </div>
                        <!-- Form -->
                        <form action="/signup" method="POST">
                          @csrf
                    
                          <h1 class="h3 fw-normal">Sign Up</h1>                    
                          <div class="form-floating">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name@example.com" value="{{ old('name') }}" autocomplete="off" required>
                            <label for="name">Fullname</label>
                            @error('name')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                    
                          <div class="form-floating">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="name@example.com" value="{{ old('username') }}" autocomplete="off" required>
                            <label for="username">Username</label>
                            @error('username')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                    
                          <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" autocomplete="off" required>
                            <label for="email">Email address</label>
                            @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                    
                          <div class="form-floating">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                    
                    
                          <div class="mb-2 @error('password') mt-4 @enderror">
                            Already have an account? 
                            <a href="/" class="text-decoration-none">Sign In</a>
                          </div>
                    
                          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                          <p class="mt-3 mb-3 text-muted">&copy; SPK AHP-PM {{ now()->year }}</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
