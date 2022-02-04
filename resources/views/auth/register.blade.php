@extends('app')
@section('content')
    <header class="upper-container d-flex">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                <div class="col-4 upper-image-container">
                    <img src="https://via.placeholder.com/640x360" alt="spirale grise et blanche" class="img-fluid">
                </div>
                <h6 class="text-uppercase col-8 col-md-2 upper-title my-2">questionnaires d'intérêts professionnels</h6>
            </div>
        </div>
    </header>
    <main class="mt-5 pt-4">
        <div class="container">
            <h3 class="font-weight-bold text-center mb-5">Avant de commencer le test, merci de renseigner les informations suivantes :</h3>
            <div class="pages d-flex align-items-center justify-content-center my-4">
                {{-- change the style when the steps advance --}}
                <p class='step my-0 mx-3 active-step'>Identité</p>
                <i class='fas fa-chevron-right <?php if(isset($_GET['step']) && $_GET['step'] >= 2){
                    echo 'active-chevron';
                } ?>'></i>
                <p class='step my-0 mx-3 <?php if(isset($_GET['step']) && $_GET['step'] >= 2){
                    echo 'active-step';
                } ?>'>Scolarité</p>
                <i class='fas fa-chevron-right <?php if(isset($_GET['step']) && $_GET['step'] >= 3){
                    echo 'active-chevron';
                } ?>'></i>
                <p class='step my-0 mx-3 <?php if(isset($_GET['step']) && $_GET['step'] >= 3){
                    echo 'active-step';
                } ?>'>Professionel</p>
            </div>
        </div>
        <div class="container">
            <?php if(isset($_GET['step']) && $_GET['step'] == '2'){ ?>
            {{-- second step of the form --}}
            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-12 col-md-5 col-lg-5 py-3">
                        <label for="studies" class="mr-3 mb-0">Votre niveau d'études ?</label>
                        <div class="select-container">
                            <select class="select-custom mb-3 form-control" id="studies">
                                <option value="brevet">Brevet</option>
                                <option value="BAC">BAC</option>
                            </select>
                            <span class="focus"></span>
                        </div>
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between mb-2">
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="scolarized" class="mr-3 mb-0">Êtes-vous scolarisé(e) ?</label>
                        <div class="select-container">
                            <select class="select-custom mb-3 form-control" id="scolarized">
                                <option value="non">Non</option>
                                <option value="oui">Oui</option>
                            </select>
                            <span class="focus"></span>
                        </div>

                    </div>
                    <div class="form-group col-12 col-md-5 col-lg-5 hidden-select-container hidden-sco">
                        <label for="InputStudies" class="disabled-element-sch">Votre classe</label>
                        <input type="text" class="form-control disabled-element-sch" id="InputClass" placeholder="Votre classe">
                    </div>
                    <div class="form-group col-12 col-md-5 col-lg-5 hidden-select-container hidden-sco">
                        <label for="InputStudies" class="disabled-element-sch">Votre niveau votre établissement</label>
                        <input type="text" class="form-control disabled-element-sch" id="InputSchool" placeholder="Votre établissement">
                    </div>
                    <div class="form-group col-12 col-md-5 col-lg-5 hidden-select-container hidden-sco">
                        <label for="InputStudies" class="disabled-element-sch">Votre section</label>
                        <input type="text" class="form-control disabled-element-sch" id="InputSection" placeholder="Votre section">
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <a href="?step=3" class="next-btn d-inline-block mx-auto my-0 pb-4">Suivant <i class='fas fa-chevron-right'></i></a>
                </div>
            </form>

            <?php }elseif(isset($_GET['step']) && $_GET['step'] == '3'){?>
            {{-- third step of the form --}}
            <form action="" method="post">
                <div class="form-row d-flex justify-content-between mb-2">
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="salarized" class="mr-3 mb-0">Êtes-vous scolarisé(e) ?</label>
                        <div class="select-container">
                            <select class="select-custom mb-3 form-control" id="salarized">
                                <option value="non">Non</option>
                                <option value="oui">Oui</option>
                            </select>
                            <span class="focus"></span>
                        </div>

                    </div>
                    <div class="form-group col-12 col-md-5 col-lg-5 hidden-sal">
                        <div class="select-container hidden-select-container hidden-sal">
                            <select class="select-custom mb-3 form-control">
                                <option value="">Votre etat</option>
                                <option value="etat1">etat 1</option>
                                <option value="etat2">etat 2</option>
                            </select>
                            <span class="focus"></span>
                        </div>
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between">
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="inputJob">Votre emploi actuel</label>
                        <input type="text" class="form-control" id="inputJob" placeholder="Votre emploi actuel">
                    </div>
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="inputWantedJob">Votre emploi envisagé</label>
                        <input type="text" class="form-control" id="inputWantedJob" placeholder="Votre emploi envisagé">
                    </div>
                </div>
                <div class="form-row d-flex">
                    <div class="form-group col-12">
                        <label for="inputSpe">Votre spécialité</label>
                        <input type="text" class="form-control" id="inputSpe" placeholder="Votre spécialité">
                    </div>
                </div>
                <input type="submit" class="submit-form btn btn-block purple-btn py-2 mt-4" value="Envoyer">
            </form>

            <?php }else{ ?>
            {{-- first step of the form --}}

            <form action="" method="post">
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

                <div class="form-row d-flex justify-content-between">
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
                <div class="d-flex justify-content-center align-items-center">
                    <a href="?step=2" class="next-btn d-inline-block mx-auto my-0 pb-4">Suivant <i class='fas fa-chevron-right'></i></a>
                </div>
            </form>
            <?php } ?>
        </div>


    </main>

@endsection
