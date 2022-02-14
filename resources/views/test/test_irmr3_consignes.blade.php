@extends('app')

@section('content')
    @include('test.header_irmr3_inc')

    <?php
    if(isset($_GET['part']) && isset($_GET['step'])){
        if(isset($_GET['part']) && $_GET['part'] == 2){
            ?>
    <div class="container main-div irmr3-start-test-main">
        <div class="icon-container-irmr3 mx-auto">
            <div class="icon-container-size-irmr3">
                <img src="../img/settings.svg" class="bi bi-gear check-test-end" alt="">
            </div>
        </div>
        <div class="mb-5 consignes-div">
            <p class="text-left text-wrap text-consignes-irmr3">Ne considérez <span>ni la question de la rémunération, ni celle de vos possibilités de réussite</span>, classez-les seulement selon votre préférence</p>
            <p class="text-left text-wrap text-consignes-irmr3">Les noms des métiers présentés ont été écrits au masculin ou au féminin selon l’usage le plus habituel. Bien entendu, <span>tous ces métiers peuvent être exercés également par des hommes et par des femmes.</span></p>
            <p class="text-left text-wrap text-consignes-irmr3">Travaillez rapidement selon vos premières impressions.</p>
            <div class="mb-5 form-start-irmr3-test">
                <span>Êtes-vous prêt(e) à continuer ? </span>
                <div class="text-center irmr-3-test-ready-btn">
                    <a href="{{route('test.test_irmr3_formulaire')}}?step=3&part=1" class="irmr3-btn-kaki btn py-3">Oui, je le suis</a>
                    <button class="irmr3-continue-later py-3" data-toggle="modal" data-target="#conditionsIrmr3Leave">Non, je continuerai plus tard
                    </button>
                </div>

            </div>
        </div>

    </div>
    <?php
    }
    } else{
    ?>
    <div class="container main-div irmr3-start-test-main">
        <div class="icon-container-irmr3 mx-auto">
            <div class="icon-container-size-irmr3">
                <img src="../img/settings.svg" class="bi bi-gear check-test-end" alt="">
            </div>
        </div>
        <h1 class="irmr3-title-start">Voici les consignes pour le questionnaire IRMR3.</h1>

        <div class="mb-5 consignes-div">
            <p class="text-left text-wrap text-consignes-irmr3">Vous trouverez, dans les écrans qui vont vous être présentés, <span>des listes de métiers groupés par séries de 12.</span> Parmi ces métiers, il est possible que vous en aimiez certains, un peu moins d'autres et pas du tout quelques-uns. Ce questionnaire est destiné à connaitre vos prérérences pour ces métiers. Pour cela, nous vous demandons de <span>choisir les quatres métiers que vous préférez et les quatre que vous aimez le moins.</span></p>
            <p class="consignes-list-title pt-4">Pour chaque liste de métiers, vous donnerez :</p>
            <p class="text-left consignes-list">
                <span>- la note 2 aux quatre métiers que vous préférez</span>
                <span>- la note 0 aux quatre métiers que vous aimez le moins ou que vous rejetez</span>
                <span>- la note 1 aux métiers restants pour indiquer que vous ne les avez ni choisis ni rejetés</span>
            </p>
            <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                <a href="test_irmr3_conditions?part=6" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                <a href="test_irmr3_consignes?step=2&part=2" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
            </div>
        </div>

    </div>
    <?php
    }
    ?>

    <!-- Modal -->
    <div class="modal fade" id="conditionsIrmr3Leave" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-irmr3-dialog">
            <div class="modal-content modal-irmr3-content">
                <div class="modal-header modal-espace-irmr3-header py-4">
                    <div class="container-fluid modal-irmr3-header-contain">
                        <h5 class="modal-title irmr3-title-start" id="exampleModalLabel">Vous souhaitez suspendre votre test ?</h5>
                    </div>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-start-irmr3-test">
                            <p>En utilisant le lien reçu par mail, vous pourrez le reprendre à l'endroit où vous l'avez coupé.</p>
                            <div class="text-center irmr-3-test-ready-btn">
                                <button type="button" data-dismiss="modal" aria-label="Close" class="close irmr3-btn-kaki irmr3-start-modal-btn py-2">Je continue mon test</button>
                                <a class="irmr3-continue-later py-3" href="">Je quitte mon test</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
