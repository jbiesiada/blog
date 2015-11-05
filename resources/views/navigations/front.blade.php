<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Posty</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
			@if($user = \Auth::user())
                <li>
                    <a href="">
                    	{{$user->name}}
                    </a>
                </li>
                <li>
                    <a href="/auth/logout">logout</a>
                </li>
                <li>
                    <a href="/admin">admin</a>
                </li>
            @else
              	<li>
                    <a href="/auth/login">login</a>
                </li>
                <li>
                    <a href="/auth/register">register</a>
                </li>
			@endif
            </ul>
        </div>
    </div>
</nav>