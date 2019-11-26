<div class="sidebar" data-color="orange" data-background-color="white" data-image="<!-- {{ asset('material') }}/img/sidebar-1.jpg -->">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ __('P.D.D.T') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'missions' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('missions.index') }}">
                    <i class="material-icons">card_travel</i>
                    <p>{{ __('Missions') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notes' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('notes.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Notes') }}</p>
                </a>
            </li>
            @if (Auth::user()->role === 'admin')
            <li class="nav-item {{ ($activePage == 'user-management' || $activePage == 'add-user') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
                    <i class="material-icons">build</i>
                    <p>{{ __('Administrateur') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.index') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('User Management') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'add-user' ? ' active' : '' }}">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> AU </span>
                                <span class="sidebar-normal">{{ __('Add User') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
            @if (Auth::user()->role === 'comptable')
            <li class="nav-item{{ $activePage == 'comptable' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('comptable.index') }}">
                    <i class="material-icons">assessment</i>
                    <p>{{ __('Comptable') }}</p>
                </a>
            </li>
            @endif
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('profile.edit') }}">
                    <i class="material-icons">person</i>
                    <p>{{ __('User profile') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
