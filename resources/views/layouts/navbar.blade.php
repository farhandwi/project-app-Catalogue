@include('layouts.header')
  <body>
    <header>
      <nav class="navbar bg-body-tertiary px-5">
        <div class="container-fluid d-flex">
          <div class="logo ms-2">
            <img src="../img/logo.png" alt="Logo" width="300" height="70" class="d-inline-block align-text-top" />
          </div>
          <div class="navlist d-flex justify-content-evenly">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active fs-4" aria-current="page" href="{{ env('APP_URL') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="#">Pages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="#">Media</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="#">features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="#">Help</a>
              </li>
            </ul>
          </div>
          <div class="navbutton">
            <a href="{{ env('APP_URL') }}{{ $loginstatus ? '/logout' : '/login' }}" type="button" class="btn btn-success rounded-3 fw-bold fs-4 pe-4 ps-4 text-dark me-5 fs-5 {{ $loginstatus ? 'btn-danger' : 'btn-success'}}">{{ $loginstatus ? 'Logout' : 'Login' }}</a>
          </div>
        </div>
      </nav>
      <div class="navbar px-5">
        <div class="container-fluid ms-2 me-2">
          <form action="{{ $loginstatus ? '/dashboard' : '/' }}" class="search">
            <div class="input-group">
              <button class="input-group-text bg-primary text-light fw-bold rounded-start-4 ms-4" id="basic-addon1" type="submit">Search</button>
              <input type="text" name="search" class="form-control rounded-end-4" placeholder="Search our website" aria-p="search" aria-describedby="basic-addon1" value="{{ request('search') }}"/>
            </div>
          </form>
          <a href="#contactus" type="button" class="btn btn-primary rounded-3 fw-bold me-5">Contact Us</a>
        </div>
      </div>
    </header>
    <div class="container mt-5 pt-3">
      @yield('detail-information')
      <ol class="list-group list-group-numbered">
        @yield('list-cooperation')
      </ol>
    </div>
  @include('layouts.footer')
