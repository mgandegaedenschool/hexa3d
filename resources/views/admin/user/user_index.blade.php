@extends('app')
@section('content')
@isset($id)
{{$id}}
@endisset
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
     
        <div class="content-container">
            <div class="d-flex align-items-center justify-content-between flex-column flex-md-row flex-lg-row">
                <h2 class="div-title my-5 d-inline-block"></h2>
                    @include('admin.user.user_create_inc')
                @if(session('status'))
                    @include('admin.user.popup.popup_ajout_confirm_inc')
                @endif
                @if(session('invitation'))
                    @include('admin.user.popup.popup_send_test_inc')
                @endif
                @if(session('success'))
                    @include('admin.user.popup.popup_delete_inc')
                @endif
                    <form action="{{route('pro.index')}}" method="get" class="ml-2">
                        @csrf
                    <div class="input-group mb-3">
                        <select class="custom-select pro-actions-select mb-3" id="inputGroupSelect02" name="options">
                            <option value="">Actions groupées</option>
                            <option name="import">Importer des bénéficiaires</option>
                            <option name='delete' value="delete">Supprimer des bénéficiaires</option>
                            <option name="invitation" value="invitation">Invitation par mail</option>
                            <option name="download_result">Télécharger des résultats</option>
                            <option name="send_msg">Envoyer des résultats</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <select class="custom-select pro-filters-select" id="inputGroupSelect02" name="filtre">
                            <option value="">Filtres</option>
                            <option value="last_weeek">La dernière semaine</option>
                            <option value="last_month">Le dernier mois</option>
                            <option value="last_six_months">Les 6 derniers mois</option>
                            <option value="last_ten_months">Les 12 derniers mois</option>
                        </select>
                    </div>



                    <label for="nom">Nom:</label>
                    <input type="search" id="nom" name="rechNom" placeholder="Nom" class="">
                    <label for="prenom">Prenom:</label>
                    <input type="search" id="prenom" name="rechPrenom" placeholder="Prenom">
                    <label for="email">Email:</label>
                    <input type="search" id="email" name="rechEmail" placeholder="Email">
                    <label for="sexe">Sexe:</label>
                    <input type="search" id="sexe" name="rechSexe" placeholder="Sexe">
                    <label for="nom">Date:</label>
                    <input type="date" id="date" name="rechDate" placeholder="Date">
                   

                    <div class="d-flex w-100 justify-content-center">
                        <table class="table table-hover w-auto table-bordered table-users table-responsive mb-0">
                            <thead>
                            <tr>
                                <th scope="col">actions</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Mail</th>
                                <th scope="col">sexe</th>
                                <th scope="col">Date</th>    
                            </tr>
                            </thead>
    

<!-- Modal -->
{{-- @if (session('status'))
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">       
            <div class="modal-body">
                <div class="container-fluid">
                    <tbody>  
                       
                            {{-- <div class="alert alert-success"> --}}
                                {{-- {{ session('status') }} --}}
                            {{-- </div> --}}
                       
                    {{-- </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endif     --}}




                           @foreach($users as $user)
                            <tr>
                                <td><input type="checkbox" id="scales" name="scales[]" value="{{$user->id}}"></td>               
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->firstname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->sexe}}</td>
                                <td>{{$user->date}}</td>
                                <td class="no-defil">
                                    <a href="{{route('pro.show',$user->id)}}"><i class="far fa-eye user-tab-icon"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <input type="submit">

                </form>
            </div>

       
           
                <div class="search-container pt-4">
                    {{-- <form action="{{route('pro.index')}}" method="get" class="ml-2">
                        @csrf --}}
                            {{-- <input type="search" name="query"> --}}
                          
                            {{-- <label for="nom">Nom:</label>
                            <input type="search" id="nom" name="rechNom" placeholder="Nom" class="">
                            <label for="prenom">Prenom:</label>
                            <input type="search" id="prenom" name="rechPrenom" placeholder="Prenom">
                            <label for="email">Email:</label>
                            <input type="search" id="email" name="rechEmail" placeholder="Email">
                            <label for="sexe">Sexe:</label>
                            <input type="search" id="sexe" name="rechSexe" placeholder="Sexe">
                            <label for="nom">Date:</label>
                            <input type="date" id="date" name="rechDate" placeholder="Date">
                           
                             
                   

                            <div class="d-flex w-100 justify-content-center">
                                <table class="table table-hover w-auto table-bordered table-users table-responsive mb-0">
                                    
                                    <thead>
                                    <tr>
                                        <th scope="col">actions</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Mail</th>
                                        <th scope="col">sexe</th>
                                        <th scope="col">Date</th>
            
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                    @foreach($users as $user)
            
                                    <tr>
                                        <td><input type="checkbox" id="scales" name="scales" value="5"></td>               
                                        <td>{{$user->lastname}}</td>
                                        <td>{{$user->firstname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->sexe}}</td>
                                        <td>{{$user->date}}</td>
                                        <td class="no-defil">
                                            <a href="{{route('pro.show',$user->id)}}"><i class="far fa-eye user-tab-icon"></i></a>
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <input type="submit">

                        {{-- </form> --}} 
                  
                </div>
                
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
