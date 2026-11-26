<header>
    <nav>
        <div class="navbar">
            <div class="profil">
                <a href="{{ auth()->check() ? route('dashboard') : route('login') }}">
                    <h1>Mohamad Fauzi Febrianto</h1>
                    <p>Mahasiswa Teknologi Informasi</p>
                </a>
            </div>

            @auth
                <div class="hamburger" id="hamburger-menu">
                    <img src="{{ asset('asset/menu.png') }}" id="icon-hamburger" alt="Menu" width="30">
                </div>
            @endauth

            <ul id="nav-list">
                @auth
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('pengelolaan') }}">Pengelolaan</a></li>
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</header>
