@extends('app')

@section('content')
    @include('test.header_irmr3_inc')

    <?php if (isset($_GET['step']) && $_GET['step'] == 3){ ?>
    <div class="container test-container">
        <h3 class="part-title font-weight-bold">Ecran <?=$_GET['part'] ?>/9</h3>
        <section class="irmr3-test-container">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-6"></div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">0</p>
                    <p>Ce métier ne m'attires pas</p>
                </div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">1</p>
                    <p>Ce métier m'est indifférent</p>
                </div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">2</p>
                    <p>Ce métier fait partie de mes préférés</p>
                </div>
            </div>
            <form action="" method="post">
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Exploitant agricole <span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                        <div class="form-check col-4 col-md-2 col-lg-2">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0">
                        </div>
                        <div class="form-check col-4 col-md-2 col-lg-2">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1">
                        </div>
                        <div class="form-check col-4 col-md-2 col-lg-2">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="2">
                        </div>
                </div>
                <div class="form-row irmr3-form-row">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Exploitant agricole <span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0">
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1">
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="2">
                    </div>
                </div>
            </form>
        </section>

    </div>


    <?php } ?>
@endsection