<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="{{route('product.index')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            {{--<li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>--}}
            <li>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Shopping Cart
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    User Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if(Auth::check())
                        <p class="auth">
                            <a href="{{route('user.getUserProfile',['id' => Auth::id()])}}">{{Auth::user()->name}}</a>
                        </p>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                        @else
                            <a class="dropdown-item" href="{{route('user.getSignin')}}">Sign in</a>
                        <a class="dropdown-item" href="{{route('user.getSignup')}}">Sign up</a>
                    @endif

                </div>
            </li>
        </ul>

    </div>

</nav>
<br>