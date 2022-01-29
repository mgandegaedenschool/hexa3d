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
            <h1 class="text-center bo-title">Accueil des membres</h1>
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
                    <a class="nav-link" href="{{route('user.index')}}">Membres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">Domaine</a>
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
            <div class="d-flex align-items-center justify-content-between flex-column flex-md-row flex-lg-row">
                <h2 class="div-title my-5 d-inline-block">Table des membres</h2>
                @include('admin.user.user_create_inc')
            </div>

            <div class="d-flex justify-content-between flex-wrap mb-4">
                <div class="show-select mr-md-4 pt-4">
                    <!-- si vous avez besoin d'un formulaire pour le nombre de membres à afficher -->
                     {{-- <form action="{{route('admin.member')}}" method="get" class="ml-2">
                    @csrf
                        Affichage <select name="q" id="">
                            <option value="5"  @if($val == 5) selected @endif> 5</option>
                            <option value="10" @if($val == 10) selected @endif>10</option>
                            <option value="20" @if($val == 20) selected @endif>20</option>
                        </select> entrées
                        <input type="submit">
                    </form> --}}
                </div>
                <div class="search-container pt-4">
                    Search :
                    <!-- si vous avez besoin d'un formulaire pour les recherches -->
                    <form action="{{route('admin.member')}}" method="get" class="ml-2">
                    @csrf
                        <input type="search" name="query">
                    </form>
                </div>
                
            </div>
            <div class="d-flex w-100 justify-content-center">
                <table class="table table-hover w-auto table-bordered table-users table-responsive mb-0">
                    <thead>
                    <tr>
                        <th scope="col">actions</th>
                        <th scope="col">id_user</th>
                        <th scope="col">first name</th>
                        <th scope="col">last name</th>
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
                        <th scope="col">role</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                    <tr>
                        <td class="no-defil">
                            <a href="{{route('user.show',$user->id)}}"><i class="far fa-eye user-tab-icon"></i></a>
                            <a href="{{route('user.edit',$user->id)}}"><i class="fas fa-pen user-tab-icon"></i></a>
                            {{-- <a href="{{route('admin.user_delete',$user)}}"><i class="far fa-trash-alt user-tab-icon"  
                            onclick="return(confirm('Voulez-vous vraiment supprimer les données?'))"></i></a> --}}
                         <form action="{{route('user.destroy',$user->id)}}" method="post" id="destroy-post-form">
                                @csrf 
                                @method('DELETE')
                                <input type="submit" class="far fa-trash-alt user-tab-icon"  
                            onclick="return(confirm('Voulez-vous vraiment supprimer les données?'))" value="delete">
                            </form>
                        </td>
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
                        <td>{{$user->etat}}</td>
                        <td>{{$user->emploi_envisage}}</td>
                        <td>{{$user->role}}</td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>

            @isset($items)
            <div class="d-flex justify-content-between flex-wrap mb-4">
                <div class="show-entries">
               
                    <p>Affichage de {{$items['pageCourant']}} sur {{$items['nbPages']}} avec {{$items['nbItems']}} entrées</p>

                </div>
                <div class="previous-and-next justify-content-between mt-3">
                   {{ $users->links() }}

                </div>
            </div>
             @endisset
        </div>
    </main>

@endsection
