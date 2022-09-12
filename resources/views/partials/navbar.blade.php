<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a href="/" class="navbar-brand ml-lg-3">
        <h1 class="m-0 text-uppercase text-primary"><i class="mr-3"></i>O-Coding</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link navbar-brand {{ ($title === "Home")? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand {{ ($title === "Kategori")? 'active' : '' }}" aria-current="page" href="/kategori">Kategori</a>
          </li>
        </ul>
        
        <div class="px-2">
            <a class="btn btn-outline-warning" href="/login" >Log In</a>
        </div>
      </div>
    </div>
  </nav>