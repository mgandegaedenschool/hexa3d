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
            <h1 class="text-center bo-title">Modifier le membre</h1>
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
{{-- <x-input placeholder="titre du post" name='title' id='title' value='{{$post->title}}' /> --}}
        <div class="content-container container-fluid">
            <div class="d-flex align-items-center justify-content-between flex-column">
                <h2 class="div-users-title my-5 d-inline-block">Editer un membre</h2>

                <div class="container-fluid py-4">
                    {{-- <form action="{{route('admin.user_update')}}" class="px-md-4 px-lg-4">
                    @csrf --}}
                    <form method='post' action="{{route('user.update',$user->id)}}" }}>
                    @csrf
                   @method('put')  
                        {{-- first part of the form --}}

                        <h6 class="text-center form-title">Identité</h6>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputId">Username</label>
                                <input type="text" class="form-control" id="InputId" name="username" value='{{$user->username}}' placeholder="identifiant ou adresse mail">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputId">mail</label>
                                <input type="text" class="form-control" id="InputId" name="email" value='{{$user->email}}' placeholder="identifiant ou adresse mail">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputName">Nom</label>
                                <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" id="inputName" placeholder="nom">
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">

                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputFirstName">Prénom</label>
                                <input type="text" class="form-control" id="inputFirstName" name="firstname"  value="{{$user->firstname}}" placeholder="prénom">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputAge">Âge</label>
                                <input type="number" class="form-control" id="inputAge" name="age" value="{{$user->age}}" placeholder="âge">
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-between end-form">

                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputSexe">Sexe</label>
                                <select class="form-control" id="inputSexe" name="sexe">
                                    <option>--Sexe--</option>
                                    <option value='{{$user->sexe}}' {{ $user->sexe == 'masculin' ?'selected' : ''}}>Homme</option>
                                    <option value='{{$user->sexe}}' {{ $user->sexe == 'feminin' ?'selected' : ''}}>Femme</option>
                                    <option value='{{$user->sexe}}' {{ $user->sexe == 'autre' ?'selected' : ''}}>autre</option>
                                </select>
                            </div>
                        </div>

                        {{-- second part of the form --}}

                        <h6 class="text-center form-title mt-4 pt-3 start-form">Scolarité</h6>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-5 col-lg-5 py-3">
                                <label for="InputStudies">Niveau d'études</label>
                                <input type="text" class="form-control" id="InputStudies" name="niv_etude" value="{{$user->niv_etude}}" placeholder="niveau d'études">
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between hidden-field p-3 mb-2">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <div class="form-check d-flex align-items-center flex-wrap schol">
                                    <label for="inlineRadio4" class="mr-3 mb-0">Êtes-vous scholarisé(e) ?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input radioSch" type="radio" name="scolarise" value='{{$user->scolarise}}' {{ $user->scolarise == '1' ?'checked' : ''}} id="inlineRadio3">
                                        <label class="form-check-label" for="inlineRadio3">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input radioSch" type="radio" name="scolarise" value='{{$user->scolarise}}' {{ $user->scolarise == '0' ?'checked' : ''}} id="inlineRadio4">
                                        <label class="form-check-label" for="inlineRadio4">Non</label>
                                    </div>
                                </div>
                                

                                <label for="InputStudies" class="hidden disabled-element-sch">Classe</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputClass" name="classe" value="{{$user->classe}}" placeholder="classe">
                                <label for="InputStudies" class="hidden disabled-element-sch" name="etablissement" value="{{$user->etablissement}}">Établissement</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputSchool" placeholder="établissement">
                                <label for="InputStudies" class="hidden disabled-element-sch">Section</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputSection" name="section"  value="{{$user->section}}" placeholder="section">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <div class="form-check d-flex align-items-center flex-wrap salary">
                                    <label for="inputScholarized" class="mb-0 mr-3">Êtes-vous salarié(e) ?</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input radioSal" type="radio" name="salarie" value='{{$user->salarie}}' {{ $user->salarie == '1' ?'checked' : ''}} id="inlineRadio1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input radioSal" type="radio" name="salarie" value='{{$user->salarie}}' {{ $user->salarie == '0' ?'checked' : ''}}  id="inlineRadio2">
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </div>
                                <label for="InputStudies" class="hidden disabled-element-sal">État</label>
                                <input type="text" class="form-control disabled-element-sal hidden" id="InputStatus" name='etat' value="{{$user->etat}}" placeholder="état">
                            </div>
                        </div>

                        {{-- third part of the form --}}

                        <h6 class="text-center form-title mt-4 pt-3 start-form">Professionel</h6>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputJob">Emploi actuel</label>
                                <input type="text" class="form-control" id="inputJob" name="emploi_actuel" value="{{$user->emploi_actuel}}" placeholder="emploi actuel">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputWantedJob">Emploi envisagé</label>
                                <input type="text" class="form-control" id="inputWantedJob" name="emploi_envisage" value="{{$user->emploi_envisage}}" placeholder="enploi envisagé">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputSpe">Spécialité</label>
                                <input type="text" class="form-control" id="inputSpe" name="specialite" value="{{$user->specialite}}" placeholder="spécialité">
                            </div>
                        </div>
                           <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputSexe">Votre role</label>
                                <select class="form-control" id="inputSexe" name="role">
                                    <option>--Role--</option>
                                    <option value='memebre' {{ $user->role == 'membre' ?'selected' : ''}}>membre</option>
                                    <option  value='pro' {{ $user->role == 'pro' ?'selected' : ''}}>pro</option>
                                    <option  value='admin' {{ $user->role == 'admin' ?'selected' : ''}}>admin</option>
                                </select>
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
