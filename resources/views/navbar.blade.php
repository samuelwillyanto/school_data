<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head');
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SJ School</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Teacher</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/teacher/add">Add New Teacher</a>
                  <a class="dropdown-item" href="/teacher">Teacher's Data</a>
                </div>
              </li>
            </ul>

          </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
