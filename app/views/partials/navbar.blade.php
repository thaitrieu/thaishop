<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ThaiShop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/thaishop/public/products">Produkter</a></li>

        @if(Auth::check())
            <li><a href="/thaishop/public/admin">Min konto</a></li>
            <li><a href="/thaishop/public/logout">Logud</a></li>
            @else
                <li><a href="/thaishop/public/users/create">Opret bruger</a></li>
                <li><a href="/thaishop/public/login">Log ind</a></li>
        @endif()

        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>