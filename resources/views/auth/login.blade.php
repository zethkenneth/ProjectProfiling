@extends('layouts.auth')

@section('content')
    
<div class="bg-img">
   
</div>

<div class="logo">

</div>

<div class='row justify-content-center'>
    <div class='col-xs-12 col-sm-12 col-md-6'>

   

        <form class='card mt-5' action="" method="post" id="loginForm">
            @csrf
            
            <div class="login-header">
                <h1 class="mt-3 mb-3 text-center font-weight-normal">Sign In</h1>
            </div>
           
            <div class="login-body">

                <div class="form-group mt-3">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" value="{{ old('email')}}" autofocus>
                        <label for="email">Email</label>
                        {{-- <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span> --}}
                    <div>
                </div>
    
                <div class="form-group mt-4">
                    <div class="form-floating mb-3">
                        
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password" value="{{ old('password')}}">
                        <label for="password">Password</label>
                        {{-- <span class="text-danger">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span> --}}
                    
                    </div>
                </div>
            </div>

            <div class="login-footer">
                <div class="d-grid">
                    <button type="submit" class='btn btn-danger btn-block btn-lg mb-3'>Login</button>
                </div>

                <a href='{{ url('auth/forgot-password') }}'>Forgot Password?</a>
            </div>

        </form>    
    </div>
</div>

@endsection