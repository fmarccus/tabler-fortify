@extends('layouts.app')
@section('content')
@if (session('status'))
<script>
    Swal.fire({
        icon: 'success',
        text: 'Password reset link has been to your email address'
    });
</script>

@endif
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        <form class="card card-md" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="card-body">
                <h2 class="card-title text-center mb-4">Forgot password</h2>
                <p class="text-muted mb-4">Enter your email address and your password reset link will be emailed to you.</p>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">
                        <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                            <path d="M3 7l9 6l9 -6" />
                        </svg>
                        Send me new password reset link
                    </button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            Forget it, <a href="{{route('login')}}">send me back</a> to the login screen.
        </div>
    </div>
</div>
@endsection