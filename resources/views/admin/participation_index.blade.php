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
            <h1 class="text-center bo-title">Accueil des participations</h1>
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
                    <a class="nav-link" href="reponse_index">R??ponse</a>
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
                <h2 class="div-title my-5 d-inline-block">Table des participations</h2>
                @include('admin.participation_create_inc')
            </div>

            <div class="d-flex justify-content-between flex-wrap mb-4">
                <div class="show-select mr-md-4 pt-4">
                    <!-- si vous avez besoin d'un formulaire pour le nombre de membres ?? afficher -->
                    <form action="">
                        Show <select name="" id="">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select> entries
                    </form>
                </div>
                <div class="search-container pt-4">
                    Search :
                    <!-- si vous avez besoin d'un formulaire pour les recherches -->
                    <form action="" method="" class="ml-2">
                        <input type="search" name="">
                    </form>
                </div>
            </div>
            <div class="d-flex w-100 justify-content-center">
                <table class="table table-hover w-auto table-bordered table-users table-responsive mb-0">
                    <thead>
                    <tr>
                        <th scope="col">actions</th>
                        <th scope="col">id_participation</th>
                        <th scope="col">date</th>
                        <th scope="col">id_test</th>
                        <th scope="col">id_user</th>
                        <th scope="col">id_etalonnage_defaut</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="no-defil">
                            <a href="{{route('admin.participation_show')}}"><i class="far fa-eye user-tab-icon"></i></a>
                            <a href="{{route('admin.participation_edit')}}"><i class="fas fa-pen user-tab-icon"></i></a>
                            <a href=""><i class="far fa-trash-alt user-tab-icon"  onclick="return(confirm('Voulez-vous vraiment supprimer les donn??es?'))"></i></a>
                        </td>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Mark@gmail.com</td>
                        <td>Mark123</td>
                        <td>lyc??e</td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <div class="d-flex justify-content-between flex-wrap mb-4">
                <div class="show-entries">
                    <p>Showing 1 to 2 of 2 entries</p>
                </div>
                <div class="previous-and-next justify-content-between mt-3">
                    <a href=""><i class="fas fa-chevron-left"></i> Previous</a>
                    <!-- si vous avez besoin d'un formulaire pour le num??ro de la page ?? afficher -->
                    <form action="" method="" class="show-entries-form"><input class="page-number" value="1"></form>
                    <a href="">Next <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </main>

@endsection
