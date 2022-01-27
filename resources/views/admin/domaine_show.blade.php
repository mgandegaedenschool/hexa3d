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
            <h1 class="text-center bo-title">Détails du domaine</h1>
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
                <h2 class="div-users-title my-5 d-inline-block">Informations domaine</h2>

                <div class="container-fluid mb-5">
                    <div class="dropped-information d-flex flex-wrap flex-column flex-lg-row row">
                        <div class="personal-infos info-block col-12 col-lg-4 py-2">
                            <div class="user-informations user-show-info"><p>Identifiant (ou mail) :</p><span>AT</span></div>
                            <div class="user-informations user-show-info"><p>Mot de passe :</p><span>*****</span></div>
                            <div class="user-informations user-show-info"><p>Nom :</p><span>Toujours</span></div>
                            <div class="user-informations user-show-info"><p>Prénom :</p><span>Adam</span></div>
                            <div class="user-informations user-show-info"><p>Age :</p><span>24 ans</span></div>
                            <div class="user-informations user-show-info"><p>Sexe :</p><span>Homme</span></div>
                        </div>
                        <div class="school-infos info-block col-12 col-lg-4 py-2">
                            <div class="user-informations user-show-info"><p>Niveau d'études :</p><span>Bac +2</span></div>
                            <div class="user-informations user-show-info"><p>Scolarisé(e) :</p><span>Oui</span></div>
                            <div class="user-informations user-show-info"><p>Classe :</p><span>BTS Hôtellerie</span></div>
                            <div class="user-informations user-show-info"><p>Etablissement :</p><span>Lycée Saint Vincent de Paul</span></div>
                            <div class="user-informations user-show-info"><p>Section :</p><span>Hôtellerie</span></div>
                        </div>
                        <div class="job-infos info-block col-12 col-lg-4 py-2">
                            <div class="user-informations user-show-info"><p>Salarié :</p><span>Oui</span></div>
                            <div class="user-informations user-show-info"><p>Etat :</p><span>Alternant</span></div>
                            <div class="user-informations user-show-info"><p>Emploi actuel :</p><span>Assistant accueil</span></div>
                            <div class="user-informations user-show-info"><p>Emploi envisagé :</p><span>Restaurateur</span></div>
                            <div class="user-informations user-show-info"><p>Spécialité :</p><span>Accueil client</span></div>
                        </div>
                        <div class="container-fluid">
                            <a href="{{route('admin.domaine_edit')}}" class="btn purple-btn edit-btn send-password-link-btn py-2 px-4 mt-4">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
