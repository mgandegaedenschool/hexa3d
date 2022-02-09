@extends('app')
<?php
if (!empty($_GET)){
    var_dump($_GET);
    extract($_GET);
    if(isset($_GET['actions'])){
        if($_GET['actions'] == 'import'){
            $modalType = 'import';
        }
    }
}else{
    if(!isset($_GET['actions'])){
        $modalType = 'create';
    }
}
?>
@section('content')
    <header class="upper-container d-flex espace-pro-header">
        <div class="header-contain espace-pro-header-contain">
            <div class="row d-flex align-items-center img-text-nav icon-qip-pro">
                @include('espace_membre.header_img_inc')
            </div>
            <div class="espace-pro-profil-pro">
                <div class="espace-pro-profil-text-n-link">
                    <p class="espace-pro-profil-text">Mon espace test</p>
                    <p class="espace-pro-profil-link">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>retour à mon espace personnel</a>
                    </p>
                </div>
                <div class="espace-pro-profil-icon-div">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person " viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                </div>

            </div>
        </div>
    </header>
    <div class="espace-pro-container">
        <div class="my-credits">
            <h2 class="my-credits-title pb-3">
                Mes crédits
            </h2>
            <div class="my-credits-content">
                <div class="my-credits-balance">
                    <p>Solde à ce jour :<span>X crédits restants</span></p>
                </div>
                <div class="my-credits-expiration-n-buy">
                    <p>Expiration : le xx/xx/xxxx</p>
                    <p class="credits-buy-link"><a href="" class="d-flex align-items-center">Racheter des crédits <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg></a></p>
                </div>

            </div>
        </div>

        <div class="my-beneficiaires mt-4">
            <h2 class="my-beneficiaires-title pb-3">
                Mes bénéficiaires
            </h2>
            <div class="my-beneficiaires-content">
                @include('espace_pro.espace_pro_'.$modalType.'_inc')
                <form action="" class="espace-pro-form-actions-n-filter mt-4 mt-lg-0" method="get">
                    <div class="input-group mb-3">
                        <select class="custom-select pro-actions-select mb-3" id="actions" name="actions">

                            <option value="group-actions">Actions groupées</option>
                            <option value="import"  data-toggle="modal" data-target="#proImportModal">Importer des bénéficiaires</option>
                            <option value="delete">Supprimer des bénéficiaires</option>
                            <option value="invite">Invitation par mail</option>
                            <option value="download-result">Télécharger des résultats</option>
                            <option value="send-result">Envoyer des résultats</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <select class="custom-select pro-filters-select espace-pro-select-actions-n-filter" id="filtres" name="filtres">
                            {{-- laisser le js pour le select filter --}}
                            <option value="filters" <?php if(isset($_POST['filters']) && $_POST['filters'] == 'filters'){ echo "selected"; } ?> >Filtres</option>
                            <option value="last-week" <?php if(isset($_POST['filters']) && $_POST['filters'] == 'last-week'){ echo "selected"; } ?>>La dernière semaine</option>
                            <option value="last-month" <?php if(isset($_POST['filters']) && $_POST['filters'] == 'last-month'){ echo "selected"; } ?>>Le dernier mois</option>
                            <option value="last-six-months" <?php if(isset($_POST['filters']) && $_POST['filters'] == 'last-six-months'){ echo "selected"; } ?>>Les 6 derniers mois</option>
                            <option value="last-year" <?php if(isset($_POST['filters']) && $_POST['filters'] == 'last-year'){ echo "selected"; } ?>>Les 12 derniers mois</option>
                        </select>
                    </div>


                    <div class="d-flex align-items-baseline">
                        <input type="checkbox" id="allSelect" class="espace-pro-checkbox"><label for="allSelect" class="ml-2 espace-pro-selectAll">Tout sélectionner</label>
                    </div>

                    <div class="nom-input-pro search-input-pro">
                        <label for="nom-input">Nom</label>
                        <input type="search" id="nom-input" placeholder='Rechercher' class="form-control search-input-pro-input">
                    </div>
                    <div class="prenom-input-pro search-input-pro">
                        <label for="prenom-input">Prénom</label>
                        <input type="search" id="prenom-input" placeholder="Rechercher" class="form-control search-input-pro-input">
                    </div>
                    <div class="mail-input-pro search-input-pro">
                        <label for=mail-input"">Mail</label>
                        <input type="search" id="mail-input" placeholder="Rechercher" class="form-control search-input-pro-input">
                    </div>
                    <div class="sexe-input-pro search-input-pro">
                        <label for="sexe-input">Sexe</label>
                        <input type="search" id="sexe-input" placeholder="Rechercher" class="form-control search-input-pro-input">
                    </div>
                    <div class="date-input-pro search-input-pro">
                        <label for="date-input">Date</label>
                        <input type="date" id="date-input" placeholder="Rechercher" class="form-control search-input-pro-input">
                    </div>


                <table class="table table-hover w-auto table-benef table-responsive mb-0 mt-5">
                    <tbody>
                    <tr>
                        <td><input type="checkbox" class="espace-pro-checkbox"></td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Mail</td>
                        <td>Sexe</td>
                        <td>Date</td>
                        <td class="espace-pro-eye-icon"><a href=""></a></td>
                    </tr>
                    </tbody>
                </table>

                </form>
            </div>
        </div>
    </div>

    <footer class="espace-pro-footer">
        <div class="pro-benef-pages">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center benef-results-ul">
                    <li class="page-item">
                        <a class="page-link previous-benef-results" href="#" aria-label="Previous">
                            <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link next-benef-results" href="#" aria-label="Next">
                            <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="test-passed-not-passed mt-3">
            <p>Tests passés / <span class="text-danger">Tests non passés</span></p>
        </div>
    </footer>


@endsection