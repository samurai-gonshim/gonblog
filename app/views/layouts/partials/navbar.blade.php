<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Larademo</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class={{ set_active_route('home') }}> {{ link_to_route('home', 'Home') }} </li>
                <li class="{{ 'dropdown '.set_active_route('blogs') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ link_to_route('blogs.index', 'Blog Home')}}</li>
                            @if(Auth::check())
                            <li>{{ link_to_route('blogs.create', 'Create New Blog')}}</li>
                            @endif
                        </ul>
                </li>
                
                @if (Auth::guest())
                    <li class={{ set_active_route('registration') }}> {{ link_to_route('registration', 'Register') }}</li>
                    <li class={{ set_active_route('login') }}> {{ link_to_route('login', 'Login') }}</li>
                @else
                    <li class={{ set_active_route('profile') }}>{{ link_to_profile() }}</li>
                    <li>{{ link_to_route('logout', 'Logout') }}</li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>