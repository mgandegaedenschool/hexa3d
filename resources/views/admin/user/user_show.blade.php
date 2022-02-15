@extends('app')
@section('content')

    <header class="upper-container d-flex">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                 <div class="col-4 upper-image-container" style="max-width: 140px;">
                    <img src="{{asset('img/spiral_placeholder.png')}}" alt="spirale grise et blanche" class="img-fluid" style="width: 170px; height: 95px;">
                </div> 
                <h6 class="text-uppercase col-8 col-md-2 upper-title my-2">questionnaires d'intérêts professionnels</h6> 
            </div>
            <div>
                <form action="{{route('logout')}}" method='post'>
                    @csrf
                    <input type="submit" value="logout" />
                <form>
            </div>
        </div>
    </header>

    <div class="global-container">
        <div class="container mx-auto main-profile-div">
            <div class="container-fluid my-infos mb-5">
                <div class="information-drop">
                    <h2>Mes informations</h2>
                    <div class="information-drop-icon">
                        <i class="far fa-eye icon-eye-view"></i>
                    </div>
                </div>
                <div class="dropped-information disabled-element-eye height-none">
                    <div class="personal-infos infos-div">
                        <div class="user-informations"><p>Identifiant (ou mail) :</p><span>{{$user->email}}</span></div>
                        <div class="user-informations"><p>Mot de passe :</p><span>*******</span></div>
                        <div class="user-informations"><p>Nom :</p><span>{{$user->lastname}}</span></div>
                        <div class="user-informations"><p>Prénom :</p><span>{{$user->firstname}}</span></div>
                        <div class="user-informations"><p>Age :</p><span>{{$user->age}}</span></div>
                        <div class="user-informations"><p>Sexe :</p><span>{{$user->sexe}}</span></div>
                    </div>
                    <div class="school-infos infos-div">
                        <div class="user-informations"><p>Niveau d'études :</p><span>{{$user->niv_etude}}</span></div>
                        <div class="user-informations"><p>Scolarisé(e) :</p><span>{{$user->scolarise}}</span></div>
                        <div class="user-informations"><p>Classe :</p><span>{{$user->classe}}</span></div>
                        <div class="user-informations"><p>Etablissement :</p><span>{{$user->etablissement}}</span></div>
                        <div class="user-informations"><p>Section :</p><span>{{$user->section}}</span></div>
                    </div>
                    <div class="job-infos infos-div">
                        <div class="user-informations"><p>Salarié :</p><span>{{$user->salarie}}</span></div>
                        <div class="user-informations"><p>Etat :</p><span>{{$user->etat}}</span></div>
                        <div class="user-informations"><p>Emploi actuel :</p><span>{{$user->emploi_actuel}}</span></div>
                        <div class="user-informations"><p>Emploi envisagé :</p><span>{{$user->emploi_envisage}}</span></div>
                        <div class="user-informations"><p>Spécialité :</p><span>{{$user->specialite}}</span></div>
                    </div>
                    
                    {{-- <input type="submit" value="Modifier" class="btn purple-btn send-password-link-btn py-2 px-4"> --}}
                </div>
            </div>
            <div class="container-fluid my-tests">
                <h2>Mon espace test</h2>
                <div class="test-space">
                    <div class="test-current py-5">
                        <h3>Test 1 : HEXA 3D</h3>
                        <p class="test-status test-done"><i class="fas fa-check"></i> Terminé</p>
                        <p class="test-done-date">Date de passage : <span>03-11-2021</span></p>
                    </div>
                    <div class="test-current py-5">
                        <h3>Test 2 : IRMR3</h3>
                        <p class="test-status test-ongoing"><i class="fas fa-spinner"></i> En cours</p>
                        <a href="" class="continue-test test-btn btn purple-btn py-2 px-4">Reprendre le test</a>
                    </div>
                    <div class="test-current py-5">
                        <h3>Test 1 : HEXA 3D</h3>
                        <p class="test-status test-to-begin"><i class="fas fa-spinner"></i> Nouveau</p>
                        <a href="" class="take-test btn test-btn purple-btn py-2 px-4">Commencer le test</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
