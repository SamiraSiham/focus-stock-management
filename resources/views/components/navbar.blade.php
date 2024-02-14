<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top">
            <img src="{{ asset('images/logo-text.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="{{asset('icons/inventory.png')}}" height="40px" alt="">
                                Inventory
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="{{asset('icons/sales.png')}}" height="40px" alt="">
                                Sales
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">
                            <img src="{{asset('icons/purchase.png')}}" height="40px" alt="">
                            Purchasing
                        </a></li>
                        <li><a class="dropdown-item" href="#">
                            <img src="{{asset('icons/product_management.png')}}" height="40px" alt="">
                            Product management
                        </a></li>
                    </ul>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-light" aria-current="page" href="#">Pricing</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-light" aria-current="page" href="#">Help Center</a>
                </li>
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Help Center</a></li>
                        <li><a class="dropdown-item" href="#">Demo</a></li>
                        <li><a class="dropdown-item" href="#">Videos</a></li>
                        <li><a class="dropdown-item" href="#">First Steps</a></li>
                    </ul>
                </li>
                <li class="nav-item me-3 mb-2">
                    <a href="#" class="btn btn-outline-danger">
                        Start a free trial
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a href="#" class="btn btn-outline-light">
                        Log in
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
