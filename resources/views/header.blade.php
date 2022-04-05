<header>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #bbec35ef;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/nayarit_enamora_300.png" alt="" width="200" height="40"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('principal')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gastronomia')}}">Gastronomia</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Lo mejor para estas vacaciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('novillero')}}">Novillero</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="{{route('tecuala')}}">Tecuala</a></li>
                    </li>

                </ul>
                </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>
