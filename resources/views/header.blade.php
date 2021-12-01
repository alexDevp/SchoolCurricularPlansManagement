<div>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-success">

        <a class="navbar-brand" href="/gerirBaseDeDados">IPBEJA</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsSupportedDefault" aria-controls="navbarsSupportedDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsSupportedDefault">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/gerirBaseDeDados">Gerir Base de Dados</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/planosCurriculares">Planos Curriculares<span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <ul class="nav navbar-nav me-auto navbar-right rightCustom">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Session::get('user')['nome']}}
                    </a>

                    <ul class="dropdown-menu dropdownMenuCustom" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="nav-link active" href="/logout">Terminar Sessão</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>
</div>
