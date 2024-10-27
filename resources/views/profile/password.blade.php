@extends('layouts.app')
@section('content')
@if (session('status') == 'password-updated')
<script>
    Swal.fire({
        icon: 'success',
        text: 'Password has been updated.',
    })
</script>
@endif
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Settings
                </div>
                <h2 class="page-title">
                    Profile
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container">

        <div class="card">
            <div class="row g-0">
                <div class="col-4 border-end">
                    <div class="card-body">
                        <h4 class="subheader">Profile Settings</h4>
                        @include('profile.sidebar')
                    </div>
                </div>
                <div class="col-8 d-flex flex-column">
                    <form method="POST" action="{{ route('user-password.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h2 class="mb-4">My Account</h2>

                            <h3 class="card-title mt-4">Password</h3>
                            <p class="card-subtitle">Please input your current password and your new password</p>

                            <div class="row g-2">
                                <div class="col-sm-12">
                                    <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                                    <input id="current_password" type="password" class="form-control @error('current_password','updatePassword') is-invalid @enderror" name="current_password">
                                    @error('current_password','updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="form-control @error('password','updatePassword') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password','updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                            </div>

                        </div>

                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <a href="{{route('home')}}" class="btn">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection