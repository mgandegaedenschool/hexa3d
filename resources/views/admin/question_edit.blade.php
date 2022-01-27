@extends('app')

@section('content')

    <header class="upper-container">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav two-img-nav py-3">
                <div class="col-4 upper-image-container">
                    <img src="{{asset('img/hexa3d-logo-v2_300ppp.png')}}" alt="logo hexa3d" class="img-fluid">
                </div>
                <div class="col-4 upper-image-container">
                    <img src="{{asset('img/irmr3-logo-v2_300ppp.png')}}" alt="logo irmr3" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
    <main class="dashboard-layout">

        <div class="top-content p-4 align-items-center">
            <div class="options">
                <a href="#"><i class="fas fa-plus"></i> New</a>
            </div>
            <h1 class="text-center bo-title">Modifier la question</h1>
            <div class="admin-account">
                <a href="#">Bonjour, Admin</a>
            </div>
        </div>

        <aside class="pb-4">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="admin">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_index">Membres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="domaine_index">Domaine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="etalonnage_index">Etalonnage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="participation_index">Participation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="partie_index">Partie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="question_index">Question</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reponse_index">Réponse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="test_index">Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="type_index">Type</a>
                </li>
            </ul>
        </aside>

        <div class="content-container container-fluid">
            <div class="d-flex align-items-center justify-content-between flex-column">
                <h2 class="div-users-title my-5 d-inline-block">Editer une question</h2>

                <div class="container-fluid py-4">
                    <form action="" method="post" class="px-md-4 px-lg-4">
                        {{-- first part of the form --}}

                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="idItem">Id item hexa3d</label>
                                <select class="form-control" id="idItem">
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="idTest">Id test</label>
                                <select class="form-control" id="idTest">
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">

                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="idPartie">Id partie</label>
                                <select class="form-control" id="idPartie">
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="idDomaine">Id domaine</label>
                                <select class="form-control" id="idDomaine">
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-between">

                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="ordre">Ordre</label>
                                <input type="text" class="form-control" id="ordre" placeholder="ordre">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="TypeRiarsec">Type RIARSEC</label>
                                <select class="form-control" id="idDomaine">
                                    <option value="r">R</option>
                                    <option value="i">I</option>
                                    <option value="a">A</option>
                                    <option value="s">S</option>
                                    <option value="e">E</option>
                                    <option value="c">C</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-secondary btn-lg mx-2" value="Annuler">
                            <input type="submit" class="btn btn-primary btn-lg mx-2" value="Modifier le membre">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
