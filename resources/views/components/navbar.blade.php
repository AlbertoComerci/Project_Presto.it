<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('indexArticle')}}">Tutti gli articoli</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                </li>
                
                @else
                <li class="nav-item">
                    <a class="nav-link" href="#">Benvenuto {{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('createArticle')}}">Inserisci un articolo</a>
                    </li>
                    
                    <form  class="dropdown-item" action="{{ route('logout') }}" method="post">@csrf  <button class="btn btn-danger" type="submit"> Logout </button> </form>
                </ul>
            </li>
            @endguest
            
            
        </ul>
    </div>
</div>
</nav>