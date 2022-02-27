@extends('app')

@section('content')
    @include('test.header_irmr3_inc')

    <?php
        if(isset($_GET['part']) && !isset($_GET['step'])){
            if(isset($_GET['part']) && $_GET['part'] == 2){
    ?>
                <!-- AVANT DE COMMENCER -->
                <div class="container main-div irmr3-start-test-main">
                    <h2 class="irmr3-title-start">Avant de commencer</h2>

                    <div class="mb-5 consignes-div">
                        <p class="text-left text-wrap text-consignes-irmr3">Avant de réaliser la passation du questionnaire d’intérêts professionnels IRMR3, l’administrateur du test doit vous en expliquer l’objectif et la manière dont les résultats seront utilisés</p>
                    </div>
                    <h2 class="irmr3-title-start">Ce que l'IRMR3 vous propose</h2>

                    <div class="mb-5 consignes-div">
                        <span class="mb-5 d-block">L’IRMR vous aide à décrire vos intérêts professionnels.</span>
                        <p class="text-left text-wrap text-consignes-irmr3">Vos réponses déterminent votre profil individuel qui ne sera communiqué qu’à la personne ou à l’organisme qui vous a envoyé ce lien et ce mot de passe. </p>
                        <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                            <a href="?part=3" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
                        </div>
                    </div>
                </div>

    <?php
            }
            elseif(isset($_GET['part']) && $_GET['part'] == 3){
    ?>
                <!-- OU ET QUAND PASSER L'IRMR -->
                <div class="container main-div irmr3-start-test-main">
                    <h1 class="irmr3-title-start">Où et quand passer l’IRMR ?</h1>

                    <div class="mb-5 consignes-div">
                        <p class="text-left text-wrap text-consignes-irmr3">Le profil obtenu à partir de l’IRMR dépend de la précision et de l’honnêteté de vos réponses ; celles-ci peuvent être affectées par les conditions dans lesquelles vous vous trouvez au moment de la passation.</p>
                        <p class="text-left text-wrap text-consignes-irmr3">Vous devez veiller à être confortablement installé(e) dans un environnement calme, sans distractions, ni interruptions. Éteignez votre mobile et fermez votre boîte de messagerie.</p>
                        <p class="text-left text-wrap text-consignes-irmr3">Prévenez votre entourage que vous ne voulez pas être dérangé(e). Il est également préférable que vous répondiez à l’IRMR lorsque votre niveau d’attention est le plus élevé.</p>
                        <p class="text-left text-wrap text-consignes-irmr3">En procédant de cette manière, vos réponses permettront de dégager un profil réellement utile à la personne ou l’organisme qui vous en a fait la demande, et pourra également vous apporter des informations pour votre développement personnel.</p>
                        <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                            <a href="?part=2" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                            <a href="?part=4" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
                        </div>
                    </div>
                </div>
    <?php
            }
            elseif(isset($_GET['part']) && $_GET['part'] == 4){
            ?>

            <!-- DUREE DU TEST -->
            <div class="container main-div irmr3-start-test-main">
                <div class="icon-container-irmr3 mx-auto">
                    <div class="icon-container-size-irmr3">
                        <img src="../img/settings.svg" class="bi bi-gear check-test-end" alt="">
                    </div>
                </div>
                <h2 class="irmr3-title-start">Durée du test</h2>

                <div class="mb-5 consignes-div w-100">
                    <p class="text-left text-wrap text-consignes-irmr3">La durée du test n’est <span>pas limitée</span> , mais il faut prévoir <span>15 à 20 minutes</span> pour répondre à toutes ces questions. </p>
                </div>
                <h2 class="irmr3-title-start">Comment répondre ? </h2>

                <div class="mb-5 consignes-div w-100">
                    <p class="text-left text-wrap text-consignes-irmr3">Il vaut mieux ne pas s’attarder trop longtemps sur les différents items. </p>
                    <span class="mt-5 d-block">Votre première idée est souvent la meilleure.</span>

                    <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                        <a href="?part=3" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                        <a href="?part=5" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
                    </div>
                </div>
            </div>
    <?php
            }
            elseif(isset($_GET['part']) && $_GET['part'] == 5){
    ?>
            <!-- EN CAS D'INTERRUPTION -->
            <div class="container main-div irmr3-start-test-main">
                <h2 class="irmr3-title-start">En cas d'interruption</h2>

                <div class="mb-5 consignes-div">
                    <p class="text-left text-wrap text-consignes-irmr3"><span>Si votre connexion internet est interrompue</span>, reconnectez-vous en utilisant les mêmes identifiants, vous serez alors redirigé(e) automatiquement vers le dernier écran consulté.</p>
                    <p class="text-left text-wrap text-consignes-irmr3"><span>Si vous êtes interrompu(e) ou souhaitez interrompre la passation</span>, il vous suffit de fermer votre navigateur. </p>
                    <p class="text-left text-wrap text-consignes-irmr3"><span>Quand vous vous reconnecterez</span> (même identifiants), vous serez redirigé(e) automatiquement vers le dernier écran consulté.</p>
                </div>
                <h2 class="irmr3-title-start">En cas de difficulté</h2>

                <div class="mb-5 consignes-div w-100">
                    <p class="text-left text-wrap text-consignes-irmr3">Veuillez prendre contact avec la personne qui vous a envoyé la passation de l’IRMR3. </p>
                    <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                        <a href="?part=4" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                        <a href="?part=6" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
                    </div>
                </div>
            </div>
    <?php
            }
            elseif(isset($_GET['part']) && $_GET['part'] == 6){
    ?>
            <!-- DROIT ET PROPRIETE INTELLECTUELLE -->
            <div class="container main-div irmr3-start-test-main">
                <h2 class="irmr3-title-start">Droits et propriété intellectuelle</h2>

                <div class="mb-5 consignes-div">
                    <p class="text-left text-wrap text-consignes-irmr3">Si votre connexion internet est interrompue, reconnectez-vous en utilisant les mêmes identifiants, vous serez alors redirigé(e) automatiquement vers le dernier écran consulté.</p>
                    <p class="text-left text-wrap text-consignes-irmr3">Si vous êtes interrompu(e) ou souhaitez interrompre la passation, il vous suffit de fermer votre navigateur. </p>
                    <p class="text-left text-wrap text-consignes-irmr3">Quand vous vous reconnecterez (même identifiants), vous serez redirigé(e) automatiquement vers le dernier écran consulté.</p>

                    <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                        <a href="?part=5" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                        <a href="test_irmr3_consignes?step=2" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
                    </div>
                </div>
            </div>
    <?php
            }
        } else{
    ?>
            <div class="container main-div irmr3-start-test-main">
                <h1 class="irmr3-title-start">Vous vous apprêtez à passer le questionnaire d'intérêts professionels IRMR3.</h1>

                <div class="mb-5 form-start-irmr3-test">
                    <p class="">Les consignes vont vous être expliquées.</p>
                    <p class="">Êtes-vous prêts ?</p>
                    <div class="text-center irmr-3-test-ready-btn">
                        <a href="?part=2" class="irmr3-btn-kaki btn py-3">Oui, je le suis</a>
                        <a class="irmr3-continue-later py-3" href="">Non, je continuerai plus tard</a>
                    </div>

                </div>
            </div>
    <?php
        }
    ?>

@endsection
