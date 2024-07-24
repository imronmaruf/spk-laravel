

@extends('auth.layouts.main')

@push('title')
    Login | Starter
@endpush
@push('css')
@endpush

@section('content')
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="{{ route('login') }}"><h3>SPK AHP-PM</h3></a>
                            <p class="mb-6">Masukkan Username dan Password Anda</p>
                        </div>
                        <!-- Form -->
                        <form action="/" method="POST">
                          @csrf
                    
                          <div class="form-floating">
                            <input type="text" class="mb-3 form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="name@example.com" autocomplete="off" autofocus required>
                            <label for="username">Username</label>
                    
                            @error('username')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                    
                          <div class="form-floating">
                            <input type="password" class="mb-3 form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                    
                            @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                    
                          {{-- <div class="mb-2 @error('password') mt-4 @enderror">
                            Don't have an account? 
                            <a href="/signup" class="text-decoration-none">Join Now!</a>
                          </div> --}}
                    
                          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                          <p class="mt-3 mb-3 text-muted">&copy; SPK AHP-PM {{ now()->year }}</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
