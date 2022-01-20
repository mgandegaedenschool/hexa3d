@extends('app')

@section('content')
    <header class="upper-container">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav two-img-nav py-3">
                <div class="col-4 upper-image-container">
                    <img src="https://via.placeholder.com/640x360" alt="spirale grise et blanche" class="img-fluid">
                </div>
                <div class="col-4 upper-image-container">
                    <img src="https://via.placeholder.com/640x360" alt="spirale grise et blanche" class="img-fluid">
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

        <aside>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Add</a>
                <a href="#" class="list-group-item list-group-item-action">Post</a>
                <a href="#" class="list-group-item list-group-item-action">Post</a>
                <a href="#" class="list-group-item list-group-item-action">Post</a>
            </div>
        </aside>

        <div class="content-container p-5">

            <h2 class="div-users-title my-5">Table des membres</h2>

            <div class="d-flex justify-content-between mb-4">
                <div class="show-users-select">
                    <!-- si vous avez besoin d'un formulaire pour le nombre de membres à afficher -->
                    <form action="" method="">
                    Show <select name="" id="">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                    </select> entries
                    </form>
                </div>
                <div class="search-users">
                    Search :
                    <!-- si vous avez besoin d'un formulaire pour les recherches -->
                    <form action="" method="" class="ml-2">
                        <input type="text" name="">
                    </form>
                </div>
            </div>

            <table class="table table-hover table-bordered table-users table-responsive">
                <thead>
                <tr>
                    <th scope="col">id_user</th>
                    <th scope="col">name_user</th>
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
                    <th scope="col">actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Mark@gmail.com</td>
                    <td>Mark123</td>
                    <td>lycée</td>
                    <td>seconde</td>
                    <td>?</td>
                    <td>homme</td>
                    <td>15</td>
                    <td>oui</td>
                    <td>Lycée Henri IV</td>
                    <td>non</td>
                    <td>?</td>
                    <td>anglais</td>
                    <td>célibataire</td>
                    <td>boucher</td>
                    <td>
                        <a href=""><i class="far fa-eye user-tab-icon"></i></a>
                        <a href=""><i class="fas fa-pen user-tab-icon"></i></a>
                        <a href=""><i class="far fa-trash-alt user-tab-icon"  onclick="return(confirm('Voulez-vous vraiment supprimer les données?'))"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
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
