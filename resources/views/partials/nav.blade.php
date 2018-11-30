<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 myNav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sectionTitle">
                @auth
                @if($navbarTitles->state == 0)
                <form action="/edit/navTitle" method="post">
                @csrf
                    <button class="activeTitle editButtons"><i type="submit" class="far fa-edit"></i></button>
                </form>                
                @endif
                @endauth
                @if($navbarTitles->state == 1)
                <form action="/update/navTitle" method="post">
                @csrf
                    <button class="editButtons"><i type="submit" class="far fa-check-square"></i></button>
                    <input type="text" name="navTitle" value="{{$navbarTitles->content}}">
                </form>
                @else
                <a class="navbar-brand" href="/login">{{$navbarTitles->content}}</a>
                @endif
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <!-- Create Section -->
                    @auth
                    <div class="create mr-5 d-flex">
                        <button class="editButtons"><i type="button" id="toggleCreateNavLink" class="far fa-plus-square"></i></button>
                        <div id="createNavSection" class="hide">
                            <form action="/create/navItem" method="post">
                            @csrf
                                <input type="text" placeholder="Enter a name" name="newNavItem">
                                <button class="editButtons"><i type="submit" class="far fa-plus-square"></i></button>
                            </form>
                        </div>
                    </div>
                    @endauth
                    @foreach($navbarLinks as $link)
                    <div class="sectionItem">
                        @auth
                        @if($link->stat == 0)
                        <form action="/edit/navItem/{{$link->id}}" method="post">
                        @csrf
                            <button class="activeItem editButtons"><i type="submit" class="far fa-edit"></i></button>
                        </form>
                        @endif
                        @endauth
                        @if($link->state == 1)
                        <form action="/delete/navItem/{{$link->id}}" method="post">
                        @csrf
                            <button class="editButtons"><i type="submit" class="far fa-trash-alt"></i></button>
                        </form>
                        <form action="/update/navItem/{{$link->id}}" method="post">
                        @csrf
                            <button class="editButtons"><i type="submit" class="far fa-check-square"></i></button>
                            <input type="text" name="navItem" value="{{$link->content}}">
                        </form>
                        @else
                        <a class="nav-item nav-link active" href="#{{$link->content}}">{{$link->content}}</a>
                        @endif
                    </div>
                    @endforeach
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
                        <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST"
                            style="display: none;">
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
