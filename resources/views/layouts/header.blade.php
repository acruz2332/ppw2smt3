<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
    <div class="jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome!</h1>
    <p class="lead">for futher information, please click link below.</p>
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="/homee">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/education">Education</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/project">Projects</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/post">Blog</a>
  </li>
</ul>
  </div>
</div>
    <center>
    @yield('content')
</center>
    </body>
</html>