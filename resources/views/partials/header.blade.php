<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('img/comic-logo.png')}}" alt="" width="60" height="24" class="d-inline-block align-text-top">
                Comic Shop
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active {{Route::currentRouteName()=='home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName()=='comics' ? 'active' : ''}}" href="/comics">Comics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/comics/create">Aggiungi Comic</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>