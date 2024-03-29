<!--::header part start::-->
<header class="main_menu home_menu">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{ url('/') }}">
            Hyper.
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center">
              @if (Auth::user())
              <li class="nav-item dropdown">
                <a class="nav-link font-weight-bold"
                  style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"
                  unselectable="on" onselectstart="return false;" onmousedown="return false;"> Hai,
                  {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Monitoring</a>
                  <a class="dropdown-item" href="#">Record</a>
                </div>
              </li>
              @else
              <div
                style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"
                unselectable="on" onselectstart="return false;" onmousedown="return false;">
                <li class="nav-item">
                  <a class="nav-link">Hay</a>
                </li>
              </div>
              @endif
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- Header part end-->