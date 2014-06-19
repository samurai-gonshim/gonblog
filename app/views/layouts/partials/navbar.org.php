<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                <li class={{ set_active_route('home') }}><a href={{ URL::route('home') }}>Home</a></li>
                <li class={{ set_active('blogs') }}><a href={{ URL::route('blogs.index') }}>Blogs</a></li>

                @if (Auth::guest())
                    <li class={{ set_active('register') }}><a href="/register">Register</a></li>
                    <li class={{ set_active('login') }}><a href={{ URL::route('login') }}>Login</a></li>
                @else
                    <li>{{ link_to_profile() }}</li>
                    <li><a href={{ URL::route('logout') }}>Logout</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>