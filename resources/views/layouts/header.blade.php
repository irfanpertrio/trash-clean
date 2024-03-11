<!-- ======= Header ======= -->
<header class="fixed-top " id="header_page">
    <div class="container d-flex align-items-center justify-content-center">
        <a class="logo rounded" href="/"><img class="img-fluid" src={{ url('assets/img/logo.png') }}
                alt=""></a>

        <nav class="navbar_page" id="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                <li><a class="nav-link scrollto {{ request()->is('tentang') ? 'active' : '' }}"
                        href="/tentang">Tentang</a>
                </li>
                <li><a class="nav-link scrollto {{ request()->is('katalog') ? 'active' : '' }}"
                        href="/katalog">Katalog</a>
                </li>
                <li><a class="nav-link scrollto {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                </li>
                <li class="dropdown"><a class="{{ request()->is('tutorial*') ? 'active' : '' }}"
                        href="#"><span>Blog Informasi</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/media-informasi">Media Informasi</a></li>
                        <li><a href="/tutorial">Tutorial</a></li>
                    </ul>
                </li>
                @if (Auth::check())
                    @php
                        $role = Auth::user()->role . '*';
                        $name = explode(' ', trim(Auth::user()->nama));
                    @endphp

                    <li class="dropdown"><a class="nav-link scrollto {{ request()->is($role) ? 'active' : '' }}"
                            href="#"><span>{{ $name[0] }}</span>
                            <i class="bi bi-person-circle text-white"></i> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown-menu-custom"><a class="nav-link scrollto"
                                    href="{{ '/' . Auth::user()->role . '/dashboard' }}">Dashboard</a></li>
                            @if (Auth::user()->role == 'super_admin')
                                <li class="dropdown-menu-custom"><a href="/super_admin/landing-page">Menu Super
                                        Admin</a></li>
                            @endif
                            <li class="dropdown-menu-custom"><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown"><a
                            class="nav-link scrollto {{ request()->is('login') ? 'active' : '' }} {{ request()->is('register') ? 'active' : '' }}"
                            href="#">
                            <span>Masuk</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="/login">Login</a></li>
                            <li><a class="nav-link scrollto" href="/register">Register</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle" style="color: grey"></i>
        </nav>

    </div>
</header>
