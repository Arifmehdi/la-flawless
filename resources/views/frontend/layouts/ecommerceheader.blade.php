<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
  <div class="header-body border-top-0">
    <div class="header-container container">
      <div class="header-row">
        <div class="header-column">
          <div class="header-row">
            <div class="header-logo">
                <a href="{{ route('nb.home') }}">
                    <img alt="North Bengal dairy" width="100%" height="80"
                        src="{{ asset('frontend/assets/img/northbengal/logo.jpg')}}">
                </a>
            </div>
          </div>
        </div>
        <div class="header-column justify-content-end">
          <div class="header-row">
            <div class="header-nav order-2 order-lg-1">
              <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('nb.home') ? 'active' : ''}}"
                                href="{{ route('nb.home')}}">
                                Home
                            </a>
                        </li>
                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : ''}}"
                                href="{{ route('about') }}">
                                About
                            </a>
                        </li>
                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('service') ? 'active' : ''}}"
                                href="{{ route('service') }}">
                                Services
                            </a>
                        </li> 
                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('shop.shasthoseba') ? 'active' : ''}}"
                                href="{{ route('shop.shasthoseba') }}">
                                Products
                            </a>
                        </li> 
                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : ''}}"
                                href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </li>

                        @if(Auth::check())
                        @php $user = auth()->user(); @endphp
                        <li class="dropdown dropdown-full-color dropdown-secondary">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('admin.dashboard') || request()->routeIs('user.dashboard') ? 'active' : '' }}" class="dropdown-toggle" href="javascript:void(0)">
                                <i class="fa fa-user"></i>&nbsp; {{ $user->name }}
                            </a>
                            <ul class="dropdown-menu">
                                @if ($user->hasRole('admin'))
                                    <li><a class="dropdown-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                @endif
                                <li><a class="dropdown-item {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}">Member Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                            @else
                            <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                        
                        @endif

                        
                    </ul>
                </nav>

              </div>
              <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                <i class="fas fa-bars"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

   