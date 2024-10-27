<a href="#" class="dropdown-item">Status</a>
<a href="{{route('profile.edit')}}" class="dropdown-item">Profile</a>
<a href="#" class="dropdown-item">Feedback</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>