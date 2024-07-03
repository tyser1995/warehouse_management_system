@extends('layouts.app-auth', [
'class' => 'main-page'
])
@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="row card card-outline w-50" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            @include('notification.index')
            <form class="form" method="POST" action="{{ route('login') }}" autocomplete="off">
                @csrf
                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                        <div class="card-action social-auth-links text-center mt-2 mb-3">
                            <a href="#" class="btn btn-block btn-primary d-none">
                                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                            </a>
                            <a href="{{ route('google.redirect') }}" class="btn btn-block btn-danger">
                                <i class="fab fa-google-plus mr-2"></i> Login with Google
                            </a>
                        </div>
                        <!-- /.social-auth-links -->
            
                        <p class="mb-1 d-none">
                            <a href="forgot-password.html">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="{{route('register')}}" class="text-center">Register a new membership</a>
                        </p>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->
@endsection

@push('scripts')
    <script>
        //console.log("{{base_path().'/../'.env('PUBLIC_PATH')}}");
    </script>
@endpush
