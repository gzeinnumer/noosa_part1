<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="/" class="nav-link px-2 text-white">Home</a>
                </li>
                <li>
                    <a href="/book" class="nav-link px-2 text-white">Book</a>
                </li>
            </ul>

            @auth {{ auth()->user()->name }}
                <div class="text-end">
                    <a href="/logout" class="btn btn-outline-light me-2">Logout</a>
                </div>
            @endauth
        </div>
    </div>
</header>
