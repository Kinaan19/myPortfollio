<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 myNav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/login">Monster</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="#about">ABOUT</a>
                    <a class="nav-item nav-link active" href="#service">SERVICE</a>
                    <a class="nav-item nav-link active" href="#">WORK</a>
                    <a class="nav-item nav-link active" href="#">TESTIMONIAL</a>
                    <a class="nav-item nav-link active" href="#">CONTACT</a>
                </div>
            </div>
        </div>
        @auth
        <div class="navbar-custom-menu mr-5">
            <ul class="nav navbar-nav">
                <li>
                    @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') &&
                    version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<')) <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                        <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                        </a>
                        @else
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                        </a>
                        <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}"
                            method="POST" style="display: none;">
                            @if(config('adminlte.logout_method'))
                            {{ method_field(config('adminlte.logout_method')) }}
                            @endif
                            {{ csrf_field() }}
                        </form>
                        @endif
                </li>
            </ul>
        </div>
        @endauth
    </nav>
</header>
