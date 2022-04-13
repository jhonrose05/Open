<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <div class="scrollbar-inner">
            <div class="sidenav-header  align-items-center" style="padding: 20px">
                <a class="nnavbar-brand" href="{{ route('home') }}" >
                    <img src="https://ghkarxvlhtexlqcmorzx.supabase.co/storage/v1/object/public/file/OPEN_free-file.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            
            <!-- User -->
            
            <!-- Collapse -->
            <div class="navbar-inner">
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('argon') }}/img/brand/blue.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                    <form class="mt-4 mb-3 d-md-none">
                        <div class="input-group input-group-rounded input-group-merge">
                            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-search"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inversion.index') }}">
                                <i class="ni ni-money-coins text-green"></i> {{ __('Inversiones') }}
                            </a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('icons') }}">
                                <i class="ni ni-planet text-blue"></i> {{ __('Icons') }}
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('map') }}">
                                <i class="ni ni-pin-3 text-orange"></i> {{ __('Maps') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('table') }}">
                              <i class="ni ni-bullet-list-67 text-default"></i>
                              <span class="nav-link-text">Tables</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading text-muted">Soporte</h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-spaceship"></i> Soporte tecnico
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</nav>
