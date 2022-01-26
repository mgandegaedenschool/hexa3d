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
        <div class="top-content p-4">
            <div class="options">
                <a href="#"><i class="fas fa-plus"></i> New</a>
            </div>
            <div class="admin-account">
                <a href="#">Bonjour, Admin</a>
            </div>
        </div>
        <aside class="pb-4">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </aside>
        <div class="content-container container-fluid">
            <div class="d-flex align-items-center justify-content-between flex-column flex-md-row flex-lg-row">
                <h2 class="div-users-title my-5 d-inline-block">Table des membres</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#exampleModal">
                    Ajouter un membre
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter un membre</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="" method="post">
                                        {{-- first part of the form --}}
                                        <h6 class="text-center form-title">Identité</h6>
                                        <div class="form-row d-flex justify-content-between">
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <label for="InputId">Votre identifiant ou adresse mail</label>
                                                <input type="text" class="form-control" id="InputId" placeholder="Votre identifiant ou adresse mail">
                                            </div>
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <label for="InputPassword1">Votre mot de passe</label>
                                                <input type="password" class="form-control" id="InputPassword1" placeholder="Votre mot de passe">
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between">
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <label for="inputName">Votre nom</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="Votre nom">
                                            </div>
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <label for="inputFirstName">Votre prénom</label>
                                                <input type="text" class="form-control" id="inputFirstName" placeholder="Votre prénom">
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between end-form">
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <label for="inputAge">Votre âge</label>
                                                <input type="number" class="form-control" id="inputAge" placeholder="Votre âge">
                                            </div>
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <label for="inputSexe">Votre sexe</label>
                                                <select class="form-control" id="inputSexe">
                                                    <option>--Votre sexe--</option>
                                                    <option value="homme">Homme</option>
                                                    <option value="femme">Femme</option>
                                                    <option value="autre">autre</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- second part of the form --}}
                                        <h6 class="text-center form-title mt-4 pt-3 start-form">Scolarité</h6>
                                        <div class="form-row">
                                            <div class="form-group col-12 col-md-5 col-lg-5 py-3">
                                                <label for="InputStudies">Votre niveau d'études</label>
                                                <input type="text" class="form-control" id="InputStudies" placeholder="Votre niveau d'études">
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between hidden-field p-3 mb-2">
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <div class="form-check d-flex align-items-center flex-wrap schol">
                                                    <label for="inlineRadio4" class="mr-3 mb-0">Êtes-vous scholarisé(e) ?</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input radioSch" type="radio" name="inlineRadioOptions2" id="inlineRadio3" value="yes">
                                                        <label class="form-check-label" for="inlineRadio3">Oui</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input radioSch" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="no" checked>
                                                        <label class="form-check-label" for="inlineRadio4">Non</label>
                                                    </div>
                                                </div>
                                                <label for="InputStudies" class="hidden disabled-element-sch">Votre classe</label>
                                                <input type="text" class="form-control disabled-element-sch hidden" id="InputClass" placeholder="Votre classe">
                                                <label for="InputStudies" class="hidden disabled-element-sch">Votre niveau votre établissement</label>
                                                <input type="text" class="form-control disabled-element-sch hidden" id="InputSchool" placeholder="Votre établissement">
                                                <label for="InputStudies" class="hidden disabled-element-sch">Votre section</label>
                                                <input type="text" class="form-control disabled-element-sch hidden" id="InputSection" placeholder="Votre section">
                                            </div>
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <div class="form-check d-flex align-items-center flex-wrap salary">
                                                    <label for="inputScholarized" class="mb-0 mr-3">Êtes-vous salarié(e) ?</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input radioSal" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input radioSal" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                                    </div>
                                                </div>
                                                <label for="InputStudies" class="hidden disabled-element-sal">Votre état</label>
                                                <input type="text" class="form-control disabled-element-sal hidden" id="InputStatus" placeholder="Votre état">
                                            </div>
                                        </div>
                                        {{-- third part of the form --}}
                                        <h6 class="text-center form-title mt-4 pt-3 start-form">Professionel</h6>
                                        <div class="form-row d-flex justify-content-between">
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <label for="inputJob">Votre emploi actuel</label>
                                                <input type="text" class="form-control" id="inputJob" placeholder="Votre emploi actuel">
                                            </div>
                                            <div class="form-group col-12 col-md-5 col-lg-5">
                                                <label for="inputWantedJob">Votre emploi envisagé</label>
                                                <input type="text" class="form-control" id="inputWantedJob" placeholder="Votre enploi envisagé">
                                            </div>
                                        </div>
                                        <div class="form-row d-flex">
                                            <div class="form-group col-12">
                                                <label for="inputSpe">Votre spécialité</label>
                                                <input type="text" class="form-control" id="inputSpe" placeholder="Votre spécialité">
                                            </div>
                                        </div>
                                        <div class="modal-footer mt-4">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            <input type="submit" class="btn btn-primary" value="Ajouter le membre">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between flex-wrap mb-4">
                <div class="show-users-select mr-md-4 pt-4">
                    <!-- si vous avez besoin d'un formulaire pour le nombre de membres à afficher -->
                    <form action="" method="">
                        Show <select name="" id="">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select> entries
                    </form>
                </div>
                <div class="search-users pt-4">
                    Search :
                    <!-- si vous avez besoin d'un formulaire pour les recherches -->
                    <form action="" method="" class="ml-2">
                        <input type="search" name="">
                    </form>
                </div>
            </div>
            <div class="users-container d-flex">
                <table class="table table-hover w-auto table-bordered table-users table-responsive mb-0">
                    <thead>
                    <tr>
                        <th scope="col">id_user</th>
                        <th scope="col">firstname</th>
                        <th scope="col">lastname</th>
                        <th scope="col">email</th>
                        <th scope="col">username</th>
                        <th scope="col">niv_etude</th>
                        <th scope="col">classe</th>
                        <th scope="col">section</th>
                        <th scope="col">sexe</th>
                        <th scope="col">age</th>
                        <th scope="col">scolarisé</th>
                        <th scope="col">établissement</th>
                        <th scope="col">salarié</th>
                        <th scope="col">emploi_actuel</th>
                        <th scope="col">spécialité</th>
                        <th scope="col">état</th>
                        <th scope="col">emploi_envisagé</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->firstname}}</td>
                          <td>{{$user->lastname}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->username}}</td>
                          <td>{{$user->niv_etude}}</td>
                          <td>{{$user->classe}}</td>
                          <td>{{$user->section}}</td>
                          <td>{{$user->sexe}}</td>
                          <td>{{$user->age}}</td>
                          <td>{{$user->scolarise}}</td>
                          <td>{{$user->etablissement}}</td>
                          <td>{{$user->salarie}}</td>
                          <td>{{$user->emploi_actuel}}</td>
                          <td>{{$user->specialite}}</td>
                          <td>{{$user->emploi_envisage}}</td>
                          <td>{{$user->emploi_envisage}}</td>
                          <td><a href="{{route('admin.show',$user)}}""><i class="far fa-eye user-tab-icon"></i></a>
                          <a href="{{route('admin.edit',$user)}}"><i class="fas fa-pen user-tab-icon"></i></a>
                          <a href="{{route('admin.delete',$user)}}""><i class="far fa-trash-alt user-tab-icon"  onclick="return(confirm('Voulez-vous vraiment supprimer les données?'))"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                {{-- <div class="no-defil">
                    <p>actions</p>
                    <div>
                        <a href=""><i class="far fa-eye user-tab-icon"></i></a>
                        <a href=""><i class="fas fa-pen user-tab-icon"></i></a>
                        <a href=""><i class="far fa-trash-alt user-tab-icon"  onclick="return(confirm('Voulez-vous vraiment supprimer les données?'))"></i></a>
                    </div>
                </div> --}}
            </div>
            <div class="d-flex justify-content-between mb-4">
                <div class="show-entries">
                    <p>Showing 1 to 2 of 2 entries</p>
                </div>
                <div class="previous-and-next justify-content-between mt-3">
                    <a href=""><i class="fas fa-chevron-left"></i> Previous</a>
                    <!-- si vous avez besoin d'un formulaire pour le numéro de la page à afficher -->
                    <form action="" method="" class="show-entries-form"><input class="page-number" value="1"></form>
                    <a href="">Next <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </main>
@endsection