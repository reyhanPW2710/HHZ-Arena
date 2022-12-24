<header class="p-3 bg-danger text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li>
        @auth
          @role('admin')
          <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>
          <li><a href="{{ route('facilities.index') }}" class="nav-link px-2 text-white">Facilities</a></li>
          <li><a href="{{ route('requests.index') }}" class="nav-link px-2 text-white">Requests</a></li>
          @endrole
          @role('management')
          <li><a href="{{ route('facilities.index') }}" class="nav-link px-2 text-white">Facilities</a></li>
          <li><a href="{{ route('requests.index') }}" class="nav-link px-2 text-white">Requests</a></li>
          @endrole
          @role('user')
          <li><a href="{{ route('facilities.list') }}" class="nav-link px-2 text-white">Facilities</a></li>
          <li><a href="{{ route('requests.list') }}" class="nav-link px-2 text-white">Requests</a></li>
          @endrole
        @endauth
      </ul>

      @auth
        {{auth()->user()->name}}&nbsp;
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-primary">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>
